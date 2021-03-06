<?php
/**
 * Wordpress blank theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wordpress_blank_theme
 */

if ( ! function_exists( 'wpblank2017_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wpblank2017_s_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Wordpress blank theme, use a find and replace
	 * to change 'wpblank2017_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wpblank2017_s', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		//'menu-1' => esc_html__( 'Primary', 'wpblank2017_s' ),
        'main-menu' => esc_html__('Main menu', 'wpblank2017_s'), // Main Navigation
        'header-menu' => esc_html__('Menu entête', 'wpblank2017_s'), // Sous Main Navigation
        'sidebar-menu' => esc_html__('Menu de la sidebar', 'wpblank2017_s'), // 
        'footer-menu' => esc_html__('Footer menu', 'wpblank2017_s'), // Sidebar Navigation
        'extra-menu' => esc_html__('Extra menu', 'wpblank2017_s'), // Extra Navigation if needed (duplicate as many as you need!)
        'error-menu' => esc_html__('Error menu', 'wpblank2017_s'), // Extra Navigation if needed (duplicate as many as you need!)
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wpblank2017_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'wpblank2017_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpblank2017_s_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpblank2017_s_content_width', 640 );
}
add_action( 'after_setup_theme', 'wpblank2017_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wpblank2017_s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Header', 'wpblank2017_s' ),
		'id'            => 'header-1',
		'description'   => esc_html__( 'Add widgets here.', 'wpblank2017_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wpblank2017_s' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wpblank2017_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'wpblank2017_s' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wpblank2017_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpblank2017_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wpblank2017_s_scripts() {
	wp_enqueue_style( 'wpblank2017_s-style', get_template_directory_uri()  . '/style.css', array(), false, 'all');
	wp_enqueue_style( 'knacss6', get_template_directory_uri()  . '/css/knacss6.css', array(), false, 'all');
    wp_enqueue_style('slicknav',  get_template_directory_uri() . '/css/slicknav.css', array(), false, 'all');
    wp_enqueue_style('jquery.cookiebar',  get_template_directory_uri() . '/css/cookieBar.min.css', array(), false, 'all');
	wp_enqueue_style('contact', get_template_directory_uri() . '/css/contact.css', array(), false, 'all');
	wp_enqueue_style('childtheme', get_stylesheet_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('childtheme-colors', get_stylesheet_directory_uri() . '/css/colors.css', array(), false, 'all');
  

	wp_enqueue_script( 'wpblank2017_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wpblank2017_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('custom_scripts_projet', get_stylesheet_directory_uri() . '/js/scripts.js', array(), null, true); // Custom scripts
	wp_enqueue_script('jquery.cookiebar', get_template_directory_uri() . '/js/jquery.cookieBar.min.js', array(), null, true); // 
	wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array(), null, true); // 
	wp_enqueue_script('modernizer', get_template_directory_uri() . '/js/modernizr-1.5.min.js', array(), null, true); // 
	   
     if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	$templateDir = array( 'templateDir' => get_template_directory_uri() );
	//after wp_enqueue_script
	wp_localize_script( 'custom_scripts_projet', 'object_name', $templateDir );
	wp_localize_script( 'maps.acf', 'object_name', $templateDir );
    
	$childThemeDir = array( 'childThemeDir' => get_stylesheet_directory_uri() );
	//after wp_enqueue_script
	wp_localize_script( 'custom_scripts_projet', 'object_name', $childThemeDir );
	wp_localize_script( 'maps.acf', 'object_name', $childThemeDir );
	
}
add_action( 'wp_enqueue_scripts', 'wpblank2017_s_scripts' );

// Add scripts to wp_head()
function wpblank2017_shead_script() {
	require get_stylesheet_directory() . '/inc/fonts.php';
}
add_action( 'wp_head', 'wpblank2017_shead_script' );

//Add a custom styles drop down menu in WordPress Visual Editor
function wpblank2017_s_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpblank2017_s_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
/*
* Each array child is a format with it's own settings
* Notice that each array has title, block, classes, and wrapper arguments
* Title is the label which will be visible in Formats menu
* Block defines whether it is a span, div, selector, or inline style
* Classes allows you to define CSS classes
* Wrapper whether or not to add a new block-level element around any selected elements
*/
		array(  
			'title' => 'Colonne Texte',  
			'block' => 'span',  
			'classes' => 'column',
			'wrapper' => true,
			
		),  
		array(  
			'title' => 'Bouton',  
			'block' => 'a',  
			'classes' => 'button',
			'wrapper' => true,
		),
		//array(  
		//	'title' => 'Red Button',  
		//	'block' => 'span',  
		//	'classes' => 'red-button',
		//	'wrapper' => true,
		//),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

function wpblank2017_s_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'wpblank2017_s_add_editor_styles' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*personnalisation des infos clients dans l'admin*/
require get_template_directory() . '/inc/theme_customizer.php';
