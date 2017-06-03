<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="search" />
<!-- 	<input type="submit" class="searchsubmit" value="" /> -->
 	<icon type="submit" class="searchsubmit"><span class="fa fa-search"></span></icon>	
</form>