<?php
/*
* WordPress Search form
*/
?>
<form method="get" autocomplete="off" class="searchform" action="<?php echo esc_url( trailingslashit( home_url() ) ); ?>">
	<input type="text" placeholder="<?php esc_attr_e('Search...', 'socialmag'); ?>" name="s" onclick="this.value='';" value="<?php the_search_query(); ?>" class="search form-control">
</form>