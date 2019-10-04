<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           header-one.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>
<header class="header-one masthead <?php if ( get_theme_mod('socialmag_home_menu_bg', 1) != 0 ): ?>socialmag-transparent-bg<?php endif; ?> <?php if ( is_front_page() && has_header_image() && !is_paged() &&  get_theme_mod('socialmag_featured_section_choices') != 'none' || is_front_page() && has_header_video() && !is_paged() && get_theme_mod('socialmag_featured_section_choices') != 'none' || is_page_template('portfolio.php')): ?>frontpage featured<?php endif; ?> <?php if( is_front_page() && get_theme_mod('socialmag_featured_section_choices') == 'none' ): ?> removed-featured <?php endif;?>">
	
	<div id="nav-container">
		<div class="container">
			<div class="masthead-logo-wrap">
			    <?php if ( has_custom_logo() ) : ?>
			    	<?php echo esc_html( the_custom_logo() ); ?>
				<?php else : ?>
					<?php if( is_home() ): ?><h1><?php endif; ?><a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( bloginfo( 'name' ) ); ?></a><?php if( is_home() ): ?></h1><?php endif; ?>
				<?php endif; ?>
				
				<i id="mobile-navigation" class="mobile-icon fa fa-bars fa-2x" aria-hidden="true"></i>
			</div><!-- masthead-logo-wrap -->
		
			<div class="nav-wrapper">
				<?php if ( has_nav_menu('top') ): ?>
				<nav class="linear-menu" aria-label="<?php esc_attr_e( 'Primary Top Menu', 'socialmag' ); ?>">    
					<?php wp_nav_menu( array(
						'theme_location'	=> 'top',
						'menu_class'		=> 'top-menu',
						'depth'				=> 2,
					) ); ?>
				</nav><!-- nav -->
				<?php endif; ?>
			</div><!-- nav-wrapper -->
		</div><!-- container -->
	</div><!-- nav-container -->
</header>