<?php 

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'parent_slug'   => 'themes.php',
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'position' => 61.1,
        'redirect' => true,
        'update_button' => 'Save options',
        'updated_message' => 'Options saved',
    ));
}
