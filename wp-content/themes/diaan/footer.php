<?php

/**
 * The template for displaying the footer
 */
global $wpsite_themeopts; ?>

<!-- Footer -->
<div class="footer fullwidth">
	<div class="wrapper">
		<div class="footer-inn fl text-white">
			<div class="footer-lf footer-col">
				<?php if ($wpsite_themeopts['header_logo'] != "") { ?>
					<div class="footer-logo">
						<a href="<?php echo site_url(); ?>"><img src="<?php echo $wpsite_themeopts['header_logo']; ?>"></a>
					</div>
				<?php } ?>
				<div class="footer-txt">
					<p><?php echo $wpsite_themeopts['footer_text']; ?></p>
				</div>
				<div class="footer-social social-icon">
					<ul class="fl fac">
						<?php if ($wpsite_themeopts['socials'] != "") {
							$socials = $wpsite_themeopts['socials']; ?>
							<?php foreach ($socials as $key => $single) { ?>
								<li>
									<a href="<?php echo $single['link'] ?>"><?php echo $single['icon'] ?></a>
								</li>
						<?php };
						} ?>
					</ul>
				</div>
			</div>
			<?php if (is_active_sidebar('wphb-footer-1')) { ?>
				<div class="footer-menu footer-col">
					<?php dynamic_sidebar('wphb-footer-1'); ?>
				</div>
			<?php } ?>

			<div class="footer-post footer-col">
				<h3>Recent Post</h3>
				<div class="footer-postrw">
					<?php
					$args = array(
						'post_type'      => 'post',      // Default WordPress blog posts
						'posts_per_page' => 2,           // Limit to 3 posts
						'post_status'    => 'publish',   // Only published posts
						'orderby'        => 'date',      // Order by publish date
						'order'          => 'DESC',      // Newest first
					);

					$recent_posts = new WP_Query($args);
					?>
					<?php
					if ($recent_posts->have_posts()) :
						while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
							<?php $image_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
								<div class="footer-postcol fl fac">
									<a href="<?php the_permalink(); ?>">
										<div class="footer-postimg" style="background-image: url('<?php echo $image_url ?>') ;"></div>
									</a>
									<div class="footer-postcontent">
										<div class="footer-postdate"> <img src="<?php echo site_url() ?>/wp-content/themes/diaan/assets/images/calendar.svg"><?php echo get_the_date('M d, Y'); ?></div>
										<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
									</div>
								</div>
					<?php endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
			<div class="footer-form footer-col">
				<h3>Newsletter</h3>
				<div class="footer-frmtxt">
					<p>Unlock fresh ideas for your spaces— join our newsletter for expert tips and updates!</p>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="eaf4213" title="Footer Subscribe Form"]'); ?>
			</div>

		</div>
		<div class="footer-copyrght tc">
			<p><?php $wpsite_themeopts['copyright_text'] ?></p>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>

</html>