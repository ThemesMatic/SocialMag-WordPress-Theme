<?php defined('ABSPATH') or die("please don't run scripts");
/*
* social icons used in headers, sidebars, footer, mobile menu by ThemesMatic
*/
?>

<div class="social-network-icons">
	
	<ul class="social-wrap">
		<?php if (get_theme_mod( 'socialmag_social_icon_one', 'none' ) != 'none') : ?>
			<li class="social-network-links social-one <?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_one', 'twitter' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'socialmag_social_icon_one_url', '') ); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_one', 'none' ) ); ?>"></i></a></li>
			<?php endif; ?>
		
		<?php if (get_theme_mod( 'socialmag_social_icon_two', 'none' ) != 'none') : ?>
			<li class="social-network-links social-two <?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_two', 'facebook' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'socialmag_social_icon_two_url', '') ); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_two', 'none' ) ); ?>"></i></a></li>
		<?php endif; ?>
		
		<?php if (get_theme_mod( 'socialmag_social_icon_three', 'none' ) != 'none') : ?>
			<li class="social-network-links social-three <?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_three', 'youtube' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'socialmag_social_icon_three_url', '') ); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_three', 'none' ) ); ?>"></i></a></li>
		<?php endif; ?>
		
		<?php if (get_theme_mod( 'socialmag_social_icon_four', 'none' ) != 'none') : ?>
			<li class="social-network-links social-four <?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_four', 'instagram' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'socialmag_social_icon_four_url', '') ); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_four', 'none' ) ); ?>"></i></a></li>
		<?php endif; ?>
		
		<?php if (get_theme_mod( 'socialmag_social_icon_five', 'none' ) != 'none') : ?>
			<li class="social-network-links social-five <?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_five', 'amazon' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'socialmag_social_icon_five_url', '') ); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_five', 'none' ) ); ?>"></i></a></li>
		<?php endif; ?>
		
		<?php if (get_theme_mod( 'socialmag_social_icon_six', 'none' ) != 'none') : ?>
			<li class="social-network-links social-six <?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_six', 'none' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'socialmag_social_icon_six_url', '') ); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_six', 'none' ) ); ?>"></i></a></li>
		<?php endif; ?>
		
		<?php if (get_theme_mod( 'socialmag_social_icon_seven', 'none' ) != 'none') : ?>
			<li class="social-network-links social-seven <?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_seven', 'none' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'socialmag_social_icon_seven_url', '') ); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr( get_theme_mod( 'socialmag_social_icon_seven', 'none' ) ); ?>"></i></a></li>
		<?php endif; ?>
	</ul><!-- social-wrap -->

</div><!-- social-network-icons -->