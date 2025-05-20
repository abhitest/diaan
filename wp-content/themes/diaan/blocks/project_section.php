<?php
$show_this_block = get_sub_field('show_this_block');
$title = get_sub_field('title');
$header = get_sub_field('header');
$button = get_sub_field('button');
?>

<!-- About Section -->
<?php if ($show_this_block == "Yes") { ?>
	<div class="gallery-sec fullwidth">
		<div class="wrapper">
			<div class="gallery-heading">
				<div class="sectag"><?php echo $title; ?></div>
				<h2><?php echo $header; ?></h2>
			</div>
			<div class="gallery-row fl">

				<?php
				$args = array(
					'post_type'      => 'project',      // Default WordPress blog posts
					'posts_per_page' => 4,           // Limit to 3 posts
					'post_status'    => 'publish',   // Only published posts
					'orderby'        => 'date',      // Order by publish date
					'order'          => 'DESC',      // Newest first
				);

				$projects = new WP_Query($args);
				?>
				<?php if($projects->have_posts()): ?>
					<?php while ($projects->have_posts()): $projects->the_post(); ?>
						<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<div class="gallery-col bgimg" style="background-image: url(<?php echo $image_url ?>);">
							
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<?php if ($button != "") { ?>
				<div class="gallery-btn secondary-btn button fl fjc">
					<a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
							<path d="M22.2241 14.355L16.6759 8.08312C16.3084 7.71562 15.7103 7.71562 15.3428 8.08312C14.9753 8.45062 14.9753 9.04875 15.3428 9.41625L20.3116 15.0337L15.3428 20.6512C14.9753 21.0187 14.9753 21.6169 15.3428 21.9844C15.7103 22.3519 16.3084 22.3519 16.6759 21.9844L22.2241 15.7125C22.4116 15.525 22.5016 15.2794 22.4978 15.0337C22.4997 14.7881 22.4116 14.5425 22.2241 14.355ZM8.61719 21.9862C8.98469 22.3537 9.58281 22.3537 9.95031 21.9862L15.4984 15.7144C15.6859 15.5269 15.7759 15.2812 15.7722 15.0356C15.7759 14.79 15.6859 14.5425 15.4984 14.3569L9.95219 8.08312C9.58469 7.71562 8.98656 7.71562 8.61906 8.08312C8.25156 8.45062 8.25156 9.04875 8.61906 9.41625L13.5878 15.0337L8.61906 20.6512C8.24969 21.0206 8.24969 21.6187 8.61719 21.9862Z" fill="white"></path>
						</svg>
					</a>
				</div>
			<?php } ?>
		</div>
		<div class="shape-img">
			<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>shape1.png" class="rght-img">
			<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>shape1.png" class="left-img">
		</div>
	</div>
<?php } ?>