<?php
/**
* Social Networks
*
* @package     
* @subpackage  Settings
* @copyright   Copyright (c) 2017, Dmytro Lobov
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/

/* Google */


$google_client_id = array(
'id'   => 'google_client_id',
	'name' => 'google_client_id',	
	'type' => 'text',
	'val' => isset($param['google_client_id']) ? $param['google_client_id'] : '',	
);

$google_client_secret = array(
	'id'   => 'google_client_secret',
	'name' => 'google_client_secret',	
	'type' => 'text',
	'val' => isset($param['google_client_secret']) ? $param['google_client_secret'] : '',	
);

$google_api_key = array(
	'id'   => 'google_api_key',
	'name' => 'google_api_key',	
	'type' => 'text',
	'val' => isset($param['google_api_key']) ? $param['google_api_key'] : '',	
);

$google_user_prefix = array(
	'id'   => 'google_user_prefix',
	'name' => 'google_user_prefix',	
	'type' => 'text',
	'val' => isset($param['google_user_prefix']) ? $param['google_user_prefix'] : 'wow_google_',	
);

$google_redirect_reg = array(
	'id'   => 'google_redirect_reg',
	'name' => 'google_redirect_reg',	
	'type' => 'text',
	'val' => isset($param['google_redirect_reg']) ? $param['google_redirect_reg'] : 'auto',	
);

$google_redirect = array(
	'id'   => 'google_redirect',
	'name' => 'google_redirect',	
	'type' => 'text',
	'val' => isset($param['google_redirect']) ? $param['google_redirect'] : 'auto',	
);


$google_login_button = array(
	'id'   => 'google_login_button',
	'name' => 'google_login_button',	
	'type' => 'text',
	'val' => isset($param['google_login_button']) ? $param['google_login_button'] : 'Login',	
);

$google_link_button = array(
	'id'   => 'google_link_button',
	'name' => 'google_link_button',	
	'type' => 'text',
	'val' => isset($param['google_link_button']) ? $param['google_link_button'] : 'Link account to',	
);

$google_unlink_button = array(
	'id'   => 'google_unlink_button',
	'name' => 'google_unlink_button',	
	'type' => 'text',
	'val' => isset($param['google_unlink_button']) ? $param['google_unlink_button'] : 'Unlink account',	
);
$google_user_notification = array(
	'id'   => 'google_user_notification',
	'name' => 'google_user_notification',	
	'type' => 'checkbox',
	'val' => isset($param['google_user_notification']) ? $param['google_user_notification'] : 0,	
);

$google_admin_notification = array(
	'id'   => 'google_admin_notification',
	'name' => 'google_admin_notification',	
	'type' => 'checkbox',
	'val' => isset($param['google_admin_notification']) ? $param['google_admin_notification'] : 0,	
);

$google_integrate_button = array(
	'id'   => 'google_integrate_button',
	'name' => 'google_integrate_button',	
	'type' => 'checkbox',
	'val' => isset($param['google_integrate_button']) ? $param['google_integrate_button'] : 0,	
);




$admin_bar = array(
	'id'   => 'admin_bar',
	'name' => 'admin_bar',	
	'type' => 'checkbox',
	'val' => isset($param['admin_bar']) ? $param['admin_bar'] : 0,	
);

$google_enable_woocommerce = array(
	'id'   => 'google_enable_woocommerce',
	'name' => 'google_enable_woocommerce',	
	'type' => 'checkbox',
	'val' => isset($param['google_enable_woocommerce']) ? $param['google_enable_woocommerce'] : 0,	
);

$google_enable_edd_checkout = array(
	'id'   => 'google_enable_edd_checkout',
	'name' => 'google_enable_edd_checkout',	
	'type' => 'checkbox',
	'val' => isset($param['google_enable_edd_checkout']) ? $param['google_enable_edd_checkout'] : 0,	
);

$google_enable_edd_login_shortcode = array(
	'id'   => 'google_enable_edd_login_shortcode',
	'name' => 'google_enable_edd_login_shortcode',	
	'type' => 'checkbox',
	'val' => isset($param['google_enable_edd_login_shortcode']) ? $param['google_enable_edd_login_shortcode'] : 0,	
);

$google_enable_edd_register_shortcode = array(
	'id'   => 'google_enable_edd_register_shortcode',
	'name' => 'google_enable_edd_register_shortcode',	
	'type' => 'checkbox',
	'val' => isset($param['google_enable_edd_register_shortcode']) ? $param['google_enable_edd_register_shortcode'] : 0,	
);






?>