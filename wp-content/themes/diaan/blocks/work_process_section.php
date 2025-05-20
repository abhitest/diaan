<?php
$show_this_block = get_sub_field('show_this_block');
$background_color = get_sub_field('background_color');
$title = get_sub_field('title');
$header = get_sub_field('header');
$process = get_sub_field('process');
?>

<!-- Work Process Section -->
<div class="wrkpro-sec fullwidth" style="background-color: <?php echo $background_color ?>">
	<div class="wrapper">
		<div class="wrkpro-inn tc text-white">
			<div class="wrkpro-heading tc">
				<div class="sectag"><?php echo $title ?></div>
				<h2><?php echo $header ?></h2>
			</div>
			<div class="wrkpro-rw fl">
                <?php foreach ($process as $key=>$single){ ?>
                    <div class="wrkpro-col">
                        <div class="wrkpro-icon">
                            <img src="<?php echo $single['icon'] ?>">
                        </div>
                        <div class="wrkpro-content">
                            <h3><?php echo $single['title'] ?></h3>
                            <div class="wrkpro-txt"><?php echo $single['text'] ?></div>
                        </div>				
                    </div>
                <?php } ?>
			</div>
		</div>
	</div>
</div>