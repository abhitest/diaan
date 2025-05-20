<?php
/**
 * Template part for displaying single post
 */
global $post, $wphb_themeopts; ?>

              <div class="wpr-post-single">
                <div class="wrapper">
                    <div class="flex flex-wrap wpr-snp-outer">
                        <div class="wp-postSingle-left">
                            <h1><?php the_title(); ?></h1>
                            <div class="single-top-text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php if (has_post_thumbnail( get_the_ID() ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                        <div class="singlepost-featured" style="background: url(<?php echo $image[0]; ?>) no-repeat center top/cover;"></div>
                        <?php endif; ?>
                    </div>
                    <div class="single-top-text">
                        <?php the_content(); ?>
                    </div>
                </div>
              </div>
              
