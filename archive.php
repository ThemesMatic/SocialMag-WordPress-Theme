<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* @file           archive.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
get_header(); ?>
  
<div class="wrap">
	<div class="container">
		<div class="row">
			<div class="main-content col-md-8 archives">
	
				<h1><?php esc_html_e( 'Archives for', 'socialmag' ); ?> <?php the_archive_title(); ?></h1>
	
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
			</div><!-- main-content archives -->
			<?php get_sidebar(); ?>
		</div><!-- row ->
	</div><!-- container -->
</div><!-- wrap -->
<?php get_footer(); ?>