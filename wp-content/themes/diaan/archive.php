<?php
/**
 * The template for displaying archive pages
 */
get_header('v2'); 

?>

<!-- Hero Section - About -->
<div class="about-hrsec fullwidth bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>blog-hr.jpg');">
	<div class="overlay" style="background-color: rgb(32 34 32 / 40%);"></div>
	<div class="wrapper">
		<div class="about-hrinn fnt-jost">
			<div class="large-txt">
				<h1><?php echo get_the_archive_title(); ?></h1>
			</div>
		</div>
	</div>
</div>

<!-- Blog Listing Section -->
<div class="blglist-sec fullwidth">
	<div class="wrapper">
		<div class="blglist-rw fl">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                <div class="blglist-col">
                    <div class="blgfeature">
                        <a href="/home/Diaan/blog_details.html" class="bgimg" style="background-image: url('<?php echo $image_url ?>');">
                            <div class="blogpst-date fnt-jost">
                                <div class="icon"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>calendar-white.svg"></div>
                                <span><?php echo get_the_date('M d, Y'); ?></span>
                            </div>
                        </a>
                    </div>
                    <div class="blgcontent">
                        <!-- <div class="blogpst-info fl">
                            <div class="blogpst-author blgmeta fl">
                                <img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>user-red.svg">admin
                            </div>
                            <div class="blogpst-comments blgmeta fl">
                                <img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>chat-red.svg">100K comments
                            </div>
                        </div> -->
                        <div class="blgtitle">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="blgtext">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer();