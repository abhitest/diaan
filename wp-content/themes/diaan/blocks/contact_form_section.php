<?php
$show_this_block = get_sub_field('show_this_block');
$header = get_sub_field('header');
$text = get_sub_field('text');
$contact_form = get_sub_field('contact_form');

?>

<!-- Contact Form Section -->
<?php if($show_this_block == "Yes"){ ?>
    <div class="contfrm-sec fullwidth">
	<div class="wrapper">
		<div class="contfrm-inn fl fjsb">
			<div class="contfrm-lf">
				<h2><?php echo $header; ?></h2>
				<div class="contfrm-txt">
                <?php echo $text; ?>
				</div>
			</div>
            <?php if(isset($contact_form) && $contact_form !="" ) { ?>
                <div class="contfrm-rght">
                    <div class="blog-frm">
                        <?php echo do_shortcode('[contact-form-7 id='.$contact_form.' title="Contact Form"]'); ?>
                    </div>
                </div>
            <?php } ?>
		</div>
	</div>
</div>
<?php } ?>