<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* default template used for the loop	
*/
?>
<!-- display for blog post thumbnails -->
<div <?php post_class('content-wrap grid-post'); ?>>
					 
	<?php if ( has_post_thumbnail() ): ?>
	<?php if ( ! is_single() ): ?>
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('socialmag-standard'); ?></a>
	<?php else: ?>
		<?php the_post_thumbnail('socialmag-standard'); ?>
	<?php endif; ?>
	<?php endif; ?>
	
	<div class="spacer">
		<header>
			<?php get_template_part( 'parts/post', 'meta' ); ?>
			<?php if( ! is_single() ): ?>
			<h2 id="post-<?php the_ID(); ?>" <?php $classes = array('align-left','socialmag-article-link',); post_class( $classes ); ?>><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php elseif( is_single() ): ?>
			<h1 id="post-<?php the_ID(); ?>" <?php $classes = array('align-left','socialmag-article-link',); post_class( $classes ); ?>><?php the_title(); ?></h1>
			<?php endif; ?>
		</header>
	
	<?php $socialmag_title = get_the_title(); ?>
	<?php if ( ! is_single() ): ?>
	<?php if ($socialmag_title != ''): ?>
	<?php the_excerpt('...'); ?>
	<?php else: ?>
	<a href="<?php the_permalink(); ?>"><?php the_excerpt('...'); ?></a>
	<?php endif; ?>
	<?php elseif ( is_single() ): ?>
	<?php if ($socialmag_title != ''): ?>
	<?php the_content('...'); ?>
	<?php else: ?>
	<a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
	<?php endif; ?>
	
	<!-- for paginated posts -->
	<?php wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'socialmag' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span class="page-numbers">',
		'link_after'  => '</span>',
	) ); ?>

	<?php endif; ?>
	
	<?php if ( is_single() && has_tag() ): ?>
		<p class="posted-in">
			<?php the_tags( esc_html__('Tagged with: ', 'socialmag')); ?>
		</p>
	<?php endif; ?>
	
	</div><!-- spacer -->

	<?php if( is_single() ): ?>
		<!-- post ad section -->
		<?php if ( is_active_sidebar( 'post-banner-ad' ) ) : ?>
			<div class="content-ad">
				<?php dynamic_sidebar( 'post-banner-ad' ); ?>
			</div><!-- content-ad -->
		<?php endif; ?>
		
			<!-- display comments and comment form -->
		<?php comments_template(); ?>
		
	<?php endif; ?><!-- is_single -->
</div><!-- content-wrap -->