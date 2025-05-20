<?php
$show_this_block = get_sub_field('show_this_block');
$testimonials = get_sub_field('testimonials');
$title = get_sub_field('title');
$header = get_sub_field('header');
$bottom_images = get_sub_field('bottom_images');
?>

<!-- Testimonial Section -->
<?php if($show_this_block == "Yes"){ ?>
    <div class="testimonial-sec fullwidth">
  <div class="testimonial-outer" style="background-color: #102039;">
	<div class="wrapper">
		<div class="testimonial-inn text-white fl fjsb">
			<div class="testimonial-lf">
				<div class="testimonial-heading">
					<div class="sectag"><?php echo $title; ?></div>
					<h2><?php echo $header; ?></h2>
				</div>
				<div class="testimonial_slide">
					<?php foreach($testimonials as $key=>$single){ ?>				
                        <div class="testi_col fl">
                            <div class="quote-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="91" height="91" viewBox="0 0 91 91" fill="none"><path d="M5.68751 54.0313C5.68751 48.6824 6.72064 43.5256 8.75619 38.7071C15.1324 23.3665 24.1247 17.0904 39.7792 17.0625C39.7821 17.0625 39.7821 17.0625 39.7849 17.0625C41.1402 17.0625 42.3065 18.0177 42.5732 19.3452C42.84 20.6755 42.1316 22.0084 40.8792 22.5305C33.3754 25.6575 31.1206 29.3205 28.4793 36.9685L34.125 36.9685C38.8294 36.9685 42.6563 40.7953 42.6563 45.4997L42.6563 65.4063C42.6563 70.1107 38.8294 73.9375 34.125 73.9375L14.3604 73.9375C13.3941 73.9375 12.4915 73.4458 11.9693 72.6322C8.17579 66.7366 5.68751 62.2571 5.68751 54.0313ZM57.0166 73.9375L76.7813 73.9375C81.4857 73.9375 85.3125 70.1107 85.3125 65.4062L85.3125 45.5C85.3125 40.7956 81.4857 36.9687 76.7812 36.9687L71.1353 36.9687C73.7763 29.3205 76.0313 25.6577 83.5352 22.5307C84.7875 22.0086 85.4959 20.6758 85.2292 19.3455C84.9627 18.0177 83.7962 17.0625 82.4409 17.0625L82.4352 17.0625C66.7806 17.0904 57.7884 23.3665 51.4122 38.7071C49.3769 43.5256 48.3438 48.6824 48.3438 54.0313C48.3438 62.2571 50.832 66.7366 54.6256 72.6322C55.1477 73.4458 56.0503 73.9375 57.0166 73.9375Z" fill="#E82027"/></svg>
                            </div>
                        <div class="testi_inn">
                            <div class="testi-content"> 
                                <?php echo $single['text']; ?>
                            </div>
                                <div class="testi_info fl fac">
                                    <div class="testi-img"><span class="bgimg" style="background-image: url('<?php echo $single['image']; ?>');"></span></div>
                                    <div class="testi-details fnt-jost">
                                        <h3><?php echo $single['name']; ?></h3>
                                        <span><?php echo $single['service']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
				</div>
			</div>
			<div class="testimonial-rght fl">
				<div class="testimonial-images">
					<img src="<?php echo $bottom_images['image_one'] ?>">
				</div>
				<div class="testimonial-images">
					<img src="<?php echo $bottom_images['image_two'] ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="shape-img">
		<span class="top-shape"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>shape.png"></span>
		<span class="botton-shape"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>shape.png"></span>
	</div>
  </div>
</div>
<?php } ?>