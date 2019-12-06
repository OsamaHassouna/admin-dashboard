<?php
/*
Plugin Name: Register Form
Plugin URI: test test
Description: Provides simple front end registration and login forms
Version: 1.0
Author: Osama Hassouna
*/


// user registration login form
/* =================== REGISTRATION FORM FUNCTION =================== */
function registration_form() {

	// only show the registration form to non-logged-in members
	if(!is_user_logged_in()) {

		global $load_css;

		// set this to true so the CSS is loaded
		$load_css = true;

		// check to make sure user registration is enabled
		$registration_enabled = get_option('users_can_register');

		// only show the registration form if allowed
		if($registration_enabled) {
			$output = registration_form_fields();
		} else {
			$output = __('User registration is not enabled');
		}
		return $output;
	}
}
add_shortcode('register_form', 'registration_form');

// registration form fields
function registration_form_fields() {

	ob_start(); ?>
		<h3 class="header"><?php _e('Register New Account'); ?></h3>

		<?php
		// show any error messages after form submission
		show_error_messages(); ?>

		<form id="registration_form" class="form" action="" method="POST">
			<fieldset>
				<p>
					<label for="user_Login"><?php _e('Username'); ?></label>
					<input name="user_login" id="user_login" class="required" type="text"/>
				</p>
				<p>
					<label for="user_email"><?php _e('Email'); ?></label>
					<input name="user_email" id="user_email" class="required" type="email"/>
				</p>
				<p>
					<label for="user_first"><?php _e('First Name'); ?></label>
					<input name="user_first" id="user_first" type="text"/>
				</p>
				<p>
					<label for="user_last"><?php _e('Last Name'); ?></label>
					<input name="user_last" id="user_last" type="text"/>
				</p>
				<p>
					<label for="password"><?php _e('Password'); ?></label>
					<input name="user_pass" id="password" class="required" type="password"/>
				</p>
				<p>
					<label for="password_again"><?php _e('Password Again'); ?></label>
					<input name="user_pass_confirm" id="password_again" class="required" type="password"/>
				</p>
				<p>
					<input type="hidden" name="register_nonce" value="<?php echo wp_create_nonce('register-nonce'); ?>"/>
					<input type="submit" value="<?php _e('Register Your Account'); ?>"/>
				</p>
			</fieldset>
		</form>
	<?php
	return ob_get_clean();
}

// register a new user
function add_new_member() {
  	if (isset( $_POST["user_login"] ) && wp_verify_nonce($_POST['register_nonce'], 'register-nonce')) {
		$user_login		= $_POST["user_login"];
		$user_email		= $_POST["user_email"];
		$user_first 	= $_POST["user_first"];
		$user_last	 	= $_POST["user_last"];
		$user_pass		= $_POST["user_pass"];
		$pass_confirm 	= $_POST["user_pass_confirm"];

		// this is required for username checks
		require_once(ABSPATH . WPINC . '/registration.php');

		if(username_exists($user_login)) {
			// Username already registered
			errors()->add('username_unavailable', __('Username already taken'));
		}
		if(!validate_username($user_login)) {
			// invalid username
			errors()->add('username_invalid', __('Invalid username'));
		}
		if($user_login == '') {
			// empty username
			errors()->add('username_empty', __('Please enter a username'));
		}
		if(!is_email($user_email)) {
			//invalid email
			errors()->add('email_invalid', __('Invalid email'));
		}
		if(email_exists($user_email)) {
			//Email address already registered
			errors()->add('email_used', __('Email already registered'));
		}
		if($user_pass == '') {
			// passwords do not match
			errors()->add('password_empty', __('Please enter a password'));
		}
		if($user_pass != $pass_confirm) {
			// passwords do not match
			errors()->add('password_mismatch', __('Passwords do not match'));
		}

		$errors = errors()->get_error_messages();

		// only create the user in if there are no errors
		if(empty($errors)) {

			$new_user_id = wp_insert_user(array(
					'user_login'		=> $user_login,
					'user_pass'	 		=> $user_pass,
					'user_email'		=> $user_email,
					'first_name'		=> $user_first,
					'last_name'			=> $user_last,
					'user_registered'	=> date('Y-m-d H:i:s'),
					'role'				=> 'subscriber'
				)
			);
			if($new_user_id) {
				// send an email to the admin alerting them of the registration
				wp_new_user_notification($new_user_id);

				// log the new user in
				wp_setcookie($user_login, $user_pass, true);
				wp_set_current_user($new_user_id, $user_login);
				do_action('wp_login', $user_login);

				// send the newly created user to the home page after logging them in
				wp_redirect(home_url()); exit;
			}

		}

	}
}
add_action('init', 'add_new_member');

