<?php
/**
 * Theme Misc Functions
 */

 global $post;
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Excerpt Content
 */
function wpsite_get_the_excerpt( $post_id = '', $limit = '' ) {
	global $post, $wpsite_themeopts;
	$content = get_the_excerpt();
	if( empty($content) ) {
		if( ! empty($post_id) ) {
			$post = get_post( $post_id );
		}	
		$content = apply_filters( 'the_content', $post->post_content );
		$content = strip_shortcodes( $content );
	}
	// Check the limit
	if( empty($limit) ) {
		$limit = !empty( $wpsite_themeopts['excerpt_length'] ) ? $wpsite_themeopts['excerpt_length'] : '8';
	}
	$excerpt_more = apply_filters( 'wpsite_get_the_excerpt', ', [�K]' );
	$excerpt = wp_trim_words( $content, $limit, $excerpt_more );
	return $excerpt;
}

function custom_breadcrumbs() {
    // Do not show breadcrumbs on the front page
    if ( is_front_page() ) return;

    echo '<div class="breadcrumb-menu">';
    echo '<ul>';
    echo '<li><a href="' . home_url() . '">Home</a></li>';

    if ( is_singular( 'project' ) ) {
        echo '<li>' . get_the_title() . '</li>';

    } elseif ( is_post_type_archive( 'project' ) ) {
        echo '<li>Projects</li>';

    } elseif ( is_singular( 'post' ) ) {
        echo '<li>' . get_the_title() . '</li>';

    } elseif ( is_page() ) {
        // If it has parent
        if ( $post->post_parent ) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();

            while ( $parent_id ) {
                $page = get_page( $parent_id );
                $breadcrumbs[] = '<li><a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a></li>';
                $parent_id = $page->post_parent;
            }

            $breadcrumbs = array_reverse( $breadcrumbs );
            foreach ( $breadcrumbs as $crumb ) echo $crumb;
        }

        echo '<li>' . get_the_title() . '</li>';

    } elseif ( is_category() ) {
        echo '<li>' . single_cat_title( '', false ) . '</li>';

    } elseif ( is_search() ) {
        echo '<li>Search results for "' . get_search_query() . '"</li>';

    } elseif ( is_404() ) {
        echo '<li>Page not found</li>';
    }

    echo '</ul>';
    echo '</div>';
}


