<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* Template part for video post display
*
* @file           content-video.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>

<div <?php post_class('content-wrap grid-post'); ?>>
	
	<?php if ( is_single() ): ?>
	<?php if ( has_post_thumbnail() ): ?>
		<?php the_post_thumbnail(); ?>
	<?php endif; ?>
	<?php endif; ?>
					 
	<?php $socialmag_content = apply_filters( 'the_content', get_the_content() );
	$video = false;

	// Only get video from the content if there is no playlist
	if ( false === strpos( $socialmag_content, 'wp-playlist-script' ) ) {
		$video = get_media_embedded_in_content( $socialmag_content, array( 'video', 'object', 'embed', 'iframe' ) );
	} ?>
	
	<?php if ( ! is_single() ): ?>
	<?php if ( get_the_post_thumbnail() !== '' && empty( $video ) ) : ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	<?php elseif( ! empty( $video ) ): ?>
		<!-- Show video if there is no thumbnail and is not blog -->
		<?php foreach ( $video as $video_html ) {
			echo '<div class="post-video">';
				echo $video_html;
			echo '</div>';
		} ?>
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
	<!-- post ad section -->
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

    <?php comments_template(); ?>
    <?php endif; ?><!-- is_single -->
</div><!-- content-wrap -->