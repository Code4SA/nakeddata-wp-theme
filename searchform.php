<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="sr-only">Search for:</span>
		<input type="search" class="search-field form-control" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit btn btn-primary"><i class="fa fa-search"></i> <span class="sr-only screen-reader-text">Search</span></button>
</form>