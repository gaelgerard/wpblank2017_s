<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_blank_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
<?php 
	// Tags from theme customizer > Configuration client
	$tag_analytics = get_theme_mod( 'tag_analytics' );
	$tag_manager = get_theme_mod( 'tag_manager' );
	
	if (!empty($tag_analytics)){
		echo $tag_analytics;
	};
	if (!empty($tag_manager)){
		echo $tag_manager;
	};
?>

  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body <?php body_class(); ?>>
<?php
	$tag_manager_noscript = get_theme_mod( 'tag_manager_noscript' );
	
	if (!empty($tag_manager_noscript)){
		echo $tag_manager_noscript;
	};
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wpblank2017_s' ); ?></a>
	<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<div id="header-menu">
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>
	</div>
	<?php }; ?>
	<div class="wrapper">
		<header id="masthead" class="site-header"><?php
						$login = get_theme_mod( 'checkbox_login' );
						$login_lightbox = get_theme_mod( 'checkbox_login_lightbox' );
						if ( !empty($login) || !empty($login_lightbox) ){
							 get_template_part('template-parts/login-box');
						}
						 ?>
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;
	
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
	
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span><?php esc_html_e( 'Primary Menu', 'wpblank2017_s' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'menu_id'        => 'primary-menu',
						'menu_class'        => 'flex-container',
					) );
				?>
			</nav><!-- #site-navigation -->
			<?php get_template_part('template-parts/header-widget'); ?>
			<div class="search-header">
				<?php get_template_part('template-parts/searchform'); ?>
			</div>
		</header><!-- #masthead -->
	
		<div id="content" class="site-content">
