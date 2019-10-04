<?php
defined('ABSPATH') or die("please don't run scripts");
//Left post link
	$previous_article_link = get_next_post_link('%link');

// Right post link
	$next_article_link = get_previous_post_link('%link');

if ( $next_article_link !== '' || $previous_article_link !== '' ) : ?>

	<nav class="navigation post-navigation">
		<span class="screen-reader-text"><?php echo esc_html__( 'Article Navigation', 'socialmag' ); ?></span>
		<?php if( $previous_article_link !== '' ) : ?>
		<ul class="article-nav-links article-nav-links-left">
			<li class="left-post-link"><?php echo esc_html__('&#60; Previous Article', 'socialmag'); ?></li>
			<li><?php echo get_previous_post_link('%link') ?></li><!-- left-post-link -->
		</ul><!-- article-nav-links -->
		<?php endif; ?>
		
		<?php if ( $next_article_link !== ''): ?>
			<ul class="article-nav-links article-nav-links-right">
				<li class="right-post-link"><?php echo esc_html__('Next Article &#62;', 'socialmag'); ?></li>
				<li><?php echo get_next_post_link('%link'); ?></li><!--right-post-link -->
			</ul><!-- article-nav-links -->
		<?php endif; ?>
	</nav>
	
<?php endif; ?>