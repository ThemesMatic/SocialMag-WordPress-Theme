<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* Display for category pages
*
* @file           category.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
get_header(); ?>
  
<div class="wrap">
	<div class="container">
		<div class="row">
			<div class="main-content col-md-8">
			
			<?php if ( get_theme_mod('socialmag_category_grid', 1 ) != 0 ): ?>
			
			<h1><?php the_archive_title(); ?> <?php esc_html_e('Category', 'socialmag' ); ?></h1>
			
				<div class="grid-wrap fade">
					<div id="grid" data-columns>
		
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						
					<?php get_template_part('parts/content', get_post_format()); ?>
					     
					<?php endwhile; ?>
					
					<?php wp_reset_postdata(); ?>
									
					<?php endif; ?>
					
					</div><!-- #grid -->
				
				<?php the_posts_pagination( array(
					'mid_size'  => 3,
					'prev_text' => esc_html__( 'Previous', 'socialmag' ),
					'next_text' => esc_html__( 'Next', 'socialmag' ),
				) ); ?>
				
			</div><!-- grid-wrap -->
			
			<?php else: ?>
	
			<h1><?php single_cat_title(); ?> <?php esc_html_e("Category", 'socialmag' ); ?></h1>
	
			<?php if ( have_posts() ) :
			
			while ( have_posts() ) : the_post();
			
			get_template_part('parts/content', get_post_format());
			
			endwhile; ?>
			
				<nav class="article-nav">
					<div class="alignleft"><?php previous_posts_link( esc_html__( '&#8592; Previous Articles', 'socialmag' ) ); ?></div>
					<div class="alignright"><?php next_posts_link( esc_html__( 'Next Articles &#8594;', 'socialmag' ) ); ?></div>
				</nav><!-- article-nav -->
			
			<?php else :
						
			get_template_part( 'parts/content', 'none');
						
			endif; ?>
			
			<?php endif; //end socialmag_category_grid theme mod check ?>
			</div><!-- main-content -->
			<?php get_sidebar(); ?>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- wrap -->
<?php get_footer(); ?>