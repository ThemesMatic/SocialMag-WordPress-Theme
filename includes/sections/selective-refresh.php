<?php 
	// If selected refresh is not available, bail
	if ( ! isset( $wp_customize->selective_refresh ) ) {
		return;
	}
	//Selective Refresh (Edit Link) for Blog Name and Description
    $wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => 'a.site-title',
		'settings' => 'blogname',
		'render_callback' => function() {
			bloginfo( 'blogname' );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.tagline',
		'settings' => 'blogdescription',
		'render_callback' => function() {
			bloginfo( 'blogdescription' );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_header_tag_setting', array(
		'selector' => '.intro-main-text, .socialmag-portfolio h1',
		'settings' => 'socialmag_header_tag_setting',
		'render_callback' => function() {
			return esc_html( get_theme_mod('socialmag_header_tag_setting') );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_header_tag_two_setting', array(
		'selector' => '.main-second-intro',
		'settings' => 'socialmag_header_tag_two_setting',
		'render_callback' => function() {
			return is_front_page();
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_button_text_setting', array(
		'selector' => '.featured-button',
		'settings' => 'socialmag_button_text_setting',
		'render_callback' => function() {
			return is_front_page();
		},
		'fallback_refresh' => true,
	) );
	//Selective Refresh (Edit Link) for Social Network Icons
	$wp_customize->selective_refresh->add_partial( 'socialmag_social_icon_one', array(
		'selector' => '.social-network-links.social-one',
		'settings' => 'socialmag_social_icon_one',
		'render_callback' => function() {
			return esc_html( get_theme_mod('socialmag_social_icon_one') );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_social_icon_two', array(
		'selector' => '.social-network-links.social-two',
		'settings' => 'socialmag_social_icon_two',
		'render_callback' => function() {
			return esc_html(get_theme_mod('socialmag_social_icon_two') );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_social_icon_three', array(
		'selector' => '.social-network-links.social-three',
		'settings' => 'socialmag_social_icon_three',
		'render_callback' => function() {
			return esc_html( get_theme_mod('socialmag_social_icon_three') );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_social_icon_four', array(
		'selector' => '.social-network-links.social-four',
		'settings' => 'socialmag_social_icon_four',
		'render_callback' => function() {
			return esc_html( get_theme_mod('socialmag_social_icon_four') );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_social_icon_five', array(
		'selector' => '.social-network-links.social-five',
		'settings' => 'socialmag_social_icon_five',
		'render_callback' => function() {
			return esc_html( get_theme_mod('socialmag_social_icon_five') );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_social_icon_six', array(
		'selector' => '.social-network-links.social-six',
		'settings' => 'socialmag_social_icon_six',
		'render_callback' => function() {
			return esc_html( get_theme_mod('socialmag_social_icon_six') );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_social_icon_seven', array(
		'selector' => '.social-network-links.social-seven',
		'settings' => 'socialmag_social_icon_seven',
		'render_callback' => function() {
			return esc_html( get_theme_mod('socialmag_social_icon_seven') );
		},
		'fallback_refresh' => true,
	) );
	$wp_customize->selective_refresh->add_partial( 'socialmag_themesmatic_icon_size', array(
		'selector' => 'ul.social-wrap',
		'settings' => 'socialmag_themesmatic_icon_size',
		'render_callback' => function() {
			return absint( get_theme_mod('socialmag_themesmatic_icon_size') );
		},
		'fallback_refresh' => true,
	) );