<?php 
$post_id = get_the_ID();
?>
<div class="blog-post-item">
    <?php if (has_post_thumbnail( get_the_ID() ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
      <a href="<?php the_permalink(); ?>" class="blog-post-img" style="background: url(<?php echo $image[0]; ?>) no-repeat center top/cover;"></a>
    <?php endif; ?>
    <div class="flex flex-wrap bpost-top">
      <?php $category_detail = get_the_category(get_the_ID()); ?>
        <?php if(isset($category_detail[0]->name) && $category_detail[0]->name !=""):  ?>
        <ul class="bpost-category">
            <li><a href="<?php echo $category_detail[0]->name; ?>"><?php echo $category_detail[0]->name; ?></a></li>
        </ul>
        <?php endif; ?>
        <div class="bpost-date">
         <?php echo get_the_date('d/m/Y'); ?>
        </div>
    </div>
    <div class="bpost-content">
         <h6><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h6>
        <div class="bpost-body">
             <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
        </div>
        <div class="bpost-btn">
            <a href="<?php the_permalink(); ?>">Read more 
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12" fill="none">
                  <g clip-path="url(#clip0_1_2066)">
                      <path d="M17.0476 5.50736C16.4524 5.01497 15.8573 4.52766 15.2671 4.03528C13.9981 2.98959 12.7292 1.94391 11.4602 0.89822C11.17 0.659641 11.1012 0.431215 11.2536 0.223093C11.4307 -0.0205618 11.8389 -0.0814755 12.0898 0.116494C12.375 0.334768 12.6505 0.573347 12.9259 0.801773C14.8785 2.41599 16.8312 4.02512 18.7838 5.63934C19.074 5.87792 19.074 6.13172 18.7838 6.3703C16.5852 8.18756 14.3867 9.99974 12.1931 11.817C11.9914 11.9845 11.7701 12.0404 11.5242 11.9642C11.3569 11.9134 11.229 11.8119 11.1897 11.6241C11.1503 11.4363 11.229 11.2992 11.3717 11.1825C12.921 9.9033 14.4703 8.62411 16.0245 7.34492C16.3688 7.06066 16.7131 6.77639 17.0918 6.46167H16.8656C11.475 6.46167 6.08434 6.46167 0.68879 6.46167C0.546154 6.46167 0.403519 6.44137 0.270721 6.39568C0.103493 6.33477 0.00512392 6.20279 0.000205466 6.01497C-0.00471299 5.83731 0.0789008 5.70533 0.226455 5.62918C0.314987 5.5835 0.413356 5.56319 0.511725 5.54289C0.580583 5.52766 0.649442 5.54289 0.7183 5.54289C6.09417 5.54289 11.47 5.54289 16.8459 5.54289H17.0328L17.0427 5.50736H17.0476Z" fill="#2E4741"/>
                  </g>
                  <defs>
                      <clipPath id="clip0_1_2066">
                          <rect width="19" height="12" fill="white"/>
                      </clipPath>
                  </defs>
              </svg>
              </a>
        </div>
    </div>
</div>