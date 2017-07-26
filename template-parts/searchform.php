<!-- search -->
<form  class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Search', 'wpblank2017_s' ); ?>" value="<?php _e( 'Search', 'wpblank2017_s' ); ?>" onFocus="if(this.value=='<?php _e( 'Search', 'wpblank2017_s' ); ?>')this.value=''" onBlur="if(this.value=='')this.value='<?php _e( 'Search', 'wpblank2017_s' ); ?>'">
    <button class="search-submit" type="submit" role="button"><?php _e( 'Ok', 'wpblank2017_s' ); ?></button>
</form>
<!-- /search -->
