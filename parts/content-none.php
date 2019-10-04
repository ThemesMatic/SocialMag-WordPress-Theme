<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* Template part for no content results
*/
?>

<?php if ( is_search() ) : ?>

	<h2 class="center"><?php esc_html( 'No Articles Found For:', 'socialmag' ); ?> <?php echo get_search_query(); ?></h2>
	
<?php else: ?>

	<h2><?php echo esc_html('No content found', 'socialmag'); ?></h2>
	
<?php endif; ?>