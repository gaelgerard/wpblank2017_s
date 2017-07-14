						<?php
						$login = get_theme_mod( 'checkbox_login' );
						$login_lightbox = get_theme_mod( 'checkbox_login_lightbox' );
						if ( !empty($login) && empty($login_lightbox) ):?>
							<?php $classLightbox = "inactiveLightbox" ;
					 
						elseif (!empty($login_lightbox) ):?>
							<?php $classLightbox = "activeLightbox" ?>
						<?php endif; ?>

 
 <?php if ( is_user_logged_in() ) { ?>

		<div id="logged-in">
		 <?php
					$user_ID = get_current_user_id();
				 $user_info = get_userdata($user_ID);
				 $username = $user_info->user_login;
				 $first_name = $user_info->first_name;
				 $last_name = $user_info->last_name;
				 $urlprofile = get_edit_user_link( $user_ID ) ;
				 //echo "$first_name $last_name logs into her WordPress site with the user name of $username.";
	 ?>
	 <?php _e( 'Welcome', 'html5blank' ); ?>, <a href="<?php echo $urlprofile; ?>" title="<?php _e( 'Edit profile', 'html5blank' ); ?>"><?php if (!empty($first_name)){echo $first_name ?> <?php } ?><?php if (!empty($last_name)){echo $last_name;} else if (empty($first_name) && empty($last_name)) {echo $username;} ?></a>
	 
		<a class="logout" href="<?php echo wp_logout_url( get_permalink() ); ?>"><span><?php _e( 'Log out', 'html5blank' ); ?></span><i class="fa fa-sign-out bouton"></i></a>
		<?php
				if ( class_exists('Ggai_Wp_Extranet_Loader') ) {
					 if ( has_nav_menu( 'extranet-header-menu' )) { ?>
					<div id="extranet-header-menu">
						<nav>
							<?php wp_nav_menu( array( 'theme_location' => 'extranet-header-menu', 'menu_class' => 'extranet header nav-menu' ) ); ?>
						</nav>
						</div>
						<?php }; ?>
					<?php }; ?>
		</div>
	<?php } else { ?> 
<div id="header-connect"  class="<?php echo $classLightbox; ?>">
 <div id="loginBtn">
<a id="popLogin" class="login not-phone" href="#loginBox"><i class="fa fa-sign-in bouton"></i> <?php _e( 'Connect', 'html5blank' ); ?></a>
<a id="slideLogin" class="login <?php echo $classLightbox; ?> only-phone" href="#no"><i class="fa fa-sign-in bouton"></i> <span><?php _e( 'Connect', 'html5blank' ); ?></span></a>
 </div>
<div id="loginBox" class="loginFormContainer">
 <?php get_template_part('login','form'); ?>
</div>
</div>
<?php }; ?>
