<?php

/**
 * The template for displaying all single posts
 */

get_header('v2');
$wpsite_themeopts;
?>

<!-- Hero Section - About -->
<div class="about-hrsec fullwidth bgimg" style="background-image: url('<?php echo site_url() ?>/wp-content/themes/diaan/assets/images/project-inn.jpg');">
    <div class="overlay" style="background-color: rgb(32 34 32 / 40%);"></div>
    <div class="wrapper">
        <div class="about-hrinn fnt-jost">
            <div class="large-txt">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php custom_breadcrumbs(); ?>
        </div>
    </div>
</div>

<!-- Project Post Section -->
<div class="prjtpst-sec fullwidth">
    <div class="wrapper">
        <div class="prjtpst-inn fl">
            <div class="prjtpst-lf">
                <?php $image_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                <?php if ($image_url != "") { ?>
                    <div class="prjtpst-feature bgimg" style="background-image: url('<?php echo $image_url; ?>');">
                    </div>
                <?php } ?>
                <div class="prjtpst-date"><?php echo get_the_date('M d, Y'); ?></div>
                <div class="prjtpst-content">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="prjtpst-rght">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>