<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_blank_theme
 */

if ( ! is_active_sidebar( 'header-1' ) ) {
	return;
}
?>

<aside id="widget-header" class="widget-area">
	<?php dynamic_sidebar( 'header-1' ); ?>
</aside><!-- #widget-header -->
