<?php
/**
 * The header for our theme
 */
global $wpsite_themeopts;$post ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title(); ?></title>
	
	<!-- Slick CSS -->
  	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

  	<!-- Optional Slick theme -->
  	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  	<!-- jQuery -->
  	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  	<!-- Slick JS -->
  	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	
	<?php wp_head(); ?>
</head>
<body class="home-page">

<!-- Header -->
<div class="header fullwidth">
	<div class="header-top fullwidth">
		<div class="wrapper">
			<div class="header-tpinn fl fac fjsb">
				<div class="headtp-lf text-white">
					<div class="head-location ">
						<img src="<?php echo site_url() ?>/wp-content/themes/diaan/assets/images/location.svg">
						<?php echo $wpsite_themeopts['help_text']; ?>
					</div>
				</div>
				<div class="social-icon">
				<ul class="fl fac">
					<?php if($wpsite_themeopts['socials'] != ""){$socials = $wpsite_themeopts['socials']; ?>
						<?php foreach($socials as $key=>$single){ ?>
						<li>
							<a href="<?php echo $single['link'] ?>"><?php echo $single['icon'] ?></a>
						</li>
					<?php };} ?>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header-main fullwidth">
		<div class="wrapper">
			<div class="header-inner fl fac">
				<?php if ($wpsite_themeopts['header_logo'] != "") { ?>
					<div class="header-logo">
						<a href="<?php echo site_url(); ?>"><img src="<?php echo $wpsite_themeopts['header_logo']; ?>"></a>
					</div>
				<?php } ?>
				<div class="header-rght fl fac">
					<div class="header-menu">
						<?php wp_nav_menu(); ?>
					</div>
					<div class="header-buttons fl fac">
						<div class="header-search">
							<img src="<?php echo site_url() ?>/wp-content/themes/diaan/assets/images/search.svg">
						</div>
						<?php if($wpsite_themeopts['quote_button'] != ""){$quote_button = $wpsite_themeopts['quote_button']; ?>
							<div class="head-btn">
								<a href="<?php echo $quote_button['url'] ?>">
									<span><?php echo $quote_button['title'] ?></span>
									<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M14.5155 7.60944L10.0155 3.10944C9.86925 2.96319 9.6315 2.96319 9.48525 3.10944C9.339 3.25569 9.339 3.49344 9.48525 3.63969L13.3447 7.49919H1.125C0.918 7.49919 0.75 7.66719 0.75 7.87419C0.75 8.08119 0.918 8.24919 1.125 8.24919H13.3447L9.48525 12.1087C9.339 12.2549 9.339 12.4927 9.48525 12.6389C9.55875 12.7124 9.65475 12.7484 9.75075 12.7484C9.84675 12.7484 9.94275 12.7117 10.0162 12.6389L14.5162 8.13894C14.6625 7.99269 14.6625 7.75494 14.5162 7.60869L14.5155 7.60944Z" fill="white"/></svg>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>