<?php
$show_this_block = get_sub_field('show_this_block');
$bg_image = get_sub_field('image');
$video_poster = get_sub_field('video_poster');
$video = get_sub_field('video');
$title = get_sub_field('title');
$header = get_sub_field('header');
$content = get_sub_field('content');
$discover_button = get_sub_field('discover_button');
?>

<!-- About Section -->
<?php if ($show_this_block == "Yes") { ?>
    <div class="about-sec fullwidth" style="background-color: #102039;">
	<div class="wrapper">
		<div class="about-inn fl">
			<div class="about-lf fl">
				<span class="shape"></span>
				<div class="about-img">
					<img src="<?php echo $bg_image; ?>">
				</div>
				<div class="about-vdo bg-img" style="background-image: url('<?php echo $video_poster; ?>');">
					<span class="play-icon"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>play-icon.svg"></span>
					<!-- <video loop mute poster="./images/vdoposter.png">
						<source src="./images/mov_bbb.mp4" type="video/mp4">
					</video> -->
					<div class="video-popup">
						<div class="vdopopup-inn">
							<span class="close"></span>	
							<video loop mute controls>
								<source src="<?php echo $video; ?>" type="video/mp4">
							</video>
						</div>
					</div>
				</div>
			</div>
			<div class="about-rght">
				<div class="sectag"><?php echo $title; ?></div>
				<h2><?php echo $header; ?></h2>
				<div class="about-txt list-icon">
                    <?php echo $content; ?>
				</div>
                <?php if ($discover_button != "") { ?>
                    <div class="button secbtn fl secondary-btn">
                        <a href="<?php echo $discover_button['url']; ?>"><?php echo $discover_button['title']; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"><path d="M22.2241 14.355L16.6759 8.08312C16.3084 7.71562 15.7103 7.71562 15.3428 8.08312C14.9753 8.45062 14.9753 9.04875 15.3428 9.41625L20.3116 15.0337L15.3428 20.6512C14.9753 21.0187 14.9753 21.6169 15.3428 21.9844C15.7103 22.3519 16.3084 22.3519 16.6759 21.9844L22.2241 15.7125C22.4116 15.525 22.5016 15.2794 22.4978 15.0337C22.4997 14.7881 22.4116 14.5425 22.2241 14.355ZM8.61719 21.9862C8.98469 22.3537 9.58281 22.3537 9.95031 21.9862L15.4984 15.7144C15.6859 15.5269 15.7759 15.2812 15.7722 15.0356C15.7759 14.79 15.6859 14.5425 15.4984 14.3569L9.95219 8.08312C9.58469 7.71562 8.98656 7.71562 8.61906 8.08312C8.25156 8.45062 8.25156 9.04875 8.61906 9.41625L13.5878 15.0337L8.61906 20.6512C8.24969 21.0206 8.24969 21.6187 8.61719 21.9862Z" fill="white"/></svg>
                        </a>
                    </div>
                <?php } ?>
			</div>
		</div>
	</div>
	<div class="shape-img">
		<span class="top-shape"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>shape.png"></span>
		<span class="botton-shape"><img src="<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>bottom-shape.png"></span>
	</div>
</div>
<?php } ?>