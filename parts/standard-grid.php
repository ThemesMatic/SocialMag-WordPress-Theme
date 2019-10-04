<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* Default display option for front page posts
*
* @file           standard-grid.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>
<div id="front-layout" <?php if ( is_active_sidebar( 'socialmag-sitewide-left-sidebar') && is_active_sidebar( 'socialmag-sitewide-right-sidebar') || is_active_sidebar( 'socialmag-sitewide-right-sidebar') && get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 || is_active_sidebar( 'socialmag-sitewide-left-sidebar') && is_active_sidebar( 'socialmag-right-home-sidebar') || get_theme_mod('socialmag_left_sidebar_home_check', 0) == 1 && is_active_sidebar( 'socialmag-right-home-sidebar') ): ?> class="main-content col-md-6" <?php else: ?> class="main-content col-md-8"<?php endif; ?>>

<?php if (get_theme_mod('socialmag_slider_setting', 1) != 0 & is_front_page() & !is_paged()): ?>
	<!-- get slider template and content -->
	<?php include_once( get_parent_theme_file_path('/parts/content-slider.php') ); ?>
<?php else: ?>
	<?php $ids = ''; ?>
<?php endif; ?>
		
	<!-- ad display section 728px x 90px or custom size -->
	<?php if ( is_active_sidebar( 'featured-home-page-ad' ) ) : ?>
	<div class="content-ad">
	<?php dynamic_sidebar( 'featured-home-page-ad' ); ?>
	</div>
	<?php endif; ?>
			
	<?php if (get_theme_mod( 'socialmag_masonry_post_grid_setting', 0 ) != 1): ?>
		<div class="grid-wrap fade">
			<div id="grid" data-columns>
	<?php else: ?>
			<div class="posts-wrap">
	<?php endif; ?>

	<?php $paged = ( get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	<?php $the_query = new WP_Query( array(
		'post__not_in' => $ids, get_option('sticky_posts'),
		'paged' => $paged
		) ); ?>
	<?php if ($the_query->have_posts()) : ?>
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
	
	<article <?php post_class(); ?>>
	<?php get_template_part('parts/content', get_post_format()); ?>
	</article>
	     
	<?php endwhile; ?>
	
	<?php wp_reset_postdata(); ?>
					
	<?php endif; ?>
	
	<?php if (get_theme_mod( 'socialmag_masonry_post_grid_setting', 0 ) != 1): ?>
	</div><!-- #grid -->
	<?php endif; ?>
	
	<?php the_posts_pagination( array(
		'mid_size'  => 3,
		'prev_text' => esc_html__( 'Previous', 'socialmag' ),
		'next_text' => esc_html__( 'Next', 'socialmag' ),
	) ); ?>
		
	</div><!-- grid-wrap -->
</div><!-- #front-layout / col-md-8 -->