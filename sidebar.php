<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           sidebar.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>

<aside class="sidebar sidebar-right <?php if ( is_single() && get_theme_mod('socialmag_left_sidebar_single_check', 0) == 1 || is_page() && get_theme_mod('socialmag_left_sidebar_page_check', 0) == 1 || is_front_page() && get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 ): ?> col-md-3 <?php else : ?>col-md-4<?php endif; ?>">
	
	<!-- ad display section top right square or skyscraper -->
	<?php if ( is_active_sidebar( 'top-sidebar-ad' ) ) : ?>
	<div class="content-ad">
	<?php dynamic_sidebar( 'top-sidebar-ad' ); ?>
	</div><!-- content-ad -->
	<?php endif; ?>
	
	<?php if( is_page() || is_single() ): ?> 
		<?php if( get_theme_mod( 'socialmag_author_image_upload_setting') != ''): ?>
		<div class="personal-feature">
			<img class="author-sidebar-image" src="<?php echo esc_url( get_theme_mod( 'socialmag_author_image_upload_setting') ); ?>" alt="<?php echo esc_attr( get_theme_mod('socialmag_author_image_upload_alt_setting') ); ?>" />
		</div><!-- personal-feature -->
		<?php endif; ?>
	<?php endif; ?>
	
	<?php if ( get_theme_mod('social_icons_sidebar_display', 0) == 1 && get_theme_mod('socialmag_icons_position', 'right') == 'right' ): ?>
	<?php get_template_part( 'parts/content', 'icons' ); ?>
	<?php endif; ?>
		
	<div id="primary-sidebar" class="primary-sidebar widget-area">
		<?php if ( is_active_sidebar( 'socialmag-sitewide-right-sidebar') ): ?>
		<?php dynamic_sidebar( 'socialmag-sitewide-right-sidebar' ); ?>
		<?php elseif ( is_front_page() && is_active_sidebar( 'socialmag-right-home-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'socialmag-right-home-sidebar' ); ?>
		<?php elseif ( is_active_sidebar( 'default-right-sidebar' ) ): ?>
		<?php dynamic_sidebar( 'default-right-sidebar' ); ?>
		<?php endif; ?>
	</div><!-- #primary-sidebar -->
</aside><!-- sidebar -->