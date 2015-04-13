<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package brandon
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-sm-4 sidebar" role="complementary">
	<div class="sidebar-padder">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div><!-- #secondary -->
