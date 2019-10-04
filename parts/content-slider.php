<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           content-slider.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>

<div class="carousel slide carousel-fade" id="magazine-slider-home" data-ride="carousel">
	<div class="carousel-inner">
		<ol class="carousel-indicators">
			
			<?php $i = 0; ?>
			
			<?php if ( have_posts() && is_sticky() ): ?>
			
			<?php query_posts(array(
				'post__in'  => get_option('sticky_posts'),
				'posts_per_page' => 5));
			?>
				
			<?php else: ?>
			
			<?php query_posts(array(
				'posts_per_page' => 5));
			?>
				
			<?php endif; ?>
			
			<?php while (have_posts()) : the_post(); ?>
			
			<li data-target="#magazine-slider-home" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0): ?> class="active" <?php endif; ?>></li>
				    
			<?php $i++; ?>
			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			
		</ol>

		<?php $i = 0; ?>
		<?php if ( have_posts() && is_sticky() ): ?>
			
			<?php query_posts(array(
				'post__in'  => get_option('sticky_posts'),
				'posts_per_page' => 5));
			?>
				
		<?php else: ?>
			
			<?php query_posts(array(
				'posts_per_page' => 5));
			?>
				
		<?php endif; ?>
			
	<?php $ids = array();
		while (have_posts()) : the_post();
		$ids[] = get_the_ID(); ?>
	
		<div class="item item-<?php echo $i; if ($i == 0): ?> active <?php endif; ?>">
			<?php if( has_post_thumbnail() ): ?>
				<?php if ( get_theme_mod('socialmag_left_sidebar_home_check', 0 ) != 1 ): ?>
					<?php the_post_thumbnail( 'socialmag-slider' ); ?>
				<?php else: ?>
					<?php the_post_thumbnail( 'socialmag-narrow-slider' ); ?>
				<?php endif; ?>
			<?php endif; ?>
			<div class="carousel-caption">
			 	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			 		<p><?php the_excerpt(); ?></p>
				</div><!-- carousel-caption -->
		</div><!-- item active -->
		
	<?php $i++; ?>
    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>

</div><!-- carousel-inner -->

<a href="#magazine-slider-home" class="left carousel-control" role="button" data-slide="prev">
	<i class="fa fa-angle-left" aria-hidden="true"></i>
	<span class="sr-only"><?php echo esc_html__('Previous', 'socialmag'); ?></span>
</a>
<a href="#magazine-slider-home" class="right carousel-control" role="button" data-slide="next">
	<i class="fa fa-angle-right" aria-hidden="true"></i>
	<span class="sr-only"><?php echo esc_html__('Next', 'socialmag'); ?></span>
</a>

</div><!-- carousel-slide -->