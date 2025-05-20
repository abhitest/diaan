<?php
$show_this_block = get_sub_field('show_this_block');
$image = get_sub_field('image');
$title = get_sub_field('title');
$images = get_sub_field('images');
$bottom_image = get_sub_field('bottom_image');
?>


<!-- Glazing Product Section -->
 <?php if($show_this_block == "Yes"){ ?>
    <div class="product-sec fullwidth glazing-sec ">
        <div class="wrapper">
            <div class="product-inn">
                <div class="product-heading fl fac">
                    <?php if ($image != "") { ?>
                        <img src="<?php echo $image; ?>">
                    <?php } ?>
                    <h2><?php echo $title; ?></h2>
                </div>
                <div class="product-row">
                    <div class="product-col fl">
                        <div class="product-lf fl">
                            <div class="product-lfimg">
                                <div class="product-tpimg fl">
                                    <?php foreach ($images as $x => $y) { ?>
                                        <?php if ( $x < 2): ?>
                                            <div class="product-img bgimg" style="background-image: url('<?php echo $y['image'] ?>');"></div>
                                        <?php else: ?>
                                            <?php break; // stop the loop after 2 images 
                                            ?>
                                        <?php endif; ?>
                                    <?php } ?>
                                </div>
                                <?php foreach($images as $x => $y): ?>
                                    <?php if($x == 2): ?>
                                        <div class="product-bmimg bgimg" style="background-image: url('<?php echo $y['image'] ?>');">
                                        </div>
                                        <?php break; // stop the loop once the 3rd image is shown ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <?php foreach($images as $x => $y): ?>
                                    <?php if($x == 3): ?>
                                        <div class="product-rghtimg bgimg" style="background-image: url('<?php echo $y['image'] ?>');">
                                        </div>
                                        <?php break; // stop the loop once the 3rd image is shown ?>
                                    <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="product-rght">
                            <div class="product-content text-white fnt-jost">
                                <?php if($bottom_image != ""){ ?>
                                    <div class="product-view">
                                        <img src="<?php echo $bottom_image; ?>">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>