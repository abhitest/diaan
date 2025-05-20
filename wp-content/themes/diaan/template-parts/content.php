<?php
/**
 * Template Name: Blog page
 */
get_header(); 

$post_categories = get_categories();
?>
<!--Main Banner-->
<div class="banner-wapper">
</div>
<!--End Main Banner-->

<!--Main Contain-->
<div id="main" class="site-main">
</div>
<section class="blog-listing">
</section>
<div class="wrapper">
</div>
<div class="text-center">
                      <h1>Blogs</h1>
                      </div>
                      <?php if ($post_categories) { ?>
        <div class="blog-category">
                    <ul>
                        <?php 
                        $active = (!is_category()) ? 'active' : '';
                        echo '<li><a href="'.esc_url( site_url('/blogs')).'" class="' . $active . '">All Categories</a></li>';
                        foreach ($post_categories as $category) {
                            $active_class = (is_category($category->term_id)) ? 'active' : '';
                            echo '<li><a href="'.get_category_link($category->term_id).'" class="' . $active_class . '">' . $category->name . '</a></li>';
                        }
                        ?>
                    </ul>
        </div>
        <?php } ?>
        <?php 
            // Get the current post ID
            $current_post_id = get_the_ID();

            // Get the categories for the current post
            $post_categories = wp_get_post_categories($current_post_id);
            $exclude_posts = array($current_post_id);
            $postArgs = array(
                'post_type'      => 'post',
                'order'          => 'ASC',
                'orderby'        => 'ID',
                'posts_per_page' => -1,
            ); 
            $postdata = new WP_QUery( $postArgs );
        ?>
        <?php if( $postdata->have_posts() ): ?>
        <div class="blog-listing-posts flex flex-wrap">
                    <?php while( $postdata->have_posts() ): $postdata->the_post(); ?>
                        <?php 
                        get_template_part( 'template-parts/post/content', 'loop' );
                        ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
        </div>
         <?php endif; ?>
    </div>
</section>
<!--End Main Contain-->
<!--End Main Contain-->
<?php get_footer();