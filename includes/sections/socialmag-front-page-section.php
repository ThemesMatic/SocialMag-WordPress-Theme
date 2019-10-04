<?php

	// Enable/Disable Display of Home Page Menu Background
    $wp_customize->add_setting( 'socialmag_home_menu_bg', array(
        'default'	=> 1,
        'sanitize_callback'	=> 'socialmag_sanitize_checkbox',
    ) );

	$wp_customize->add_control( 'socialmag_home_menu_bg', array(
        'label'		=> esc_html__( 'Transparent Home Menu', 'socialmag' ),
        'section'	=> 'socialmag_front_page_section',
        'type'		=> 'checkbox',
        'priority'	=> 1
    ) );
    
    // Add/Remove Overlap of Home Page Content Below Slider
    $wp_customize->add_setting( 'socialmag_home_slider_overlap', array(
        'default'	=> 1,
        'sanitize_callback'	=> 'socialmag_sanitize_checkbox',
    ) );

	$wp_customize->add_control( 'socialmag_home_slider_overlap', array(
        'label'		=> esc_html__( 'Add Content Overlap on Home Slider', 'socialmag' ),
        'section'	=> 'socialmag_front_page_section',
        'description' => 'Overlaps content over Featured Slider or Featured Static Image only',
        'type'		=> 'checkbox',
        'priority'	=> 1
    ) );

	 // Enable Display of Content Slider
    $wp_customize->add_setting( 'socialmag_slider_setting', array(
        'default'	=> 0,
        'sanitize_callback'	=> 'socialmag_sanitize_checkbox',
    ) );

	$wp_customize->add_control( 'socialmag_slider_setting', array(
        'label'		=> esc_html__( 'Enable Display of Post Content Slider (Home Page)', 'socialmag' ),
        'section'	=> 'socialmag_front_page_section',
        'description' => 'Displays small slider above post content (below Featured Slider/Featured Content)',
        'type'		=> 'checkbox',
        'priority'	=> 1
    ) );
	
	$wp_customize->add_setting('socialmag_home_posts_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_home_posts_divider',
	        array(
	            'label'   => esc_html__('Home Page Posts Options', 'socialmag'),
	            'section' => 'socialmag_front_page_section',
	            'priority' => 1,
	        )
	    )
	);
	
	// Enable Display of Posts Masonry Grid
    $wp_customize->add_setting( 'socialmag_masonry_post_grid_setting', array(
        'default'	=> 0,
        'sanitize_callback'	=> 'socialmag_sanitize_checkbox',
    ) );

	$wp_customize->add_control( 'socialmag_masonry_post_grid_setting', array(
        'label'		=> esc_html__( 'No Grid (Shows Regular Post Style)', 'socialmag' ),
        'section'	=> 'socialmag_front_page_section',
        'type'		=> 'checkbox',
        'priority'	=> 1
    ) );
    
    // Enable Display of Posts Masonry Grid
    $wp_customize->add_setting( 'socialmag_post_excerpt_setting',
        array(
            'default'	=> 20,
            'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'refresh',
    ) );

	$wp_customize->add_control( 'socialmag_post_excerpt_setting',
		array(
			  'type' => 'number',
			  'priority' 		=> 1,
			  'section' => 'socialmag_front_page_section',
			  'label' => esc_html__( 'Number of Words in Post Excerpt', 'socialmag' ),
			  'description' => esc_html__( 'Min. 10 Words, Max. 100 Words', 'socialmag' ),
			  'input_attrs' => array(
			    'min' => 10,
			    'max' => 100,
			    'step' => 1,
			    'style' 	=> 'width: 100%;',
			  ),
		) 
	);