<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           tag.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
get_header(); ?>

<div class="wrap">
	<div class="container">
		
		<div class="main-content col-md-8">
			
			<h1><?php echo esc_html( 'Posts Tagged With:', 'socialmag' ); ?> <?php the_archive_title(); ?></h1>

			<?php if ( have_posts() ) :

				while ( have_posts() ) : the_post();

				get_template_part('parts/content', get_post_format());

				endwhile; ?>
				
				<nav class="article-nav">
					<div class="alignleft"><?php previous_posts_link( esc_html__( '&#8592; Previous Articles', 'socialmag' ) ); ?></div>
					<div class="alignright"><?php next_posts_link( esc_html__( 'Next Articles &#8594;', 'socialmag' ) ); ?></div>
				</nav><!-- article-nav -->
			
			<?php else :
				
				get_template_part( 'parts/content', 'none' );

			endif; ?>
		</div><!-- main-content -->			
	</div><!-- /container -->
</div><!-- /wrap -->
<?php get_footer(); ?>