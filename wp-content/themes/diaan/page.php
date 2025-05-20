<?php
/**
 * The template for displaying all pages
 */
get_header(); ?>
<div id="main-content" >
	<div>
		<div id="content">
			<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile;

				// Previous/next post navigation.
				wpsite_theme_paging_nav();
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>
		</div>
	</div>
</div>
<?php get_footer();
