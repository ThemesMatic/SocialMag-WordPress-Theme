<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* @file           404.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
get_header(); ?>

<div class="wrap">
	<div class="container">
		<div class="col-md-8">
			<div class="error">
				<h1><?php echo esc_html__('Well&hellip; that happened.', 'socialmag'); ?></h1>
					<h2 class="sub-error"><?php echo esc_html__('Looks like that page hasnt been created.', 'socialmag'); ?></h2>
					<p><?php echo esc_html__('Have a look at some of the latest articles or try a search.', 'socialmag'); ?></p>
					<h3><?php echo esc_html__('Recent Articles:', 'socialmag'); ?></h3>
						<ul class="error-articles">
						<?php
							$args = array( 'numberposts' => '10' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . esc_url( get_permalink($recent["ID"]) ) . '">' . $recent["post_title"].'</a> </li> ';
							}
						?>
						</ul>
			</div><!-- /error -->
		</div><!-- /col-md-8 blog -->
		<?php get_sidebar(); ?>
	</div><!-- /container -->
</div><!-- /wrap -->
<?php get_footer(); ?>