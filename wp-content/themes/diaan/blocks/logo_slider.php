<?php
$show_this_block = get_sub_field('show_this_block');
$titles = get_sub_field('titles');
?>

<!-- Logo Slider -->
 <?php if($show_this_block == "Yes"){ ?>
    <div class="logo-slide-sec fullwidth">
        <div class="logo_slider fnt-jost">
            <?php foreach ($titles as $key=>$single) { ?>
                <div class="logo-col">
                    <span><?php echo $single['title'] ?></span>
                </div>
            <?php } ?> 
        </div>
    </div>
<?php } ?>