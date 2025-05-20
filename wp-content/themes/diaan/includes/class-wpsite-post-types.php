<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Post Types Class
 *
 * Manage Theme's Custom,
 * Post types and texonomies
 */
class wpsite_Post_Types {

	public function __construct() {
		add_action( 'init', array($this, 'register_theme_taxonomies') );
		add_action( 'init', array($this, 'register_theme_post_types') );
	}

	/**
	 * Manage Taxonomies
	 */
	public function register_theme_taxonomies() {
		// No custom taxonomies for now
	}

	/**
	 * Manage Post Types
	 */
	public function register_theme_post_types() {
		register_post_type( 'project', array(
			'labels' => array(
				'name'               => __( 'Projects', 'textdomain' ),
				'singular_name'      => __( 'Project', 'textdomain' ),
				'add_new'            => __( 'Add New Project', 'textdomain' ),
				'add_new_item'       => __( 'Add New Project', 'textdomain' ),
				'edit_item'          => __( 'Edit Project', 'textdomain' ),
				'new_item'           => __( 'New Project', 'textdomain' ),
				'view_item'          => __( 'View Project', 'textdomain' ),
				'search_items'       => __( 'Search Projects', 'textdomain' ),
				'not_found'          => __( 'No Projects found', 'textdomain' ),
				'not_found_in_trash' => __( 'No Projects found in Trash', 'textdomain' ),
				'menu_name'          => __( 'Projects', 'textdomain' ),
			),
			'public'              => true,
			'has_archive'         => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-portfolio',
			'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'taxonomies'          => array( 'category' ),
			'show_in_rest'        => true,
			'rewrite'             => array( 'slug' => 'projects' ),
		) );
	}
}

return new wpsite_Post_Types();
