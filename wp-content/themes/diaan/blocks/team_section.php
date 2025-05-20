<?php
$show_this_block = get_sub_field('show_this_block');
$header = get_sub_field('header');
$title = get_sub_field('title');
$team = get_sub_field('team');
?>

<!-- Team Section -->
<?php if($show_this_block == "Yes"){ ?>
    <div class="teamsec fullwidth">
        <div class="wrapper">
            <div class="team-heading tc">
                <div class="sectag"><?php echo $title; ?></div>
                <h2><?php echo $header; ?></h2>
            </div>
            <div class="team-rw tc fl fjc">
                <?php foreach ($team as $key=>$single) { ?>
                    <div class="team-col">
                        <div class="team-img bgimg" style="background-image: url('<?php echo $single['image']; ?>');"></div>
                        <div class="team-content">
                            <h3><?php echo $single['name']; ?></h3>
                            <div class="team-position"><?php echo $single['position']; ?></div>
                            <div class="founder-social">
                                <ul class="fl fac fjc">
                                    <?php $socials = $single['socials']; ?>
                                    <?php foreach($socials as $social){ ?>
                                        <li>
                                            <a href="<?php echo $social['link'] ?>" target="_blank"><?php echo $social['icon'] ?></a>
                                        </li>
                                    <?php } ?>											  
                                </ul>
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