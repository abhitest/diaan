<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Script Class
 *
 * Manage Theme Style and Scripts
 */

function enqueue_theme_styles() {
    

    // Enqueue main styles
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), null);


}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');


function enqueue_custom_scripts() {
    // Register Scripts
    wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);

    // Enqueue Scripts
    wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

