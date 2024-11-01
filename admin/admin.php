<?php if ( ! defined( 'ABSPATH' ) ) exit;
function wow_google_login_admin_menu() {
	if (!defined('WOW_GOOGLE_LOGIN')){
		$page_name = 'Wow <br/>Google Login';
	}
	else {
		$page_name = 'Wow Google<br/> Login Pro';
	}
add_menu_page($page_name, $page_name, 'manage_options', 'wow-google-login', 'wow_google_login_page', 'dashicons-googleplus', null);	
add_action('admin_print_styles', 'wow_google_login_style');
}
add_action('admin_menu', 'wow_google_login_admin_menu', 999);
function wow_google_login_page() {
	global $wow_plugin;	
	$wow_plugin = true;
	require_once 'partials/google.php';	
	wp_enqueue_style( 'wow-data', plugin_dir_url(__FILE__) . 'css/data_style.css');
	wp_enqueue_script( 'wow-google', plugin_dir_url(__FILE__) . 'js/google.js', array( 'jquery' ));
	wp_enqueue_script( 'wow-data', plugin_dir_url(__FILE__) . 'js/dataTables.js', array( 'jquery' ));
	do_action('wow_google_login_pro_admin');
}
function wow_google_login_style() {
	wp_enqueue_style('wow-style', plugin_dir_url(__FILE__) . 'css/style.css');	 	
	wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('wp-color-picker');
	wp_enqueue_script( 'wp-color-picker-alpha', plugin_dir_url(__FILE__) . 'js/wp-color-picker-alpha.js', array( 'wp-color-picker' ));
}
if ( ! function_exists ( 'wow_plugins_admin_footer_text' ) ) {
function wow_plugins_admin_footer_text( $footer_text ) {
	global $wow_plugin;
	if ( $wow_plugin == true ) {
		$rate_text = sprintf( '<span id="footer-thankyou">Developed by <a href="http://wow-company.com/" target="_blank">Wow-Company</a> | <a href="https://wow-estore.com/" target="_blank">Wow Estore</a> | <a href="https://www.facebook.com/wowaffect/" target="_blank">Join us on Facebook</a></span>'
		);
		return str_replace( '</span>', '', $footer_text ) . ' | ' . $rate_text . '</span>';
	}
	else {
		return $footer_text;
	}	
}
add_filter( 'admin_footer_text', 'wow_plugins_admin_footer_text' );
}
