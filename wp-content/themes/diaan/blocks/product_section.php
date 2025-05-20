<?php
$show_this_block = get_sub_field('show_this_block');
$image = get_sub_field('image');
$title = get_sub_field('title');
$products = get_sub_field('products');

?>

<!-- Product Section -->
<?php if($show_this_block == "Yes"){ ?>
<div class="product-sec fullwidth pt140">
    <div class="wrapper">
        <div class="product-inn">
            <div class="product-heading fl fac">
                <?php if ($image != "") { ?>
                    <img src="<?php echo $image; ?>">
                <?php } ?>
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="product-row">
                <?php foreach ($products as $key => $single) {
                    $images = $single['images']; ?>
                    <div class="product-col fl img-right">
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
                            <div class="step-no"><?php echo $single['number'] ?></div>
                            <div class="product-content text-white fnt-jost">
                                <h3><?php echo $single['title'] ?></h3>
                                <div class="product-txt">
                                    <?php echo $single['details'] ?>
                                </div>
                                <?php if ($single['bottom_image'] != "") { ?>
                                    <div class="product-view">
                                        <img src="<?php echo $single['bottom_image'] ?>">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php } ?>