<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* Display for Author pages
*
* @file           author.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
get_header(); ?>

<div class="wrap">
	<div class="container">
		<div class="main-content col-md-8">

		<h1><?php esc_html_e( 'About', 'socialmag' ); ?> <?php the_author_meta( 'nickname' ); ?></h1>
		
		<div class="author-data">
			<div class="author-avatar">
				<?php echo get_avatar('default'); ?>
			</div>
			<div class="author-info">
				<p>
					<?php the_archive_description(); ?>
				</p>
				<?php if ( the_author_meta( 'user_url' ) != '' ): ?>
			    <p>
					<a href="<?php esc_url( the_author_meta( 'user_url' ) ); ?>"><?php the_author_meta( 'user_url' ); ?></a>
			    </p>
			    <?php endif; ?>
			</div>
		</div><!-- author-data -->
		
		<h2 class="author-list-title"><?php esc_html_e( 'Articles created by', 'socialmag'); ?> <?php the_author_meta( 'nickname' ); ?></h2>
				
		<!-- The Loop -->
		<?php 
		// Check if there are any posts to display
		if ( have_posts() ) : ?>

		<?php
		
		// The Loop
		while ( have_posts() ) : the_post();
		
		get_template_part( 'parts/content');
		
		endwhile; ?>
		
			<nav class="article-nav">
				<div class="alignleft"><?php previous_posts_link( esc_html__( '&#8592; Previous Articles', 'socialmag' ) ); ?></div>
				<div class="alignright"><?php next_posts_link( esc_html__( 'Next Articles &#8594;', 'socialmag' ) ); ?></div>
			</nav><!-- article-nav -->
		
		<?php else :
					
		get_template_part( 'parts/content', 'none');
					
		endif; ?>
		</div><!-- main-content -->
	</div><!-- /container -->
</div><!-- /wrap -->
<?php get_footer(); ?>