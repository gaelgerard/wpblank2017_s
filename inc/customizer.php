<?php
/**
 * Wordpress blank theme Theme Customizer
 *
 * @package Wordpress_blank_theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wpblank2017_s_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'nom_societe' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'wpblank2017_s_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'wpblank2017_s_customize_partial_blogdescription',
		) );
		$wp_customize->selective_refresh->add_partial( 'nom_societe', array(
			'selector'        => '.nom_societe',
			'render_callback' => 'wpblank2017_s_customize_partial_nom_societe',
		) );
	}
}
add_action( 'customize_register', 'wpblank2017_s_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wpblank2017_s_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wpblank2017_s_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wpblank2017_s_customize_preview_js() {
	wp_enqueue_script( 'wpblank2017_s-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wpblank2017_s_customize_preview_js' );
