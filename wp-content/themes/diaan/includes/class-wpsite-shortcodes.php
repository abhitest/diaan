<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Shortcodes Class
 *
 * Manage Theme's Shortcodes
 */
class wpsite_Shortcodes {

	public function __construct() {
		// Default utility shortcodes
		add_shortcode( 'site_url', array($this, 'site_url_shortcode') );
	}

	/**
	 * Return site URL
	 */
	public function site_url_shortcode( $atts, $content ) {
		return esc_url( site_url('/') );
	}

}
return new wpsite_Shortcodes();