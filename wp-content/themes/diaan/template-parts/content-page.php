<?php
/**
 * Template part for displaying page content in page.php
 */
global $post, $wphb_themeopts; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wpsite' ),
			'after'  => '</div>',
		) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->