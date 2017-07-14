<?php
/*Custom reset login page*/

	$keyPass=$_GET['key'];
$blogurl = site_url();
			?>
			<?php
if ( ! is_user_logged_in() ) { // Display WordPress login form:
    $args = array(
        'redirect' => admin_url(), 
        'form_id' => 'loginform-custom',
        //'label_username' => 'Nom d\'utilisateur',
        //'label_password' => 'Mot de passe',
        //'label_remember' => __( 'Remember me' ),
        //'label_log_in' => __( 'Connect' ),
        'remember' => true
    ); 
	if (empty($keyPass)){
		if(!isset($_GET['action']) || $_GET['action'] != 'lostpassword')
		{ ?>
    <div class="login-form contact_form">
		<div class="hideForLostPass">
			<h2>Connectez-vous</h2>
			<?php
		if(isset($_GET['login']) && $_GET['login'] == 'failed' || $_GET['login'] == 'error')
		{
			?>
		<div id="login-error" class="error">
			<?php _e('<strong>ERROR</strong>: Invalid username or password.','html5blank'); ?>&nbsp;<?php _e('Please try again.'); ?> 
		</div>
			<?php
		}
			?>
		   <?php wp_login_form( $args );
		   
			?>
			<a class="scrollLostPass" href="#no-scroll" title="<?php _e( 'Lost your password?' ); ?>"><?php _e( 'Lost your password?' ); ?></a>
		</div>
			<?php
		}else {$classPassword = ' class="show"';} ?>
		
		<div id="lostPassword"<?php echo $classPassword; ?>>
		<div id="message"></div>
		<div id="lostPassBlock">
		<h2><?php _e('Lost Password'); ?></h2>
		<p><?php _e('Please enter your username or email address. You will receive a link to create a new password via email.');?></p>
		
		<form id="lostPasswordForm" method="post">
			<?php
				// this prevent automated script for unwanted spam
				if ( function_exists( 'wp_nonce_field' ) ) 
					wp_nonce_field( 'rs_user_lost_password_action', 'rs_user_lost_password_nonce' );
			?>

			<p>
				<label for="user_login"><?php _e('Username or Email:') ?> <br />
					<input type="text" name="user_login" id="user_login" class="input" value="<?php echo esc_attr($user_login);?>" size="20" required />
				</label>
			</p>
			<?php
			/**
			 * Fires inside the lostpassword <form> tags, before the hidden fields.
			 *
			 * @since 2.1.0
			 */
			do_action( 'lostpassword_form' ); ?>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php esc_attr_e('Get New Password'); ?>" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_loading.gif" id="preloader" alt="Preloader" />
			</p>
		</form>
	</div>
	</div>
		
	<?php	} ?>
	
	<?php
	} if (!empty($keyPass) &&  ! is_user_logged_in()){ ?>
	<div id="resetPassword">
		<h2><?php 
			if(!isset($_GET['status']) || $_GET['status'] != 'new') {
				echo __('Password Reset');
			}else if (isset($_GET['status']) && $_GET['status'] == 'new') {
				$login = $_GET['login'];
				printf(__('Welcome %s, please set your password below.','html5blank'),$login);
			} ?></h2>
		
	<div id="message"></div>
	<!--this check on the link key and user login/username-->
	<?php
		$errors = new WP_Error();
		$user = check_password_reset_key($_GET['key'], $_GET['login']);

		if ( is_wp_error( $user ) ) { ?>
		
			<?php if ( $user->get_error_code() === 'expired_key' )
				$errors->add( 'expiredkey', __( 'Your password reset link appears to be invalid. Please request a new link below.' ) );
			else
				$errors->add( 'invalidkey', __( 'Your password reset link appears to be invalid. Please request a new link below.' ) );
			} 
		// display error message
		if ( $errors->get_error_code() ) {
			echo '<div class="error">'.$errors->get_error_message( $errors->get_error_code() ).'</div>
			<a href="'.$blogurl.'/connexion?action=lostpassword" title="'.__( 'Lost your password?', 'html5blank' ).'">'.__( 'Lost your password?', 'html5blank' ).'</a>';
		}else if ( ! $errors->get_error_code() ) {
			
			
			if(!isset($_GET['status']) || $_GET['status'] != 'new') {
				echo '<p>'.__('Enter your new password below.').'</p>';
			}
			//Form below
		?>
		<form id="resetPasswordForm" method="post" autocomplete="off">
			<?php
				// this prevent automated script for unwanted spam
				if ( function_exists( 'wp_nonce_field' ) ) 
					wp_nonce_field( 'rs_user_reset_password_action', 'rs_user_reset_password_nonce' );
			?>
			
			<input type="hidden" name="user_key" id="user_key" value="<?php echo esc_attr( $_GET['key'] ); ?>" autocomplete="off" />
			<input type="hidden" name="user_login" id="user_login" value="<?php echo esc_attr( $_GET['login'] ); ?>" autocomplete="off" />

			<p>
				<label for="pass1"><?php _e('New password') ?><br />
				<input type="password" name="pass1" id="pass1" class="input" size="20" value="" autocomplete="off" /></label>
			</p>
			<p>
				<label for="pass2"><?php _e('Confirm new password') ?><br />
				<input type="password" name="pass2" id="pass2" class="input" size="20" value="" autocomplete="off" /></label>
			</p>

			<p class="description indicator-hint"><?php _e('Hint: The password should be at least seven characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ &amp; ).','html5blank'); ?></p>

			<br class="clear" />

			<?php
			/**
			 * Fires following the 'Strength indicator' meter in the user password reset form.
			 *
			 * @since 3.9.0
			 *
			 * @param WP_User $user User object of the user whose password is being reset.
			 */
			do_action( 'resetpass_form', $user );
			?>
			<p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php esc_attr_e('Reset Password'); ?>" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_loading.gif" id="preloader" alt="Preloader" />
			</p>
		</form>
		<?php //if ( ! $errors->get_error_code() )
			}?>
	</div>
    </div>  <!--login form-->
	   <?php
 
    }else if( is_user_logged_in() )  { // If logged in:?>
    <h2><?php _e( 'Log out' ); ?></h2>
    <p><?php _e( 'You are logged in already.','html5blank' ); ?></p>
    <p><?php _e( 'You can log out with the link below:','html5blank' ); ?></p>
    <p><?php wp_loginout( home_url() ); // Display "Log Out" link. ?></p>
   <?php
}
?>
    <script>jQuery(document).ready(function(){
	

    jQuery('#user_login, #user_pass').attr('required', '');
    jQuery('.scrollLostPass').click(function(){
		$('#lostPassword').slideToggle();
    });
	
    //jQuery('#user_login').attr('placeholder', 'Nom d\'utilisateur');
    //jQuery('#user_email').attr('placeholder', 'Adresse E-mail');
    //jQuery('#user_pass').attr('placeholder', 'Mot de passe');
    //jQuery('.login-form.contact_form #wp-submit').addClass('wpcf7-submit');
});</script>