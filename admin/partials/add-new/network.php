<?php if ( ! defined( 'ABSPATH' ) ) exit; 
	/**
		* Services
		*
		* @package     
		* @subpackage  Settings
		* @copyright   Copyright (c) 2017, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	include ('settings/'.$m_current.'.php');
	
?>

<div class="itembox">
	<div class="item-title">
		<h3>Google</h3>
	</div>
	<div class="wow-admin-col">
		<div class="wow-admin-col-4">
			Google Client ID:<br/>
			<?php echo self::create_option($google_client_id);?>						
		</div>	
		<div class="wow-admin-col-4">
			Google Client Secret:<br/>
			<?php echo self::create_option($google_client_secret);?>						
		</div>	
		<div class="wow-admin-col-4">
			Google API key:<br/>
			<?php echo self::create_option($google_api_key);?>						
		</div>
	</div>	
	
	<div class="wow-admin-col">
				
	</div>
	
	
	<div class="wow-admin-col">
		<div class="wow-admin-col-4">
			New user prefix:<br/>
			<?php echo self::create_option($google_user_prefix);?>
		</div>
		<div class="wow-admin-col-4">
			Redirect for Login and Register pages:<br/>
			<?php echo self::create_option($google_redirect);?>
		</div>	
		<div class="wow-admin-col-4">
			Default redirect after login:<br/>
			<?php echo self::create_option($google_redirect_reg);?>
		</div>	
	</div>
	
	<div class="wow-admin-col">
		<div class="wow-admin-col-4">
			Default button text:<br/>
			<?php echo self::create_option($google_login_button);?>
		</div>
		<div class="wow-admin-col-4">
			Link account text:<br/>
			<?php echo self::create_option($google_link_button);?>
		</div>
		<div class="wow-admin-col-4">
			Unlink account text:<br/>
			<?php echo self::create_option($google_unlink_button);?>
		</div>
	</div>
	
	<div class="wow-admin-col wow-wrap">
		<div class="wow-admin-col-12">

			<input type="checkbox" disabled> <label for="wow_fb_user_notification">User notification</label> <a href='admin.php?page=<?php echo $this->slug;?>&tab=pro' title="Only Pro version"><span class="dashicons dashicons-lock" style="color:#37c781;"></span></a><br/>
			<small><em>Send email to user  with Username and pessword</em></small>				
		</div>
		<div class="wow-admin-col-12">
			<?php echo self::create_option($google_admin_notification);?> <label for="wow_google_admin_notification">Admin notification</label><br/>
			<small><em>Send email to admin about a new user</em></small>				
		</div>
		<div class="wow-admin-col-12">
			<?php echo self::create_option($google_integrate_button);?> <label for="wow_google_integrate_button">Integrate button in Login and Register pages</label>	
		</div>
		<div class="wow-admin-col-12">
			<input type="checkbox" disabled> <label for="wow_admin_bar">Hide admin bar</label> <a href='admin.php?page=<?php echo $this->slug;?>&tab=pro' title="Only Pro version"><span class="dashicons dashicons-lock" style="color:#37c781;"></span></a><br/>
			<small><em>Hide admin bar for user.</em></small>
		</div>
		
		<div class="wow-admin-col-12">
			<input type="checkbox" disabled> <label for="wow_fb_enable_woocommerce">Enable in Woocommerce</label> <a href='admin.php?page=<?php echo $this->slug;?>&tab=pro' title="Only Pro version"><span class="dashicons dashicons-lock" style="color:#37c781;"></span></a>
		</div>
		<div class="wow-admin-col-12">
			<input type="checkbox" disabled> <label for="wow_fb_enable_edd_checkout">Enable in EDD's login shortcode</label> <a href='admin.php?page=<?php echo $this->slug;?>&tab=pro' title="Only Pro version"><span class="dashicons dashicons-lock" style="color:#37c781;"></span></a>
		</div>
		<div class="wow-admin-col-12">
			<input type="checkbox" disabled> <label for="wow_fb_enable_edd_login_shortcode">Enablein EDD's register shortcode</label> <a href='admin.php?page=<?php echo $this->slug;?>&tab=pro' title="Only Pro version"><span class="dashicons dashicons-lock" style="color:#37c781;"></span></a>
		</div>
		<div class="wow-admin-col-12">
			<input type="checkbox" disabled> <label for="wow_fb_enable_edd_register_shortcode">Enable in EDD's checkout page</label> <a href='admin.php?page=<?php echo $this->slug;?>&tab=pro' title="Only Pro version"><span class="dashicons dashicons-lock" style="color:#37c781;"></span></a>
		</div>
	</div>
	
	<div class="wow-admin-col">
		<div class="wow-admin-col-12">
			<b>Note:</b> <p />
			You need to create new google API application to setup the google login. Please follow the instructions to create new application.
			<br />
			<ul class="wow-futures">
				<li>Go to <a href='https://console.developers.google.com/project' target='_blank'>https://console.developers.google.com/project.</a> </li>
				<li>Click on "Create Project" button. A popup will appear.</li>
				<li>Please enter Project name and click on "Create" button.</li>
				<li>A App will be created and a dashobard will appear.</li>
				<li>In the blue box please click on Enable and manage APIs link. A new page will load.</li>
				<li>Now In the Social APIs section click on Google+ API and click "Enable API" button. Then the Google+ API will be activated.</li>
				<li>Now click on Credentials section and go to OAuth consent screen and enter the app details there.</li>
				<li>Click on Credentials tab and click on "New credentials" or "Add credentials" if you have already created one, a selection will appear and click on "OAuth client ID".</li>
				<li>A new page will load. Please select Application type to Web application and click "create" button. Further forms will loaded up and enter the details there.</li>
				<li>In the authorized redirect URIs please enter the details provided in the note section from plugin and click save button.</li>
				<li>In the popup you will get Client ID and client secret.</li>
				<li>And please enter those credentials in the google setting in our plugin.</li>
				<li>Rediret uri setup:<br />					
					Please use <input type='text' value='<?php echo site_url(); ?>?loginGoogle=1' readonly='readonly'/>
				</li>
				<li>
					Please note: Make sure to check the protocol "http://" or "https://" as google checks protocol as well. Better to add both URL in the list if you site is https so that google social login work properly for both https and http browser.
				</li>
			</ul>
		</div>
	</div>
	
	
</div>