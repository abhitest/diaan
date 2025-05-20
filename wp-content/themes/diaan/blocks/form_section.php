<?php
$show_this_block = get_sub_field('show_this_block');
$form = get_sub_field('form');
$text = get_sub_field('text');
$header = get_sub_field('header');

?>

<!-- Form Section -->
<?php if ($show_this_block == "Yes") { ?>
    <div class="form-sec fullwidth">
	<div class="wrapper">
		<div class="forminn text-white fnt-montserrat">
			<div class="form-heading">
				<div class="formicon">
					<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>phone-red.svg">
				</div>
				<h2><?php echo $header; ?></h2>
				<div class="formtext">
                <?php echo $text; ?>
				</div>
			</div>
            <?php if(isset($form) && $form !="" ) { ?>
                <div class="request-frm">
                <?php echo do_shortcode('[contact-form-7 id='.$form. ' title="Home Page Form"]'); ?>
                </div>
            <?php } ?>
		</div>
	</div>
	<div class="shape-img">
		<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>shape1.png" class="rght-img">
	</div>
</div>
<?php } ?>