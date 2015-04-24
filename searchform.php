<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo __( 'Search for:', 'bpl' ) ?></span>
	</label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr__( 'Search …', 'bpl' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr__( 'Looking for something?', 'bpl' ) ?>" />
	
	<input type="submit" class="search-submit" value="<?php echo esc_attr__( 'Search', 'bpl' ) ?>" />
</form>
