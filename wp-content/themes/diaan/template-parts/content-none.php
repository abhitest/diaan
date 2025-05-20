<?php
/**
 * Template part for no content found
 */
global $post, $wphb_themeopts; ?>
<article id="no-content-found" <?php post_class(); ?>>
	<div class="col-lg-12">
		<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'wpsite' ); ?></h2>
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( esc_html__( 'Ready to publish your first post?', 'wpsite').' <a href="%1$s">'.esc_html__( 'Get started here', 'wpsite').'</a>.', admin_url( 'post-new.php' ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<div class="wphb-search-box">
				<h3><?php esc_html_e( 'Search', 'wpsite' ); ?></h3>
				<?php get_search_form(); ?>
				<span class="help-block theme-color">
					<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wpsite' ); ?>
				</span>
			<div class="clearfix"></div>
		<?php else : ?>
			<div class="wphb-search-box">
				<h3><?php esc_html_e( 'Search', 'wpsite' ); ?></h3>
				<?php get_search_form(); ?>
				<span class="help-block theme-color">
					<?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wpsite' ); ?>
				</span>
			</div>
			<div class="clearfix"></div>
		<?php endif; ?>
	</div>
</article>