<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* template used for aside post format
*
* @file           content-aside.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>

<div <?php post_class('content-wrap grid-post'); ?>>
	
	<div class="spacer">
		<header>
		<?php if ( ! is_single() ): ?>
			<h2 id="post-<?php the_ID(); ?>" <?php $classes = array('align-left','socialmag-article-link',); post_class( $classes ); ?>><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			
		<?php if ( is_single() ): ?>
			<?php get_template_part( 'parts/post', 'meta' ); ?>
		<?php endif; ?>
		
		<?php elseif ( is_single() ): ?>
			<h1 id="post-<?php the_ID(); ?>" <?php $classes = array('align-left','socialmag-article-link',); post_class( $classes ); ?>><?php the_title(); ?></h1>
		<?php endif; ?>
		</header>
			     
		<?php if ( ! is_single() ): ?>
		<?php the_excerpt('...'); ?>
		<?php elseif ( is_single() ): ?>
		<?php the_content(); ?>
		<?php endif; ?>
		
		<?php if ( is_single() && has_tag() ): ?>
			<p class="posted-in">
				<?php the_tags( esc_html__('Tagged with: ', 'socialmag')); ?>		
			</p>
		<?php endif; ?>
	
	</div><!-- spacer -->
	
	<?php if ( is_single() ): ?>
	
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
	
	<!-- display comments and comment form -->
    <?php comments_template(); ?>
    
    <?php endif; ?><!-- is_single -->
</div><!-- content-wrap -->