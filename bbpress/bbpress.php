<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* @file           bbpress.php
* @package        Social Magazine
* @author         ThemesMatic
* @copyright      2015 ThemesMatic
*/
get_header(); ?>
  
<div class="wrap">
	<div class="container under-menu">
		<article class="main-content col-md-12">
			
			<h1 id="post-<?php the_ID(); ?>" <?php post_class(); ?> title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h1>
			
			<?php if ( have_posts() ) :
			
				while ( have_posts() ) : the_post(); 
				
				get_template_part( 'parts/content', 'bbpress');
				
				endwhile;
					
				else :
			
				get_template_part( 'parts/content', 'none');
			
				endif; ?>
				
		</article><!-- article -->
	</div><!-- container -->
</div><!-- wrap -->
<?php if ( !is_front_page() ): ?>
<?php get_footer(); ?>
<?php endif; ?>