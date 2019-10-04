<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* @file           footer.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>

<!-- ad display section for wide footer banner -->
<?php if ( is_active_sidebar( 'footer-banner-ad' ) ) : ?>
<div class="container"> 
	<div class="col-md-12">
		<div class="content-ad">
			<?php dynamic_sidebar( 'footer-banner-ad' ); ?>
		</div><!-- content-ad -->
	</div><!-- col-md-12 -->
</div><!-- container -->
<?php endif; ?>

<footer>
	<div class="container">
		<div class="col-xs-12 col-md-4">
			<div class="bottom-title">
				<?php if ( has_custom_logo() ) : ?>
				    	<?php echo the_custom_logo(); ?>
					<?php else : ?>
						<a class="site-title" href="<?php echo esc_url( home_url('/') ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
					<?php endif; ?>
					
				<?php if( get_bloginfo('description') !== '' ): ?>
				<p class="tagline"><?php bloginfo('description'); ?></p>
				<?php endif; ?>
				<?php if( get_theme_mod( 'social_icons_sidebar_display', 0 ) != 0 ): ?>
				<?php get_template_part( 'parts/content', 'icons' ); ?>
				<?php endif; ?>
			</div><!-- /bottom-title -->
		</div><!--/ col-md-4 -->
		
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div class="col-xs-12 col-md-4">
				<div class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div><!-- /widget-area -->
			</div><!-- /col-md-4 -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			<div class="col-xs-12 col-md-4">
				<div class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div><!-- /widget-area -->
			</div><!-- /col-md-4 -->
		<?php endif; ?>
		
		<div class="col-xs-12 col-md-12 footer-attr">
			<p class="footer-copy">
				<?php echo esc_html('&copy;'); ?> <?php echo get_bloginfo('name'); ?> <?php echo date_i18n( 'Y' ); ?>
			</p>
			<?php if ( get_theme_mod( 'socialmag_footer_cred', 0 ) != 1 ): ?>
			<p class="footer-tml"><?php get_template_part('parts/content', 'footer'); ?></p>
			<?php endif; ?>
		</div><!-- footer-attr -->
	</div><!-- container -->
</footer><!-- /footer container -->

<div class="socialmag-top">
	<p>
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</p>
</div><!-- socialmag-top -->

<?php wp_footer(); ?>
</body>
</html>