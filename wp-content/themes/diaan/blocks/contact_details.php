<?php
$show_this_block = get_sub_field('show_this_block');
$details = get_sub_field('details');

?>

<!-- Contact Section -->
<?php if($show_this_block == "Yes"){ ?>
    <div class="fullwidth contact-sec">
	<div class="wrapper">
		<div class="contact-inn fl">
            <?php foreach($details as $key=>$single){ ?>
                <div class="contact-col fl">
                    <div class="icon">
                        <img src="<?php echo $single['icon']; ?>">
                    </div>
                    <div class="contact-info">
                    <?php echo $single['content']; ?>
                    </div>
                </div>
            <?php } ?>
		</div>
	</div>
</div>
<?php } ?>