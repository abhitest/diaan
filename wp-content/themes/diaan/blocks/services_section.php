<?php
$show_this_block = get_sub_field('show_this_block');
$header = get_sub_field('header');
$title = get_sub_field('title');
$services = get_sub_field('services');

?>

<!-- Services Section -->
<?php if($show_this_block == "Yes"){ ?>
    <div class="service-sec fullwidth">
	<div class="wrapper">
		<div class="secheading tc">
			<div class="sectag"><?php echo $title; ?></div>
			<h2><?php echo $header; ?></h2>
		</div>

		<div class="service-inn">
			<?php foreach ($services as $key=>$single) { ?>
                <div class="service-col">
                    <div class="service-img bgimg fl" style="background-image: url('<?php echo $single['image'] ?>');">
                        <div class="service-content fl fac text-white">
                            <div class="service-icon">
                                <img src="<?php echo $single['icon'] ?>">
                            </div>
                            <h3><?php echo $single['name'] ?></h3>
                        </div>
                    </div>
                </div>	
			<?php } ?>
		</div>
	</div>
	<div class="shape-img">
		<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>shape1.png" class="rght-img">
		<img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>shape1.png" class="left-img">
	</div>
</div>
<?php } ?>