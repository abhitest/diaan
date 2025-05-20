<?php
$show_this_block = get_sub_field('show_this_block');
$background_color = get_sub_field('background_color');
$title = get_sub_field('title');
$form = get_sub_field('form');
$class = get_sub_field('class');
?>

<!-- Cta Form Section -->
<?php if($show_this_block == "Yes"){ ?>
    <div class="ctafrm-sec fullwidth <?php echo $class; ?>">
        <div class="wrapper">
            <div class="ctafrm-inn fl fac fjsb" style="background-color: <?php echo $background_color; ?>;">
                <div class="ctafrm-lf text-white">
                    <?php echo $title; ?>
                </div>
                <?php if(isset($form[0]) && $form[0] !="" ) { ?>
                    <div class="ctafrm">
                        <?php echo do_shortcode('[contact-form-7 id='.$form[0].' title="Cta Form"]'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if($class != ""){ ?>
            <span class="ctabmshape" style="background-color: #102039;"></span>
        <?php } ?>
    </div>
<?php } ?>