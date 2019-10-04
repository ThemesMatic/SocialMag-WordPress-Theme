<?php class SocialMag_Themesmatic_Display_Content extends WP_Customize_Control {
/**
* Render the control's content.
*/
	public function render_content() { ?>
  
	<div class="socialmag_themesmatic_upsell_panel_content">
		<h1><?php echo esc_html('SocialMag Pro', 'socialmag'); ?></h1>
		<a href="<?php echo esc_url('https://www.themesmatic.com/wordpress/themes/socialmag-pro-wordpress-theme/'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/socialmag-pro.png'); ?>" alt="socialmag-pro" /></a>
		<ul class="socialmag-themesmatic-panel-list">
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Boxed and Full Width Display', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Change the Site Width with the click of a button', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Multiple Grid Layout Options: Category/ Full Page / Magazine Layouts', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Custom Column Selection in Full Page Grid', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Multiple Front Page Displays', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Multiple Header Layouts', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Multiple Sidebar Layouts', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Dropdown Premium/Responsive Search Bar', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Portfolio Template', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Landing Page + Pro Panels Templates with Customizer Controls', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('x8 Custom Widgets (App Store Widget / About Me Widget / 4 Landing Page Widgets)', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('More Left and Double Sidebar Options', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Widget for Affiliate Ads (Make Money From Your Site)', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Post View Counter', 'socialmag'); ?></li>
			<li><i class="fa fa-2x fa-check-square-o" aria-hidden="true"></i> <?php echo esc_html__('Support', 'socialmag'); ?></li>
		</ul>
		<a class="pro-button" href="<?php echo esc_url('https://www.themesmatic.com/wordpress/themes/socialmag-pro-wordpress-theme/', 'socialmag'); ?>" target="_blank"><?php echo esc_html__('SocialMag PRO Upgrade', 'socialmag'); ?></a>
		<p class="socialmag-rating"><?php echo esc_html__('If you like SocialMag please write a', 'socialmag'); ?> <a href="<?php echo esc_url( 'https://wordpress.org/support/theme/socialmag/reviews/'); ?>" target="_blank"><?php echo esc_html('&#9733;&#9733;&#9733;&#9733;&#9733;', 'socialmag'); ?></a> <?php echo esc_html__('Rating. Thank you!', 'socialmag'); ?></p>
	</div><!-- socialmag_themesmatic_upsell_panel_content -->
	
	<div class="socialmag_themesmatic_documentation">
		
		<p><?php echo esc_html__('For documentation, tutorials and other good stuff, use the Documentation link below.', 'socialmag'); ?></p>

		<a class="pro-button" href="<?php echo esc_url('https://www.themesmatic.com/documentation/socialmag'); ?>" target="_blank"><?php echo esc_html__('Documentation', 'socialmag'); ?></a>
	</div><!-- socialmag_themesmatic_documentation -->

  	<?php
	} //render_content
} //SocialMag_Themesmatic_Display_Content