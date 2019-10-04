<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* used on the Front Page Template to display custom header intro
*
* @file           content-intro.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>

<div class="featured-intro">
	
	<?php $header_tag_check = get_theme_mod( 'socialmag_header_tag_setting', '');
    if( $header_tag_check != '' ):
    
    if ( has_custom_logo() ) : ?>
    <h1 class="intro-main-text">
    <?php echo esc_html(get_theme_mod( 'socialmag_header_tag_setting', '') ); ?>
    </h1>
    <?php else : ?>
    <h2 class="intro-main-text">
	<?php echo esc_html( get_theme_mod( 'socialmag_header_tag_setting', '') ); ?>
	</h2>
	<?php endif; ?>
	
	<?php else: ?>
	
	<?php if ( has_custom_logo() ) : ?>
    <h1 class="intro-main-text">
    	<?php echo esc_html( bloginfo( 'name' ) ); ?>
    </h1>
    <?php else : ?>
    <h2 class="intro-main-text">
		<?php echo esc_html( bloginfo( 'name' ) ); ?>
	</h2>
	<?php endif; ?>
	
	<?php endif; ?>
	
	<?php $header_tag_two_check = get_theme_mod( 'socialmag_header_tag_two_setting', '' );
    if( $header_tag_two_check != '' ): ?>
	
	<h3 class="main-second-intro">
	<?php echo esc_html( get_theme_mod( 'socialmag_header_tag_two_setting', '') ); ?>
	</h3>
	
	<?php elseif( get_bloginfo('description') !== '' ): ?>
	<h3 class="main-second-intro">
	<?php bloginfo('description'); ?>
	</h3>
	<?php endif; ?>
		
	<?php $button_check = get_theme_mod('socialmag_button_text_setting', 'Read More');
    if( $button_check != '' ): ?>
	
	<a class="btn btn-lg btn-primary featured-button" href="<?php echo esc_url( get_theme_mod( 'socialmag_featured_button_url', '#front-layout' ) ); ?>"><?php echo esc_html( get_theme_mod('socialmag_button_text_setting', 'Read More') ); ?></a>
	<?php endif; ?>
</div><!-- featured-intro -->