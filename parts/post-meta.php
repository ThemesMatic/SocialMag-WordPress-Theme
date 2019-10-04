<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* post meta data used for all posts
*/
?>

<?php if ( is_front_page() ) : ?>

<div class="authorship">
	<div class="socialmag-posted">
	<?php if (has_category()): ?>
	<?php echo esc_html__('Posted in ', 'socialmag' ); ?><?php the_category(', '); ?>	<?php endif; ?>
	</div><!-- socialmag-posted -->
	
	<div class="socialmag-date">
	<?php echo get_the_date(); ?>
	</div><!-- socialmag-date -->
	
	<div class="edit-post alignright">
		<?php edit_post_link( esc_html__( 'Edit Post', 'socialmag' ) ); ?>
	</div><!-- edit-post -->

</div><!-- authorship -->

<?php elseif ( is_single() || is_search() || is_tag() ) : ?>

<div class="authorship matic">
	<div class="socialmag-comments-views">
	<?php if ( comments_open() ): ?>
		<?php $commentscount = get_comments_number();?>
		<a href="<?php comments_link(); ?> "><i class="socialmag-com-count fa fa-comment-o" aria-hidden="true"></i><?php echo absint($commentscount); ?></a>
	<?php endif; ?>
	</div><!-- socialmag-comments-views -->

	<div class="socialmag-posted">
	<?php if ( has_category() ): ?>
	<?php echo esc_html__('Posted in ', 'socialmag' ); ?><?php the_category(', '); ?>
	<?php endif; ?>
	</div><!-- socialmag-posted -->
	
	<div class="socialmag-date">
	<?php echo get_the_date(); ?>
	</div><!-- socialmag-date -->
	
	<div class="post-author">
	<?php echo esc_html__('by', 'socialmag' ); ?> <?php the_author_posts_link(); ?>
	</div><!-- post-author -->
		
	<div class="edit-post alignright">
		<?php edit_post_link( esc_html__( 'Edit Post', 'socialmag' ) ); ?>
	</div><!-- /edit-post -->
</div><!-- /authorship matic-->

<?php elseif ( is_page() || is_category() || is_author() ) : ?>

<div class="authorship">
	<?php if ( !is_page(array('cart', 'checkout')) ): ?>
	
	<div class="socialmag-date">
	<?php echo get_the_date(); ?>
	</div><!-- socialmag-date -->
	
	<div class="post-author">
	<?php echo esc_html__('by', 'socialmag' ); ?> <?php the_author(); ?>
	</div><!-- post-author -->
	
	<div class="socialmag-comments-views">
	<?php if ( comments_open() ): ?>
		<?php $commentscount = get_comments_number();?>
		<a href="<?php comments_link(); ?> "><i class="socialmag-com-count fa fa-comment-o" aria-hidden="true"></i><?php echo absint($commentscount); ?></a>
	<?php endif; ?>
	</div><!-- socialmag-comments-views -->
	
	<?php endif; ?>
	
	<div class="edit-post alignright">
		<?php edit_post_link( esc_html__( 'Edit Post', 'socialmag' ) ); ?>
	</div><!-- /edit-post -->
</div><!-- /authorship --> 


<?php elseif ( is_404() ) : ?>

<?php echo esc_html__('This is error 404', 'socialmag' ); ?>

<?php endif; ?>