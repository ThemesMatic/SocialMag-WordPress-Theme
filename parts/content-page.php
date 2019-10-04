<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* template used for all page content	
*
* @file           content-page.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>
<?php if ( !is_front_page() ): ?>
	<h1 id="post-<?php the_ID(); ?>" <?php post_class(); ?> title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h1>
<?php endif; ?>
	
<div class="content-wrap single-page">

	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('socialmag-standard'); } ?>
		
		<div class="spacer">
		<?php get_template_part( 'parts/post', 'meta'); ?>
		
		<?php the_content(); ?>
		
		<!-- for paginated pages -->
		<?php wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'socialmag' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span class="page-numbers">',
			'link_after'  => '</span>',
		) ); ?>
		
		</div><!-- spacer -->
		
		<!-- post banner ad section -->
		<?php if ( is_active_sidebar( 'page-banner-ad' ) ) : ?>
			<div class="content-ad">
				<?php dynamic_sidebar( 'page-banner-ad' ); ?>
			</div><!-- content-ad -->
		<?php endif; ?>
				 			 
		<?php wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'socialmag' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'socialmag' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) ); ?>
	
	<?php if ( is_attachment() ): ?>
		<div class="alignleft galleryimg"><?php previous_image_link( false, esc_html_e('&#60; Previous Image', 'socialmag') ); ?></div>
		<div class="alignright galleryimg"><?php next_image_link( false, esc_html_e('Next Image &#62;', 'socialmag') ); ?></div>
	<?php endif; ?>
	
    <?php comments_template(); ?>
</div><!-- /content-wrap -->