<?php
$show_this_block = get_sub_field('show_this_block');
$background_image= get_sub_field('background_image');
$title = get_sub_field('title');
?>

<!-- Hero Section - About -->
<?php if($show_this_block == "Yes"){ ?>
    <div class="about-hrsec fullwidth bgimg" style="background-image: url('<?php echo $background_image; ?>');">
        <div class="overlay" style="background-color: rgb(32 34 32 / 40%);"></div>
        <div class="wrapper">
            <div class="about-hrinn fnt-jost">
                <div class="large-txt">
                    <h1><?php echo $title; ?></h1>
                </div>
                <?php custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>
<?php } ?>