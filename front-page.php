<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* @file           front-page.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
get_header(); ?>

<div class="wrap">
	<?php if ( is_front_page() && has_header_image() && !is_paged() && get_theme_mod( 'socialmag_featured_section_check', 1 ) != 0 || is_front_page() && has_header_video() && !is_paged() && get_theme_mod( 'socialmag_featured_section_check', 1 ) != 0 ): ?>
	<div class="<?php if (get_theme_mod( 'socialmag_full_width_check', 1 ) != 0 ): ?>full-width<?php endif; ?> featured-image-wrap">
		<div class="featured-image">
			<?php the_custom_header_markup(); ?>
			<?php get_template_part( 'parts/content', 'intro'); ?>
		</div><!-- featured-image -->
	</div><!-- featured-image-wrap -->
	<?php endif; ?>
			
	<?php if ('posts' == get_option('show_on_front')): ?>
	<?php get_template_part('parts/content', 'home'); ?>
	<?php else: ?>
	<?php include( get_page_template() ); ?>
	<?php endif; ?>
	
</div><!-- wrap -->

<?php get_footer(); ?>