<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           content-featured-slider.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/

//Socialmag featured slider
 if( ! function_exists('socialmag_featured_slider')) {
	function socialmag_featured_slider() {
		
		$socialmag_titles = array(
			'socialmag_main_title_1' => get_theme_mod('socialmag_first_slider_intro', __('Create a WordPress Magazine', 'socialmag')),
			'socialmag_main_title_2' => get_theme_mod('socialmag_second_slider_intro', __('Structured HTML5 & SEO', 'socialmag')),
			'socialmag_main_title_3' => get_theme_mod('socialmag_third_slider_intro', __('Multi-Purpose Design', 'socialmag')),
		);
		
		$socialmag_p_titles = array(
			'socialmag_p_title_1' => get_theme_mod('socialmag_first_slider_secondary', __('Welcome to SocialMag', 'socialmag')),
			'socialmag_p_title_2' => get_theme_mod('socialmag_second_slider_secondary', __('Fast Loading & Responsive', 'socialmag')),
			'socialmag_p_title_3' => get_theme_mod('socialmag_third_slider_secondary', __('Create Your Vision', 'socialmag')),
		);
		
		$socialmag_images = array(
			'socialmag_sl_image_1' => get_theme_mod('socialmag_slider_one_image', get_template_directory_uri() . '/images/action-beach-fun-416676.jpg'),
			'socialmag_sl_image_2' => get_theme_mod('socialmag_slider_two_image', get_template_directory_uri() . '/images/aroma-chili-condiments-357743.jpg'),
			'socialmag_sl_image_3' => get_theme_mod('socialmag_slider_three_image', get_template_directory_uri() . '/images/blanket-environment-foggy-590137.jpg'),
		);

		$socialmag_buttons = array(
			'socialmag_btn_1' => get_theme_mod('socialmag_first_button_intro', 'Discover More'),
			'socialmag_btn_2' => get_theme_mod('socialmag_second_button_intro', 'Read More'),
			'socialmag_btn_3' => get_theme_mod('socialmag_third_button_intro', 'Read More'),
		);
		
		$socialmag_button_urls = array(
			'socialmag_btn_url_1' => get_theme_mod('socialmag_second_slider_button_url', '#front-layout'),
			'socialmag_btn_url_2' => get_theme_mod('socialmag_second_slider_button_url', '#front-layout'),
			'socialmag_btn_url_3' => get_theme_mod('socialmag_second_slider_button_url', '#front-layout'),
		); ?>
		
		<div id="featured-slider-home" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner featured-slider">
				<?php $i = 1; ?>
				<?php foreach ($socialmag_images as $image) {
					if($image) { ?>
						
					<div class="carousel-item featured-slider <?php if($i < 2): ?>active<?php endif; ?>" style="background-image: url(<?php echo esc_url( $image ); ?>);">
			             <div class="carousel-caption">
			                 	<h2><?php echo esc_html( $socialmag_titles['socialmag_main_title_' . $i] ); ?></h2>
			                    <p><?php echo esc_html( $socialmag_p_titles['socialmag_p_title_' . $i] ); ?></p>
			                 	<a class="btn btn-lg btn-primary featured-button featured-slider" href="<?php echo esc_url( $socialmag_button_urls['socialmag_btn_url_' . $i] ); ?>"><?php echo esc_html( $socialmag_buttons['socialmag_btn_' .$i] ); ?></a>
			              </div><!-- carousel-caption -->
			        </div><!-- item featured-slider -->
			        
					<?php }
						$i++;
				} ?>

			    <a href="#featured-slider-home" class="left carousel-control-prev" role="button" data-slide="prev">
			        <i class="fa fa-angle-left" aria-hidden="true"></i>
			        <span class="sr-only"><?php esc_html_e('Previous', 'socialmag'); ?></span>
			    </a>
			    <a href="#featured-slider-home" class="right carousel-control-next" role="button" data-slide="next">
			        <i class="fa fa-angle-right" aria-hidden="true"></i>
			        <span class="sr-only"><?php esc_html_e('Next', 'socialmag'); ?></span>
			    </a>
			</div><!-- carousel-inner featured-slider -->
		</div><!-- featured-slider-home -->
		
	<?php }
} ?>

<?php socialmag_featured_slider(); ?>