<?php class SocialMag_Themesmatic_Display_Content extends WP_Customize_Control {
/**
* Render the control's content.
*/
	public function render_content() { ?>
  
	<div class="socialmag_themesmatic_upsell_panel_content">
		<a href="<?php echo esc_url('https://www.themesmatic.com/wordpress/themes/socialmag-pro-wordpress-theme/'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/socialmag-pro.png'); ?>" alt="socialmag-pro" /></a>
		
		<p><?php echo esc_html__('Ready to get started? Upgrade to SocialMag Pro.', 'socialmag'); ?></p>

		<a class="pro-button" href="<?php echo esc_url('https://www.themesmatic.com/wordpress/themes/socialmag-pro-wordpress-theme/', 'socialmag'); ?>" target="_blank"><?php echo esc_html__('Get SocialMag PRO', 'socialmag'); ?></a>

		
		<p class="socialmag-themesmatic-intro-offer"><?php echo esc_html__('Here are a few of the many features you&rsquo;ll get in SocialMag Pro upgrade.', 'socialmag'); ?></p>
		<ul class="socialmag-themesmatic-panel-list">
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Boxed and Full Width Display', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Change the Site Width with the click of a button', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('More Location Choices for Social Network Icons', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('More Slider Options', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('More Color Controls', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Multiple Post Grid Layout Options: Category/ Full Page / Magazine Layouts', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Multiple Post Display Styles', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Full Page Post Grid w/Multiple Columns', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Multiple Front Page Displays w/Templates', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Multiple Header & Footer Layouts', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Multiple Sidebar Layouts with Double Sidebars', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Dropdown Premium/Responsive Search Bar', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Portfolio Template included', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Landing Page + Full Page Panels Templates including Customizer Controls', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('x8 Custom Widgets (App Store Widget / About Me Widget / 4 Landing Page Widgets)', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('More Left Sidebar Options', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Widget for Affiliate Ads (Make Affiliate Commissions From Your Articles)', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('Free Future Theme Updates', 'socialmag'); ?></li>
			<li><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <?php echo esc_html__('&amp; a lot more.', 'socialmag'); ?></li>
		</ul>
	</div><!-- socialmag_themesmatic_upsell_panel_content -->

  	<?php
	} //render_content
} //SocialMag_Themesmatic_Display_Content