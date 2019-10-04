<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           index.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
get_header(); ?>

<div class="wrap">
	<?php if (get_theme_mod( 'socialmag_featured_section_choices', 'featured-slider' ) == 'featured-slider'): ?>
	<?php get_template_part('parts/content-featured', 'slider'); ?>
	<?php elseif( is_front_page() && has_header_image() && !is_paged() && get_theme_mod( 'socialmag_featured_section_choices', 'featured-slider' ) == 'featured-static'  || is_front_page() && has_header_video() && !is_paged() && get_theme_mod( 'socialmag_featured_section_choices', 'featured-slider' ) == 'featured-static' ): ?>
	<div class="<?php if (get_theme_mod( 'socialmag_full_width_check', 1 ) != 0 ): ?>full-width<?php endif; ?> featured-image-wrap">
		<div class="featured-image">
			<?php the_custom_header_markup(); ?>
			
			<?php get_template_part( 'parts/content', 'intro'); ?>
		</div><!-- featured-image -->
	</div><!-- featured-image-wrap -->
	<?php endif; ?>
	
	<div class="container">
		<div class="col-md-8">
			
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
			
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part('parts/content', get_post_format()); ?>
			     
			<?php endwhile; ?>
							
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
		
		</div><!-- /col-md-8 -->
	<?php get_sidebar(); ?>
	</div><!-- /container -->
</div><!-- /wrap -->
<?php get_footer(); ?>