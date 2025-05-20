<?php
$show_this_block = get_sub_field('show_this_block');
$testimonials = get_sub_field('testimonials');
$title = get_sub_field('title');
$header = get_sub_field('header');
$bottom_images = get_sub_field('bottom_images');
?>

<!-- Counter Section -->
<?php if($show_this_block == "Yes"){ ?>
    <div class="counter-sec fullwidth">
	<div class="wrapper">
		<div class="count-rw fl fnt-jost">
			<div class="count-col fl fac">
				<div class="count-icon">
					<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>printer.svg">
				</div>
				<div class="count-rght">
					<div class="counter"><span class="count">550</span>+</div>
					<div class="count-txt">Successfully Projects</div>
				</div>
			</div>

			<div class="count-col fl fac">
				<div class="count-icon">
					<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>print-mark.svg">
				</div>
				<div class="count-rght">
					<div class="counter"><span class="count">22</span>+</div>
					<div class="count-txt"> Company Staffs</div>
				</div>
			</div>

			<div class="count-col fl fac">
				<div class="count-icon">
					<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>big-mug.svg">
				</div>
				<div class="count-rght">
					<div class="counter"><span class="count">25</span>+</div>
					<div class="count-txt">Architects Collaborations</div>
				</div>
			</div>

			<div class="count-col fl fac">
				<div class="count-icon">
					<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>ink-level.svg">
				</div>
				<div class="count-rght">
					<div class="counter"><span class="count">12</span>+</div>
					<div class="count-txt">Year of Experiance</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php } ?>