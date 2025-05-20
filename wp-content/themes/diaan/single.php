<?php

/**
 * The template for displaying all single posts
 */
global $post;
get_header('v2');

get_template_part('blocks/blocks');

$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('display_name', $author_id);
?>

<!-- Hero Section - About -->
<div class="about-hrsec fullwidth bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>pst1.jpg');">
	<div class="overlay" style="background-color: rgb(0 0 0 / 40%);"></div>
	<div class="wrapper">
		<div class="about-hrinn fnt-jost">
			<div class="large-txt">
				<h1><?php the_title() ?></h1>
			</div>
			<?php custom_breadcrumbs() ?>
		</div>
	</div>
</div>

<!-- Blog Post Section -->
<div class="blogpost-sec fullwidth">
	<div class="wrapper">
		<div class="blogpst-inn fl">
			<div class="prjtpst-lf">
				<?php $image_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
				<?php if ($image_url != "") { ?>
					<div class="prjtpst-feature bgimg" style="background-image: url('<?php echo $image_url; ?>');"></div>
				<?php } ?>
				<div class="blogpst-content">
					<?php the_content(); ?>
				</div>
				<div class="blogpst-share fl fac fjsb">
					<!-- <div class="share-links">
						<ul class="fl fac">
							<li><a href="##">Renovation</a></li>
							<li><a href="##">Installation</a></li>
							<li><a href="##">Modified</a></li>
						</ul>
					</div> -->
					<div class="share-btn">
						<a href="<?php the_permalink(); ?>">Share
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
								<path d="M18 8.5C19.6569 8.5 21 7.15685 21 5.5C21 3.84315 19.6569 2.5 18 2.5C16.3431 2.5 15 3.84315 15 5.5C15 7.15685 16.3431 8.5 18 8.5Z" stroke="#74787C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M6 15.5C7.65685 15.5 9 14.1569 9 12.5C9 10.8431 7.65685 9.5 6 9.5C4.34315 9.5 3 10.8431 3 12.5C3 14.1569 4.34315 15.5 6 15.5Z" stroke="#74787C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M18 22.5C19.6569 22.5 21 21.1569 21 19.5C21 17.8431 19.6569 16.5 18 16.5C16.3431 16.5 15 17.8431 15 19.5C15 21.1569 16.3431 22.5 18 22.5Z" stroke="#74787C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M8.58984 14.01L15.4198 17.99" stroke="#74787C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M15.4098 7.01001L8.58984 10.99" stroke="#74787C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</a>
					</div>
				</div>
				<!-- Founder Section -->
				<div class="founder-sec fullwidth">
					<div class="wrapper">
						<div class="founder-inn">
							<div class="founder-col fl fac fjsb">
								<div class="founder-img tc">
									<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>paras-zaveri.png">
								</div>
								<div class="founder-content">
									<h3>Paras Zaveri</h3>
									<div class="position">Founder of group Diaan</div>
									<div class="founder-txt">As the promoter and founder of Group Diaan, I started my career at a very early age. With extensive experience in the fields of auto parts, equity and commodities trading, and diamond jewelry, I expanded my knowledge base into retail and pan-India marketing. Leveraging my diverse skills and expertise, I have broadened my vision by entering various business verticals such as facades, aluminum windows, railings, and many more to come.</div>
									<div class="founder-social">
										<ul class="fl fac">
											<li>
												<a href="##" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
														<g clip-path="url(#clip0_88_1320)">
															<path d="M12.1146 20.3511V11.2288H15.1754L15.6346 7.67264H12.1146V5.40254C12.1146 4.37327 12.3993 3.67184 13.8769 3.67184L15.7584 3.67106V0.490304C15.4331 0.44802 14.3161 0.351074 13.0161 0.351074C10.3015 0.351074 8.44307 2.00804 8.44307 5.05034V7.67264H5.37305V11.2288H8.44307V20.3511H12.1146Z" fill="#202220" />
														</g>
														<defs>
															<clipPath id="clip0_88_1320">
																<rect width="20" height="20" fill="white" transform="translate(0.566406 0.351074)" />
															</clipPath>
														</defs>
													</svg></a>
											</li>
											<li>
												<a href="##" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
														<path d="M3.45547 1.3667C2.08057 1.3667 1.18164 2.26952 1.18164 3.45616C1.18164 4.61659 2.05379 5.54517 3.40271 5.54517H3.4288C4.83059 5.54517 5.70297 4.61659 5.70297 3.45616C5.67677 2.26952 4.83059 1.3667 3.45547 1.3667Z" fill="#202220" />
														<path d="M1.41992 7.19629H5.43932V19.2888H1.41992V7.19629Z" fill="#202220" />
														<path d="M15.3039 6.91211C13.1356 6.91211 11.6816 8.94962 11.6816 8.94962V7.19592H7.66211V19.2884H11.6814V12.5355C11.6814 12.174 11.7076 11.813 11.8138 11.5545C12.1044 10.8326 12.7656 10.0848 13.876 10.0848C15.3305 10.0848 15.9122 11.1937 15.9122 12.8193V19.2884H19.9312V12.3548C19.9312 8.64051 17.9482 6.91211 15.3039 6.91211Z" fill="#202220" />
													</svg></a>
											</li>
											<li>
												<a href="##" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
														<g clip-path="url(#clip0_88_1327)">
															<path d="M12.4611 8.82065L19.9016 0.351074H18.139L11.6758 7.70359L6.51743 0.351074H0.566406L8.36854 11.4704L0.566406 20.351H2.32893L9.14989 12.5848L14.5987 20.351H20.5497M2.96507 1.65265H5.6728L18.1377 19.1134H15.4293" fill="#202220" />
														</g>
														<defs>
															<clipPath id="clip0_88_1327">
																<rect width="19.9833" height="20" fill="white" transform="translate(0.566406 0.351074)" />
															</clipPath>
														</defs>
													</svg></a>
											</li>
											<li>
												<a href="##" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
														<g clip-path="url(#clip0_88_1329)">
															<path d="M15.0293 0.351074H6.06795C3.02471 0.351074 0.548828 2.82707 0.548828 5.87032V14.8317C0.548828 17.8751 3.02471 20.351 6.06795 20.351H15.0293C18.0728 20.351 20.5487 17.875 20.5487 14.8317V5.87032C20.5488 2.82707 18.0728 0.351074 15.0293 0.351074ZM18.7743 14.8317C18.7743 16.8966 17.0944 18.5765 15.0295 18.5765H6.06795C4.00316 18.5766 2.32331 16.8966 2.32331 14.8317V5.87032C2.32331 3.80553 4.00316 2.12556 6.06795 2.12556H15.0293C17.0943 2.12556 18.7742 3.80553 18.7742 5.87032V14.8317H18.7743Z" fill="black" />
															<path d="M10.548 5.19775C7.70633 5.19775 5.39453 7.50955 5.39453 10.3512C5.39453 13.1928 7.70633 15.5044 10.548 15.5044C13.3897 15.5044 15.7015 13.1928 15.7015 10.3512C15.7015 7.50955 13.3897 5.19775 10.548 5.19775ZM10.548 13.7298C8.6849 13.7298 7.16902 12.2142 7.16902 10.3511C7.16902 8.48789 8.68478 6.97212 10.548 6.97212C12.4112 6.97212 13.927 8.48789 13.927 10.3511C13.927 12.2142 12.4111 13.7298 10.548 13.7298Z" fill="black" />
															<path d="M15.9185 3.69336C15.5766 3.69336 15.2407 3.83177 14.9993 4.07428C14.7567 4.31561 14.6172 4.65158 14.6172 4.99465C14.6172 5.33665 14.7568 5.6725 14.9993 5.91502C15.2406 6.15635 15.5766 6.29594 15.9185 6.29594C16.2615 6.29594 16.5963 6.15635 16.8388 5.91502C17.0814 5.6725 17.2198 5.33653 17.2198 4.99465C17.2198 4.65158 17.0814 4.31561 16.8388 4.07428C16.5975 3.83177 16.2615 3.69336 15.9185 3.69336Z" fill="black" />
														</g>
														<defs>
															<clipPath id="clip0_88_1329">
																<rect width="20" height="20" fill="white" transform="translate(0.548828 0.351074)" />
															</clipPath>
														</defs>
													</svg></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="blog-comments">
					<h2>2 Comments</h2>
					<div class="blgcomment-rw">
						<div class="blgcomment-col fl">
							<div class="blgcomment-img bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user1.png');"></div>
							<div class="blgcomment-content">
								<div class="blgcomment-top fl fac fjsb">
									<h4 class="h3">Cameron Williamson</h4>
									<div class="blgcomment-btn button secondary-btn">
										<a href="##">Reply</a>
									</div>	
								</div>
								<div class="blgcomment-txt">
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
								</div>
							</div>
						</div>
						<div class="blgcomment-col fl">
							<div class="blgcomment-img bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user2.png');"></div>
							<div class="blgcomment-content">
								<div class="blgcomment-top fl fac fjsb">
									<h4 class="h3">Cameron Williamson</h4>
									<div class="blgcomment-btn button secondary-btn">
										<a href="##">Reply</a>
									</div>	
								</div>
								<div class="blgcomment-txt">
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <div class="blogpst-form">
					<h2>Leave a Comment</h2>
					<div class="blog-frm">
					  <form>
						<div class="form-columns-2">
							<div class="hs_firstname hs-field">
								<div class="input">
  									<input required="" type="text" class="form__field" placeholder="Enter Name">
  								</div>	
  							</div>
	  						<div class="hs_email hs-field">
								<div class="input">
  									<input required="" type="email" class="form__field" placeholder="Enter Email">
  								</div>
  							</div>
						</div>
						<div class="form-columns-1">
							<div class="hs_message hs-field">
								<textarea class="form__field" name="message" placeholder="Enter Message"></textarea>
  							</div>
  						</div>
  						<div class="hs_submit">
	  						<input type="submit" value="Submit Comment">
		  				</div>
					  </form>
					</div>
				</div>				 -->
			</div>
			<div class="prjtpst-rght">
				<div class="prjtpst-sticky">
					<!-- <div class="serach-box blgpst-box">
					<h3>Search</h3>
					<div class="serach-frm">
						<form>
							<input type="text" id="search-input" placeholder="Search...">
							<button id="search-button"type="button" class="btn search-btn">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M7 17L17 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 7H17V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</button>
						</form>
					</div>
				</div> -->
					<!-- <div class="blgcategories blgpst-box">
					<h3>Categories</h3>
					<ul>
						<li><a href="##">Modified Glazing </a></li>
						<li><a href="##">Ventilation and Glazing Installation </a></li>
						<li><a href="##">Glazing Renovation </a></li>
						<li><a href="##">Glazing Repair </a></li>
					</ul>
				</div> -->
					<div class="blgrecent-pst blgpst-box">
						<h3>Recent Post</h3>
						<div class="blgrecent-rw">

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
									<div class="blgrecent-col fl">
										<a href="<?php the_permalink(); ?>" class="blgrecent-img bgimg" style="background-image: url('<?php echo $image_url ?>') ;"></a>
										<div class="recent-rght">
											<!-- <div class="blogpst-author blgmeta fl"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user-red.svg">admin</div> -->
											<div class="recent-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
										</div>
									</div>
							<?php endwhile;
								wp_reset_postdata();
							endif;
							?>
						</div>
					</div>
					<div class="blgtopic blgpst-box">
						<h3>Tag Cloud</h3>
						<?php
						$tags = get_the_tags();
						if ($tags) {
							echo '<ul class="post-tags">';
							foreach ($tags as $tag) {
								echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . esc_html($tag->name) . '</a></li>';
							}
							echo '</ul>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
