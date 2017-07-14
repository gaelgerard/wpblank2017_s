 <a id="loginBtn" href="#login-form-lightbox" class="button"><?php _e( 'Connect', 'html5blank' ); ?></a>
     
    <div id="login-form-lightbox" class="login-form contact_form" style="display: none;">
	
<?php
if ( ! is_user_logged_in() ) { // Display WordPress login form:
    $args = array(
        'redirect' => admin_url(), 
        'form_id' => 'loginform-lightbox',
        //'label_username' => __( 'Username' ),
        //'label_password' => __( 'Password' ),
        //'label_remember' => _e( 'Remember me', 'html5blank' ),
        //'label_log_in' => _e( 'Connect', 'html5blank' ),
        'remember' => true
    );?>
	<h2>Connectez-vous</h2>
   <?php wp_login_form( $args );
    ?>
    <a class="passoubli" href="/renouveler-son-mot-de-passe/#passoubli"><?php echo __('Lost your password?'); ?></a>
       <?php
 
    }else { // If logged in:?>
    <div class="deconnexion">
    <h2>Déconnexion</h2>
    <p>Vous êtes déjà connecté.</p>
    <p>Vous pouvez vous déconnecter en cliquant sur le lien sous votre profil en haut à droite de la page.</p>
    <!--<p><?php wp_loginout( $_SERVER['REQUEST_URI'] ); // Display "Log Out" link. ?></p>-->
    </div>
   <?php
}
?>
    </div>
    <script>jQuery(document).ready(function(){
    jQuery('#user_login').attr('placeholder', 'Nom d\'utilisateur');
    jQuery('#user_email').attr('placeholder', 'Adresse E-mail');
    jQuery('#user_pass').attr('placeholder', 'Mot de passe');
    jQuery('.login-form.contact_form #wp-submit').addClass('wpcf7-submit');
    	$('#loginBtn').fancybox({
					    width: 400,
					    height: 300,
					    autoSize: false,
					    //type: 'ajax'
				    });
		
		});</script>
   