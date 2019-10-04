<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           content-home.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>
<div class="container <?php if ( get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 || is_active_sidebar( 'socialmag-sitewide-left-sidebar') || is_active_sidebar( 'socialmag-sitewide-left-sidebar') && is_active_sidebar( 'socialmag-sitewide-right-sidebar') || is_active_sidebar( 'socialmag-sitewide-right-sidebar') && get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 || is_active_sidebar( 'socialmag-sitewide-left-sidebar') && is_active_sidebar( 'socialmag-right-home-sidebar') || get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 && is_active_sidebar( 'socialmag-right-home-sidebar') ): echo esc_attr('double-sidebar'); endif; ?>">

	<?php get_template_part('parts/standard', 'grid'); ?>

		<?php if ( is_active_sidebar( 'socialmag-sitewide-left-sidebar') && get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 ): ?>
		<aside class="<?php if ( is_active_sidebar( 'socialmag-sitewide-right-sidebar') && get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 || is_active_sidebar( 'socialmag-right-home-sidebar' ) && get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 ): ?>col-md-3 <?php else: ?>col-md-4<?php endif; ?> 
			 sidebar sidebar-left">
			<?php if ( get_theme_mod('socialmag_icons_position') == 'left' ): ?>
			<?php get_template_part( 'parts/content', 'icons' ); ?>
			<?php endif; ?>
			
			<!-- ad display section top left square or skyscraper -->
			<?php if ( is_active_sidebar( 'top-left-sidebar-ad' ) ) : ?>
			<div class="content-ad">
			<?php dynamic_sidebar( 'top-left-sidebar-ad' ); ?>
			</div><!-- content-ad -->
			
			<?php endif; ?>
			<?php dynamic_sidebar( 'socialmag-sitewide-left-sidebar' ); ?>
		</aside>
		<?php elseif ( get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 ) : ?>
		<aside class="<?php if ( is_active_sidebar( 'socialmag-sitewide-right-sidebar' ) && get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 || is_active_sidebar( 'socialmag-right-home-sidebar' ) && get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 ): ?>col-md-3 <?php else: ?>col-md-4<?php endif; ?> 
			 sidebar sidebar-left">
			<?php if ( get_theme_mod('socialmag_icons_position') == 'left' ): ?>
			<?php get_template_part( 'parts/content', 'icons' ); ?>
			<?php endif; ?>
			
			<!-- ad display section top left square or skyscraper -->
			<?php if ( is_active_sidebar( 'top-left-sidebar-ad' ) ) : ?>
			<div class="content-ad">
			<?php dynamic_sidebar( 'top-left-sidebar-ad' ); ?>
			</div><!-- content-ad -->
			<?php endif; ?>
			
			<?php if ( is_active_sidebar( 'socialmag-left-home-sidebar' ) ): ?>
				<?php dynamic_sidebar( 'socialmag-left-home-sidebar' ); ?>
			<?php else: ?>
				<?php dynamic_sidebar( 'default-left-sidebar' ); ?>
			<?php endif; ?>
		</aside>
		<?php endif; ?>
		
		<?php if ( get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 && is_active_sidebar('socialmag-right-home-sidebar') || is_active_sidebar('socialmag-sitewide-right-sidebar') ||  get_theme_mod('socialmag_left_sidebar_home_check', 0) != 1 ): ?>
		<?php get_sidebar(); ?>
		<?php endif; ?>
</div><!-- container -->