<?php
global $wpsite_themeopts;
$show_this_block = get_sub_field('show_this_block');

?>

<!-- CTA Section -->
<?php if ($show_this_block == "Yes") { ?>
    <div class="ctasec fullwidth">
	<div class="wrapper">
		<div class="ctainn fl" style="background-color: #E82027;">
			<div class="ctalf-img bgimg" style="background-image: url('<?php echo $wpsite_themeopts['cta_image'] ?>')">
				<div class="icon">
					<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>phone-ringing.svg">
				</div>
			</div>
			<div class="ctalf-content text-white">
				<h3><?php echo $wpsite_themeopts['cta_header'] ?></h3>
                <?php $number = $wpsite_themeopts['number'] ?>
                <?php if($number != ""){ ?>
                    <div class="contact-no fnt-jost">
                        <a href="<?php echo $number['url'] ?>"><?php echo $number['title'] ?></a>
                    </div>
                <?php } ?>
			</div>
		</div>
	</div>	
</div>
<?php } ?>