// displays error messages from form submissions
function show_error_messages() {
	if($codes = errors()->get_error_codes()) {
		echo '<div class="errors">';
		    // Loop error codes and display errors
		   foreach($codes as $code){
		        $message = errors()->get_error_message($code);
		        echo '<span class="error"><strong>' . __('Error') . '</strong>: ' . $message . '</span><br/>';
		    }
		echo '</div>';
	}
}

/* =================== LOGIN FORM FUNCTION =================== */
// user login form
function  login_form() {

	if(!is_user_logged_in()) {

		global $ load_css;

		// set this to true so the CSS is loaded
		$ load_css = true;

		$output =  login_form_fields();
	} else {
		// could show some logged in user info here
		// $output = 'user info here';
	}
	return $output;
}
add_shortcode('login_form', ' login_form');

// login form fields
function  login_form_fields() {

	ob_start(); ?>
		<h3 class=" header"><?php _e('Login'); ?></h3>

		<?php
		// show any error messages after form submission
		 show_error_messages(); ?>

		<form id=" login_form"  class=" form"action="" method="post">
			<fieldset>
				<p>
					<label for=" user_Login">Username</label>
					<input name=" user_login" id=" user_login" class="required" type="text"/>
				</p>
				<p>
					<label for=" user_pass">Password</label>
					<input name=" user_pass" id=" user_pass" class="required" type="password"/>
				</p>
				<p>
					<input type="hidden" name=" login_nonce" value="<?php echo wp_create_nonce(' login-nonce'); ?>"/>
					<input id=" login_submit" type="submit" value="Login"/>
				</p>
			</fieldset>
		</form>
	<?php
	return ob_get_clean();
}
// logs a member in after submitting a form
function  login_member() {

	if(isset($_POST[' user_login']) && wp_verify_nonce($_POST[' login_nonce'], ' login-nonce')) {

		// this returns the user ID and other info from the user name
		$user = get_userdatabylogin($_POST[' user_login']);

		if(!$user) {
			// if the user name doesn't exist
			 errors()->add('empty_username', __('Invalid username'));
		}

		if(!isset($_POST[' user_pass']) || $_POST[' user_pass'] == '') {
			// if no password was entered
			 errors()->add('empty_password', __('Please enter a password'));
		}

		// check the user's login with their password
		if(!wp_check_password($_POST[' user_pass'], $user->user_pass, $user->ID)) {
			// if the password is incorrect for the specified user
			 errors()->add('empty_password', __('Incorrect password'));
		}

		// retrieve all error messages
		$errors =  errors()->get_error_messages();

		// only log the user in if there are no errors
		if(empty($errors)) {

			wp_setcookie($_POST[' user_login'], $_POST[' user_pass'], true);
			wp_set_current_user($user->ID, $_POST[' user_login']);
			do_action('wp_login', $_POST[' user_login']);

			wp_redirect(home_url()); exit;
		}
	}
}
add_action('init', ' login_member');

// used for tracking error messages
function  errors(){
    static $wp_error; // Will hold global variable safely
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}

/* =================== CSS FORMS FUNCTION =================== */
// register our form css
function  register_css() {
	wp_register_style(' form-css', plugin_dir_url( __FILE__ ) . '/css/registration-login-style.css');
}
add_action('init', ' register_css');

// load our form css
function  print_css() {
	global $ load_css;

	// this variable is set to TRUE if the short code is used on a page/post
	if ( ! $ load_css )
		return; // this means that neither short code is present, so we get out of here

	wp_print_styles(' form-css');
}
add_action('wp_footer', ' print_css');