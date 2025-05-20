<?php
$show_this_block = get_sub_field('show_this_block');
$image = get_sub_field('image');
$name = get_sub_field('name');
$position = get_sub_field('position');
$title = get_sub_field('title');
$text = get_sub_field('text');
$content = get_sub_field('content');
$socials = get_sub_field('socials');
?>

<!-- Founder Section -->
<?php if ($show_this_block == "Yes") { ?>
    <div class="founder-sec fullwidth">
	<div class="wrapper">
		<div class="founder-heading tc">
			<div class="sectag"><?php echo $title; ?></div>
			<h2><?php echo $text; ?></h2>
		</div>
		<div class="founder-inn">
			<div class="founder-col fl fac fjsb">
                <?php if($image != ""){ ?>
                    <div class="founder-img tc">
                        <img src="<?php echo $image; ?>">
                    </div>
                <?php } ?>
				<div class="founder-content">
					<h3><?php echo $name; ?></h3>
					<div class="position"><?php echo $position; ?></div>
					<div class="founder-txt"><?php echo $content; ?></div>
					<div class="founder-social">
					  <ul class="fl fac">
                        <?php foreach ($socials as $key=>$single) { ?>
                            <li>
                                <a href="<?php echo $single['link'] ?>" target="_blank"><?php echo $single['icon'] ?></a>
                            </li>
						<?php } ?>
					  </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="shape-img">
		<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>shape1.png" class="rght-img">
	</div>
</div>
<?php } ?>