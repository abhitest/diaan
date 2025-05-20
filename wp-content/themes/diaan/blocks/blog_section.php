<?php
$show_this_block = get_sub_field('show_this_block');

?>

<!-- Post Section -->
<?php if ($show_this_block == "Yes") { ?>
	<div class="blogpst-sec fullwidth bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>testimonial-bg.png');">
		<div class="wrapper">
			<div class="blogpst-heading tc">
				<div class="sectag">Latest Posts</div>
				<h2>Blog News</h2>
			</div>
			<div class="blogpst-rw fl text-white fjc">

				<?php
				$args = array(
					'post_type'      => 'post',      // Default WordPress blog posts
					'posts_per_page' => 3,           // Limit to 3 posts
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
						<div class="blogpst-col bgimg tc" style="background-image: url('<?php echo $image_url; ?>');">
							<div class="blogpst-date fnt-jost">
								<div class="icon"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>calendar-white.svg"></div>
								<span><?php echo get_the_date('M d, Y'); ?></span>
							</div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<a href="<?php the_permalink(); ?>" class="blogpst-link"></a>
						</div>
				<?php endwhile; wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</div>
<?php } ?>