<?php
/**
 * The sidebar containing the main widget area
 */
if( ! is_active_sidebar('wphb-sidebar-1') ) {
	return;
} ?>
<aside class="col-12 col-lg-3 col-md-4 sidebar">
	<?php dynamic_sidebar( 'wphb-sidebar-1' ); ?>
</aside><!-- #secondary -->