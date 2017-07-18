
<?php
$blogurl = site_url();
$postlink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
 <h2><?php _e( 'Connect', 'wpblank2017_s' ); ?></h2>
<form name="loginform" action="<?=$blogurl ?>/wp-login.php" method="post">
	<p>
		<label><?php _e( 'Username', 'wpblank2017_s' ); ?></label>
		<input type="text" name="log" class="input" value="" size="20" tabindex="10" placeholder="<?php _e( 'Username', 'wpblank2017_s' ); ?>" />
	</p>
	<p>
		<label><?php _e( 'Password', 'wpblank2017_s' ); ?></label>
		<input type="password" name="pwd" class="input" value="" size="20" tabindex="20" placeholder="<?php _e( 'Password', 'wpblank2017_s' ); ?>" />
 
	</p>
	<p class="forgetmenot"><label><input name="rememberme" type="checkbox" value="forever" tabindex="90" /> <?php _e( 'Remember me', 'wpblank2017_s' ); ?></label></p>
	<p class="submit">
		<button type="submit" name="wp-submit" ><?php _e( 'Log in', 'wpblank2017_s' ); ?></button>
		<input type="hidden" name="redirect_to" value="<?=$postlink ?>" />
		<!--<input type="hidden" name="testcookie" value="1" />-->
	</p>
</form>
 
<p class="lostpass">
	   
			<?php if ( class_exists('Ggai_Wp_Extranet_Loader') ) {
			  $link_pass= $blogurl.'/connexion?action=lostpassword';
			}else {
			  $link_pass= $blogurl.'/wp-login.php?action=lostpassword';
			}
			?>
<a href="<?=$link_pass; ?>" title="<?php _e( 'Lost your password?', 'wpblank2017_s' ); ?>"><?php _e( 'Lost your password?', 'wpblank2017_s' ); ?></a>
</p>