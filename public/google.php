<?php
	/**
		* Facebook
		*
		* @package     
		* @subpackage  Integration
		* @copyright   Copyright (c) 2017, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	if ( ! defined( 'ABSPATH' ) ) exit;
	
	$settings = $this->option;
	
	global $wp, $wpdb;
    if (isset($_GET['action']) && $_GET['action'] == 'unlink') {
        $user_info = wp_get_current_user();
        if ($user_info->ID) {
            $wpdb->query($wpdb->prepare('DELETE FROM ' . $wpdb->prefix . 'wow_social_users
			WHERE ID = %d
			AND type = \'google\'', $user_info->ID));
            set_site_transient($user_info->ID . '_wow_admin_notice', 'Your Google profile is successfully unlinked from your account.', 3600);
		}
        self::redirect();
	}
	
	include ('google/init.php');
	
	if (isset($_GET['code'])) {				
		$client->authenticate();
		$access_token = $client->getAccessToken();
		
		if ($access_token !== false) {
			$client->setAccessToken($access_token);
		}
		if ($client->getAccessToken()) {
			$u = $oauth2->userinfo->get();
			
			$email = filter_var($u['email'], FILTER_SANITIZE_EMAIL);
			
			$ID = $wpdb->get_var($wpdb->prepare('
			SELECT ID FROM ' . $wpdb->prefix . 'wow_social_users WHERE type = "google" AND identifier = "%s"
			', $u['id']));
			if (!get_user_by('id', $ID)) {
				$wpdb->query($wpdb->prepare('
				DELETE FROM ' . $wpdb->prefix . 'wow_social_users WHERE ID = "%s"
				', $ID));
				$ID = null;
			}
			
			if (!is_user_logged_in()) {
				if ($ID == NULL) { // Register
					
					$ID = email_exists($email);
					if ($ID == false) { // Real register
						
						// require_once (ABSPATH . WPINC . '/registration.php');
						$random_password = wp_generate_password($length = 12, $include_standard_special_chars = false);
						if (!isset($settings['google_user_prefix'])) $settings['google_user_prefix'] = 'wow_google_ ';
						$sanitized_user_login = sanitize_user($settings['google_user_prefix'] . $u['name']);
						if (!validate_username($sanitized_user_login)) {
							$sanitized_user_login = sanitize_user('google' . $user_profile['id']);
						}
						$defaul_user_name = $sanitized_user_login;
						$i = 1;
						while (username_exists($sanitized_user_login)) {
							$sanitized_user_login = $defaul_user_name . $i;
							$i++;
						}
						$ID = wp_create_user($sanitized_user_login, $random_password, $email);
						if (!is_wp_error($ID)) {
							if(!empty($settings['google_user_notification']) || !empty($settings['google_admin_notification'])){
								if(!empty($settings['google_user_notification']) && !empty($settings['google_admin_notification'])){
									wp_new_user_notification($ID, null,'both');
								}
								elseif(!empty($settings['google_user_notification'])){
									wp_new_user_notification($ID, null,'user');
								}
								elseif(!empty($settings['google_admin_notification'])){
									wp_new_user_notification($ID, null,'admin');
								}							
							}							
							$user_info = get_userdata($ID);
							wp_update_user(array(
							'ID' => $ID,
							'display_name' => $u['name'],
							'first_name' => $u['given_name'],
							'last_name' => $u['family_name'],							
							'user_email' => $email,
							));
							
							$data = array(
							'EMAIL'  => $email,
							'FNAME'   => $u['given_name'],
							'LNAME'  => $u['family_name'],
							'link' => $u['link'],
							'login' => $sanitized_user_login,						
							);
							
							do_action('wow_emsi_integration', $data);
							do_action('wow_social_send_email', $data);
						} 
						
						else {
							return;
						}
					}
					if ($ID) {
						$wpdb->insert($wpdb->prefix . 'wow_social_users', array(
						'ID' => $ID,
						'type' => 'google',
						'identifier' => $u['id'],
						'first_name' => $u['given_name'],
						'last_name' => $u['family_name'],
						'email' => $email,
						'link' => $u['link'],
						) , array(
						'%d',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s'
						));
					}
					
				}
				if ($ID) { // Login
					
					$secure_cookie = is_ssl();
					$secure_cookie = apply_filters('secure_signon_cookie', $secure_cookie, array());
					global $auth_secure_cookie; // XXX ugly hack to pass this to wp_authenticate_cookie
					
					$auth_secure_cookie = $secure_cookie;
					wp_set_auth_cookie($ID, true, $secure_cookie);
					$user_info = get_userdata($ID);
					
					$creds = array (
					'user_login' => $user_info->user_login,
					'user_password' => $user_info->user_pass,
					'remember' => true
					);
					
					wp_signon( $creds, $secure_cookie );
					
					
					// @Jamie Bainbridge fix for Google Avatars
					$userJSON = @file_get_contents('http://picasaweb.google.com/data/entry/api/user/' . $u['id'] .'?alt=json');
					if($userJSON){
						$userArray = json_decode($userJSON, true);
						if($userArray && isset($userArray["entry"]) && isset($userArray["entry"]["gphoto\$thumbnail"]) && isset($userArray["entry"]["gphoto\$thumbnail"]["\$t"])){
							update_user_meta($ID, 'google_profile_picture', $userArray["entry"]["gphoto\$thumbnail"]["\$t"]);
						}
					}
					
					
				}
			}
			
			else {
				if (self::is_user_connected()) { // It was a simple login
					
					
					} elseif ($ID === NULL) { // Let's connect the account to the current user!
					
					$current_user = wp_get_current_user();
					$wpdb->insert($wpdb->prefix . 'wow_social_users', array(
					'ID' => $current_user->ID,
					'type' => 'google',
					'identifier' => $u['id'],
					'first_name' => $u['given_name'],
					'last_name' => $u['family_name'],
					'email' => $email,
					'link' => $u['link'],
					) , array(
					'%d',
					'%s',
					'%s',
					'%s',
					'%s',
					'%s',
					'%s'
					));
					
					$user_info = wp_get_current_user();
					set_site_transient($user_info->ID.'_wow_admin_notice','Your Google profile is successfully linked with your account. Now you can sign in with Google easily.', 3600);
					} else {
					$user_info = wp_get_current_user();
					set_site_transient($user_info->ID.'_wow_admin_notice','This Google profile is already linked with other account. Linking process failed!', 3600);
				}
			}
			
		}
		
		$redirect = get_site_transient( 'wow_google_redirect');
		header('Location: ' . filter_var($redirect , FILTER_SANITIZE_URL));
		exit;
	}	
	
	
	else {
		
		if (isset($_GET['redirect'])) {
			$redirecturl = $_GET['redirect'];
		}	
		else {
			$redirecturl = site_url();
		}
		set_site_transient( 'wow_google_redirect', $redirecturl, 60);
		header('LOCATION: ' . $client->createAuthUrl());
		exit;
		
	}
	
	
?>