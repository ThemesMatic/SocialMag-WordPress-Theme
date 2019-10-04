<?php
	//*********************************************************************************
	// Creates all Sections
	
	$wp_customize->add_section('socialmag_themesmatic_upsell_panel', array(
        'title'			=> esc_html__('Upgrade to SocialMag PRO', 'socialmag' ),
        'priority'		=> 19,
    ) );
    
    $wp_customize->add_section( 'socialmag_fonts_section', array(
        'title'          => esc_html__( 'Typography', 'socialmag' ),
        'priority'       => 21,
    ) );
    
        $wp_customize->add_section( 'socialmag_network_icons_section', array(
        'title'          => esc_html__( 'Social Network Icons', 'socialmag' ),
        'priority'       => 21,
    ) );
    
    $wp_customize->add_section( 'socialmag_slider_section', array(
        'title'          => esc_html__( 'Slider', 'socialmag' ),
        'priority'       => 22,
    ) );
	
	$wp_customize->add_section( 'socialmag_front_page_section', array(
        'title'          => esc_html__( 'Front Page Options', 'socialmag' ),
        'priority'       => 22,
    ) );
                
    $wp_customize->add_section( 'socialmag_sidebar_section', array(
        'title'          => esc_html__( 'Sidebar Options', 'socialmag' ),
        'description'	 => esc_html__( 'To enable both left & right sidebars: Enable left sidebar selection below. Then choose right sidebar widgets in "Widgets" section. In Widgets Section: "SiteWide Left Sidebar" Widget & "SiteWide Right Sidebar" Widget will override all sidebar widgets across entire site.', 'socialmag' ),
        'priority'       => 23,
    ) );