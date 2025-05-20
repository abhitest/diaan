<?php

/**
 * Template Name: Blog Page     
 */

get_header('v2');
$wpsite_themeopts;

get_template_part('blocks/blocks');
?>

<!-- Hero Section - About -->
<div class="about-hrsec fullwidth bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>blog-hr.jpg');">
	<div class="overlay" style="background-color: rgb(32 34 32 / 40%);"></div>
	<div class="wrapper">
		<div class="about-hrinn fnt-jost">
			<div class="large-txt">
				<h1>Blogs</h1>
			</div>
			<?php custom_breadcrumbs() ?>
		</div>
	</div>
</div>

<!-- Blog Listing Section -->
<div class="blglist-sec fullwidth">
	<div class="wrapper">
		<div class="blglist-rw fl">
			<div class="blglist-col">
				<div class="blgfeature">
					<a href="/home/Diaan/blog_details.html" class="bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>blglisting1.png');">
						<div class="blogpst-date fnt-jost">
			   				<div class="icon"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>calendar-white.svg"></div>
			   		 		<span>Jan 05, 2025</span>
			   			</div>
			   		</a>
				</div>
				<div class="blgcontent">
					<div class="blogpst-info fl">
			   			<div class="blogpst-author blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user-red.svg">admin
			   			</div>
			   			<div class="blogpst-comments blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>chat-red.svg">100K comments
			   			</div>
			   		</div>
					<div class="blgtitle">
						<h3><a href="/home/Diaan/blog_details.html">Correct Execution Ensures Victory.</a></h3>
					</div>
					<div class="blgtext">
						<p>Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula.</p>
					</div>
				</div>
			</div>

			<div class="blglist-col">
				<div class="blgfeature">
					<a href="/home/Diaan/blog_details.html" class="bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>blglisting2.jpg');">
						<div class="blogpst-date fnt-jost">
			   				<div class="icon"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>calendar-white.svg"></div>
			   		 		<span>Jan 20, 2025</span>
			   			</div>
			   		</a>
				</div>
				<div class="blgcontent">
					<div class="blogpst-info fl">
			   			<div class="blogpst-author blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user-red.svg">admin
			   			</div>
			   			<div class="blogpst-comments blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>chat-red.svg">100K comments
			   			</div>
			   		</div>
					<div class="blgtitle">
						<h3><a href="/home/Diaan/blog_details.html">Correct Execution Ensures Victory.</a></h3>
					</div>
					<div class="blgtext">
						<p>Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula.</p>
					</div>
				</div>
			</div>

			<div class="blglist-col">
				<div class="blgfeature">
					<a href="/home/Diaan/blog_details.html" class="bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>blglisting3.jpg');">
						<div class="blogpst-date fnt-jost">
			   				<div class="icon"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>calendar-white.svg"></div>
			   		 		<span>Feb 10, 2025</span>
			   			</div>
			   		</a>
				</div>
				<div class="blgcontent">
					<div class="blogpst-info fl">
			   			<div class="blogpst-author blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user-red.svg">admin
			   			</div>
			   			<div class="blogpst-comments blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>chat-red.svg">100K comments
			   			</div>
			   		</div>
					<div class="blgtitle">
						<h3><a href="/home/Diaan/blog_details.html">Correct Execution Ensures Victory.</a></h3>
					</div>
					<div class="blgtext">
						<p>Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula.</p>
					</div>
				</div>
			</div>

			<div class="blglist-col">
				<div class="blgfeature">
					<a href="/home/Diaan/blog_details.html" class="bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>blglisting4.jpg');">
						<div class="blogpst-date fnt-jost">
			   				<div class="icon"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>calendar-white.svg"></div>
			   		 		<span>Feb 28, 2025</span>
			   			</div>
			   		</a>
				</div>
				<div class="blgcontent">
					<div class="blogpst-info fl">
			   			<div class="blogpst-author blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user-red.svg">admin
			   			</div>
			   			<div class="blogpst-comments blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>chat-red.svg">100K comments
			   			</div>
			   		</div>
					<div class="blgtitle">
						<h3><a href="/home/Diaan/blog_details.html">Correct Execution Ensures Victory.</a></h3>
					</div>
					<div class="blgtext">
						<p>Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula.</p>
					</div>
				</div>
			</div>

			<div class="blglist-col">
				<div class="blgfeature">
					<a href="/home/Diaan/blog_details.html" class="bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>blglisting5.jpg');">
						<div class="blogpst-date fnt-jost">
			   				<div class="icon"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>calendar-white.svg"></div>
			   		 		<span>Mar 15, 2025</span>
			   			</div>
			   		</a>
				</div>
				<div class="blgcontent">
					<div class="blogpst-info fl">
			   			<div class="blogpst-author blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user-red.svg">admin
			   			</div>
			   			<div class="blogpst-comments blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>chat-red.svg">100K comments
			   			</div>
			   		</div>
					<div class="blgtitle">
						<h3><a href="/home/Diaan/blog_details.html">Correct Execution Ensures Victory.</a></h3>
					</div>
					<div class="blgtext">
						<p>Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula.</p>
					</div>
				</div>
			</div>

			<div class="blglist-col">
				<div class="blgfeature">
					<a href="/home/Diaan/blog_details.html" class="bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>pst1.jpg');">
						<div class="blogpst-date fnt-jost">
			   				<div class="icon"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>calendar-white.svg"></div>
			   		 		<span>Apr 13, 2025</span>
			   			</div>
			   		</a>
				</div>
				<div class="blgcontent">
					<div class="blogpst-info fl">
			   			<div class="blogpst-author blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user-red.svg">admin
			   			</div>
			   			<div class="blogpst-comments blgmeta fl">
			   				<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>chat-red.svg">100K comments
			   			</div>
			   		</div>
					<div class="blgtitle">
						<h3><a href="/home/Diaan/blog_details.html">Correct Execution Ensures Victory.</a></h3>
					</div>
					<div class="blgtext">
						<p>Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>