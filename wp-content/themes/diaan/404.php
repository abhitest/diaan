<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>
<div id="primary" class="content-area ptb80">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<section class="error-404 not-found">
						<header class="page-header">
							<div class="main-title text-center">
								<h1 class="page-title"><?php _e( '404', 'wpsite' ); ?></h1>
		                    </div>
						</header><!-- .page-header -->
						<div class="page-content text-center">
							<p class="error-page-text">
								<?php echo esc_html__( 'The Link you followed is probably broken', 'wpsite' ); ?><br/>
								<span class="text-uppercase title">
									<strong><?php echo esc_html__( 'or', 'wpsite' ); ?></strong>
								</span><br/>
								<?php echo esc_html__( 'The Page has been removed.', 'wpsite' ); ?>
							</p><br/>
							<?php get_search_form(); ?>
						</div><br/><!-- .page-content -->
						<div class="back-to-home-btn text-center">
							<div class="wpsite_button">
								<a href="<?php echo site_url('/'); ?>" class="btn btn-wpsite"><?php echo esc_html__( 'Back to Home', 'wpsite' ); ?></a>	
				            </div>						
						</div>
					</section><!-- .error-404 -->
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
