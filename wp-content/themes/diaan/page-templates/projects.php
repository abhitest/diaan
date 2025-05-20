<?php

/**
 * Template Name: Project Page     
 */

get_header('v2');
$wpsite_themeopts;

get_template_part('blocks/blocks');
?>



<!-- Filter Section -->

<div class="profilter-sec fullwidth">
	<div class="wrapper">
		<div class="profilter-inn fnt-jost">
			<div class="profilter-tag">
				<ul class="fl fjc">
					<li data-filter="*">ALL</li>
					<?php
					$categories = get_categories([
						'taxonomy' => 'category',
						'hide_empty' => true,
						'post_status'    => 'publish',
					]);

					foreach ($categories as $cat) {
						echo '<li data-filter=".' . esc_attr($cat->slug) . '">' . esc_html($cat->name) . '</li>';
					}
					?>
				</ul>
			</div>

			<div class="profilter-content fl text-white">
				<?php
				$args = array(
					'post_type' => 'project',
					'posts_per_page' => -1
				);
				$query = new WP_Query($args);

				if ($query->have_posts()):
					while ($query->have_posts()): $query->the_post();

						$categories = get_the_category();
						$cat_classes = '';
						if ($categories) {
							foreach ($categories as $cat) {
								$cat_classes .= $cat->slug . ' ';
							}
						}

						$bg_image = get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>
						<div class="profilter-col <?php echo esc_attr(trim($cat_classes)); ?>">
							<div class="profilter-box" style="background-image: url('<?php echo esc_url($bg_image); ?>')">
								<!-- <div class="profilter-txt gallery-content">
									<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M13 14C13.5523 14 14 13.5523 14 13L14 4C14 3.44771 13.5523 3 13 3C12.4477 3 12 3.44771 12 4L12 12L4 12C3.44771 12 3 12.4477 3 13C3 13.5523 3.44771 14 4 14L13 14ZM0.292893 1.70711L12.2929 13.7071L13.7071 12.2929L1.70711 0.292893L0.292893 1.70711Z" fill="#74787C"></path></svg></span>
								</div> -->
								
							</div>
						</div>
				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</div>
</div>


<!-- Cta Form Section -->
<div class="ctafrm-sec fullwidth">
	<div class="wrapper">
		<div class="ctafrm-inn fl fac fjsb" style="background-color: #E82027;">
			<div class="ctafrm-lf text-white">
				<div class="sectag">Get Free Consultancy </div>
				<h2>Get Free or call us for Consultancy</h2>
				<div class="contact-no fnt-jost"><a href="tel:+91 97240 77822">+91 97240 77822</a></div>
			</div>
			<div class="ctafrm">
				<form>
					<div class="form-columns-2">
						<div class="hs_firstname hs-field">
							<div class="input">
								<input required="" type="text" class="form__field" placeholder="Full Name">
							</div>
						</div>
						<div class="hs_email hs-field">
							<div class="input">
								<input required="" type="email" class="form__field" placeholder="Email">
							</div>
						</div>
					</div>
					<div class="hs_submit">
						<input type="submit" value="Send Message">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
	$(document).ready(function() {

		var $grid = $('.profilter-content').isotope({
			itemSelector: '.profilter-col',
		});

		// Add 'active' class to first filter and filter Isotope on page load
		var $firstFilter = $('.profilter-tag li:first-child');
		$firstFilter.addClass('active');
		var defaultFilter = $firstFilter.attr('data-filter');
		$grid.isotope({
			filter: defaultFilter
		});

		// Handle click on filter buttons
		$('.profilter-tag').on('click', 'li', function(e) {
			e.preventDefault();
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({
				filter: filterValue
			});
			$('.profilter-tag li').removeClass('active');
			$(this).addClass('active');
		});
	});
</script>

<?php get_footer(); ?>