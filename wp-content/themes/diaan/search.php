<?php
/**
 * The template for displaying search results pages
 */
get_header(); ?>
<div id="main-content" class="ptb80">
	<div class="container">
		<div class="row">
			<div id="content" class="col-12 ol-md-8 col-lg-9">
				<header class="page-header">
					<?php if ( have_posts() ) : ?>
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wpsite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					<?php else : ?>
						<h1 class="page-title"><?php _e( 'Nothing Found', 'wpsite' ); ?></h1>
					<?php endif; ?>
				</header>
				<?php
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile;
					// Previous/next post navigation.
					wpsite_theme_paging_nav();
				else :
					?>
					<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wpsite' ); ?></p>
					<?php get_search_form();
				endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer();
