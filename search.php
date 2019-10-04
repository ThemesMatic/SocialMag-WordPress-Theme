<?php
	defined('ABSPATH') or die("please don't run scripts");
/*
* @file           search.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
get_header(); ?>

<div class="wrap">
	<div class="container">
		<div class="row">
			<section class="col-md-8">
				
				<h1><?php echo esc_html('Search Results for ', 'socialmag' ); ?> <?php echo the_search_query(); ?></h1>
	
		    	<?php if ( have_posts()) :
			    	
	        	while ( have_posts() ) : the_post(); ?>
				
					<div class="search-results">
			
					<?php get_template_part('parts/content', get_post_format()); ?>
			
					</div><!-- /search-results -->
				
				<?php endwhile;
				
				else :
				
				get_template_part( 'parts/content', 'none' );
				
	            endif; ?>
			
			</section><!-- col-md-8 -->
		<?php get_sidebar(); ?>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- wrap -->
<?php get_footer(); ?>