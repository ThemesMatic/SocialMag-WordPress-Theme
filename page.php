<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           page.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
get_header(); ?>
  
<div class="wrap">
	<div class="container <?php if ( get_theme_mod('socialmag_left_sidebar_page_check', 0) == 1 ):?>double-sidebar left-only<?php endif; ?>">
		
		<article <?php if ( !is_page(array('cart', 'checkout')) ):
			if ( is_active_sidebar( 'socialmag-sitewide-right-sidebar') && get_theme_mod('socialmag_left_sidebar_page_check', 0) == 1 || is_active_sidebar( 'socialmag-right-page-sidebar' ) && get_theme_mod('socialmag_left_sidebar_page_check', 0) == 1 ): ?> class="main-content col-md-6" <?php else: ?> class="main-content col-md-8"<?php endif; ?><?php else: ?>class="main-content col-md-12"<?php endif; ?>>
			
			<?php if ( have_posts() ) :
			
				while ( have_posts() ) : the_post(); 
				
				get_template_part( 'parts/content', 'page');
				
				endwhile;
					
				else :
			
				get_template_part( 'parts/content', 'none');
			
				endif; ?>
				
		</article><!-- article -->
		
			<?php if ( !is_page(array('cart', 'checkout')) ): ?>
			<?php if ( get_theme_mod('socialmag_left_sidebar_page_check', 0) == 1 ): ?>
			
			<aside class="<?php if ( is_active_sidebar( 'socialmag-sitewide-right-sidebar') || is_active_sidebar( 'socialmag-right-page-sidebar' ) ): ?>col-md-3<?php else: ?>col-md-4<?php endif; ?> sidebar sidebar-left">
				
			<!-- ad display section top left square or skyscraper -->
			<?php if ( is_active_sidebar( 'top-left-sidebar-ad' ) ) : ?>
			<div class="content-ad">
			<?php dynamic_sidebar( 'top-left-sidebar-ad' ); ?>
			</div><!-- content-ad -->
			<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'socialmag-sitewide-left-sidebar') ): ?>
				<?php if ( get_theme_mod('social_icons_sidebar_display', 0) == 1 && get_theme_mod('socialmag_icons_position', 'right') == 'left' ): ?>
				<?php get_template_part( 'parts/content', 'icons' ); ?>
				<?php endif; ?>
				<?php dynamic_sidebar( 'socialmag-sitewide-left-sidebar' ); ?>
			</aside>
			<?php elseif ( get_theme_mod('socialmag_left_sidebar_page_check', 0) == 1 ) : ?>
				<?php if ( get_theme_mod('social_icons_sidebar_display', 0) == 1 && get_theme_mod('socialmag_icons_position', 'right') == 'left' ): ?>
				<?php get_template_part( 'parts/content', 'icons' ); ?>
				<?php endif; ?>
				<?php if ( is_active_sidebar('socialmag-left-page-sidebar') ): ?>
				<?php dynamic_sidebar( 'socialmag-left-page-sidebar' ); ?>
				<?php else: ?>
				<?php dynamic_sidebar( 'default-left-sidebar' ); ?>
			<?php endif; ?>
			</aside>
		<?php endif; ?>
		<?php endif; ?>
			
		<?php if ( is_active_sidebar( 'socialmag-sitewide-right-sidebar') || is_active_sidebar( 'socialmag-right-page-sidebar' ) ): ?>
		
			<aside class="<?php if ( is_active_sidebar( 'socialmag-sitewide-right-sidebar') && get_theme_mod('socialmag_left_sidebar_page_check', 0) == 1 || is_active_sidebar( 'socialmag-right-page-sidebar' ) && get_theme_mod('socialmag_left_sidebar_page_check', 0) == 1 ): ?>col-md-3 <?php else: ?>col-md-4<?php endif; ?> sidebar sidebar-right">
				<?php if ( get_theme_mod('social_icons_sidebar_display', 0) == 1 && get_theme_mod('socialmag_icons_position', 'right') == 'right' ): ?>
				<?php get_template_part( 'parts/content', 'icons' ); ?>
				<?php endif; ?>
				
				<?php if ( is_active_sidebar( 'socialmag-sitewide-right-sidebar') ): ?>
				<?php dynamic_sidebar( 'socialmag-sitewide-right-sidebar' ); ?>
				<?php elseif ( is_active_sidebar( 'socialmag-right-page-sidebar' ) ): ?>
				<?php dynamic_sidebar( 'socialmag-right-page-sidebar' ); ?>
				<?php endif; ?>
			</aside>
			<?php elseif (get_theme_mod('socialmag_left_sidebar_page_check', 0) != 1): ?>
			<?php get_sidebar(); ?>
			<?php endif; ?>
			<?php endif; ?>
	</div><!-- container -->
</div><!-- wrap -->
<?php if ( !is_front_page() ): ?>
<?php get_footer(); ?>
<?php endif; ?>