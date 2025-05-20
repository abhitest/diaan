<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Theme basic function file
 */

// Basic Theme define variables
if( !defined( 'WPSITE_VERSION' ) ) {
	define( 'WPSITE_VERSION', '1.0.0' ); //version of theme
}
if( !defined( 'WPSITE_THEME_DIR' ) ) {
	define( 'WPSITE_THEME_DIR', get_template_directory() ); // theme dir
}
if( !defined( 'WPSITE_THEME_URL' ) ) {
	define( 'WPSITE_THEME_URL', get_template_directory_uri() ); // theme url
}
if( !defined( 'WPSITE_ADMIN_DIR' ) ) {
	define( 'WPSITE_ADMIN_DIR', WPSITE_THEME_DIR . '/includes/admin' ); // theme admin dir
}

/**
 * Theme setup
 */
function wpsite_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'wpsite', WPSITE_THEME_DIR . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// WooCommerce Support
	add_theme_support( 'woocommerce' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'wpsite' ),
	) );

}
add_action( 'after_setup_theme', 'wpsite_theme_setup' );

/**
 * Registers a widget area.
 *
 * @since 1.0.0
 */
function wpsite_widgets_init() {
	remove_theme_support( 'widgets-block-editor' );
	// Register Normal Sidebar
	register_sidebar( array(
		'name'			=> esc_html__( 'Sidebar', 'wpsite' ),
		'id'			=> 'wphb-sidebar-1',
		'description'	=> esc_html__( 'Add widgets here to appear in your sidebar.', 'wpsite' ),
		'before_widget'	=> '<div id="%1$s" class="sidebar-widget widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5 class="widget-title">',
		'after_title'	=> '</h5>',
	) );

	register_sidebar( array(
		'name'			=> esc_html__( 'Footer 1', 'wpsite' ),
		'id'			=> 'wphb-footer-1',
		'description'	=> esc_html__( 'Add widgets here to appear in your footer.', 'wpsite' ),
		'before_widget'	=> '<div id="%1$s" class="sidebar-widget widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__( 'Footer 2', 'wpsite' ),
		'id'			=> 'wphb-footer-2',
		'description'	=> esc_html__( 'Add widgets here to appear in your footer.', 'wpsite' ),
		'before_widget'	=> '<div id="%1$s" class="sidebar-widget widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5 class="widget-title">',
		'after_title'	=> '</h5>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__( 'Footer 3', 'wpsite' ),
		'id'			=> 'wphb-footer-3',
		'description'	=> esc_html__( 'Add widgets here to appear in your footer.', 'wpsite' ),
		'before_widget'	=> '<div id="%1$s" class="sidebar-widget widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5 class="widget-title">',
		'after_title'	=> '</h5>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__( 'Footer 4', 'wpsite' ),
		'id'			=> 'wphb-footer-4',
		'description'	=> esc_html__( 'Add widgets here to appear in your footer.', 'wpsite' ),
		'before_widget'	=> '<div id="%1$s" class="sidebar-widget widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5 class="widget-title">',
		'after_title'	=> '</h5>',
	) );

}
add_action( 'widgets_init', 'wpsite_widgets_init' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpsite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpsite_content_width', 1400 );
}
add_action( 'after_setup_theme', 'wpsite_content_width', 0 );

/**
 * Adds custom classes to the array of body classes.
 */
function wpsite_body_classes( $classes ) {
	
	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'wphb-sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}

	return $classes;
}
add_filter( 'body_class', 'wpsite_body_classes' );

// Shortcodes in Widgets
add_filter('widget_text', 'do_shortcode');


// Wp v4.7.1 and higher
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
/**
 * Theme options
 */
if( function_exists('acf_add_options_page') ) {
	global $wpsite_themeopts;
	require_once( WPSITE_THEME_DIR . '/admin/index.php' );
	$wpsite_themeopts = get_fields("options");
}
// Script class to manage theme styles and scripts
require_once( WPSITE_THEME_DIR . '/includes/class-wpsite-scripts.php' );

// Misc functions file manage theme misc functions
require_once( WPSITE_THEME_DIR . '/includes/wpsite-misc-functions.php' );

// Post Types Class to manage theme's custom post types and texonomies
require_once( WPSITE_THEME_DIR . '/includes/class-wpsite-post-types.php' );
// Shortcode class handle theme's shortcodes
require_once( WPSITE_THEME_DIR . '/includes/class-wpsite-shortcodes.php' );