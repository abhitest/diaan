<?php
$show_this_block = get_sub_field('show_this_block');
$image = get_sub_field('image');
$title = get_sub_field('title');
$header = get_sub_field('header');
$details = get_sub_field('details');

?>

<!-- Every Time Section -->
<?php if ($show_this_block == "Yes") { ?>
    <div class="evrytime-sec fullwidth bgimg" style="background-image: url('<?php echo WPSITE_THEME_URL . '/assets/images/'; ?>work-process-shape.png');">
	<div class="wrapper">
		<div class="evrytime-inn fl fed">
			<div class="evrytime-lf">
				<div class="evrytime-heading">
					<div class="sectag"><?php echo $title; ?></div>
					<h2><?php echo $header; ?></h2>
				</div>
                <?php if($image != ""){ ?>
                    <div class="evrytime-img">
                        <img src="<?php echo $image; ?>">
                    </div>
                <?php } ?>
			</div>
			<div class="evrytime-rght">
				<div class="evrytime-rw fl">
					<?php foreach ($details as $key=>$single){ ?>
                        <div class="evrytime-col">
                            <h3><?php echo $single['title']; ?></h3>
                            <div class="evrytime-txt">
                            <?php echo $single['content']; ?>
                            </div>
                            <?php $read_more = $single['read_more_button']; ?>
                            <?php if($read_more != ""){ ?>
                                <div class="btn-link secbtn">
                                    <a href="<?php echo $read_more['url']; ?>"><?php echo $read_more['title']; ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none"><path d="M14.8154 10.07L11.1166 5.88871C10.8716 5.64371 10.4729 5.64371 10.2279 5.88871C9.98289 6.13371 9.98289 6.53246 10.2279 6.77746L13.5404 10.5225L10.2279 14.2675C9.98289 14.5125 9.98289 14.9112 10.2279 15.1562C10.4729 15.4012 10.8716 15.4012 11.1166 15.1562L14.8154 10.975C14.9404 10.85 15.0004 10.6862 14.9979 10.5225C14.9991 10.3587 14.9404 10.195 14.8154 10.07ZM5.74414 15.1575C5.98914 15.4025 6.38789 15.4025 6.63289 15.1575L10.3316 10.9762C10.4566 10.8512 10.5166 10.6875 10.5141 10.5237C10.5166 10.36 10.4566 10.195 10.3316 10.0712L6.63414 5.88871C6.38914 5.64371 5.99039 5.64371 5.74539 5.88871C5.50039 6.13371 5.50039 6.53246 5.74539 6.77746L9.05789 10.5225L5.74539 14.2675C5.49914 14.5137 5.49914 14.9125 5.74414 15.1575Z" fill="#202220"/></svg>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>