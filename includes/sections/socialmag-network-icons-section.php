<?php
	//*********************************************************************************
    //Social Icon Font Size
	
	$wp_customize->add_setting( 'socialmag_themesmatic_icon_size',
        array(
			'default' 			=> 25,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_themesmatic_icon_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_network_icons_section',
		    'label' 		=> esc_html__( 'Icon Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 15px / Largest = 60px', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 15,
		        'max' 		=> 60,
		        'step' 		=> .5,
		        'style' 	=> 'width: 100%;',
			),
		) 
	);
	
	// Display Social Network Icons in Sidebar
    $wp_customize->add_setting( 'social_icons_sidebar_display', array(
        'default'	=> 0,
        'sanitize_callback'	=> 'socialmag_sanitize_checkbox',
    ) );

	$wp_customize->add_control( 'social_icons_sidebar_display', array(
        'label'		=> esc_html__( 'Display Social Network Icons (Sidebar & Footer)', 'socialmag' ),
        'section'	=> 'socialmag_network_icons_section',
        'type'		=> 'checkbox',
        'priority'	=> 1
    ) );
    
    // Display Social Network Icons on Left or Right Sidebar
    $wp_customize->add_setting( 'socialmag_icons_position', array(
        'default'	=> 'right',
        'sanitize_callback'	=> 'socialmag_sanitize_icons_location',
    ) );

	$wp_customize->add_control( 'socialmag_icons_position', array(
        'label'		=> esc_html__( 'Display Social Network Icons in Left or Right Sidebar', 'socialmag' ),
        'section'	=> 'socialmag_network_icons_section',
        'type'		=> 'radio',
        'choices' 			=> array(
	            'left'	=> esc_html__('Left Sidebar', 'socialmag'),
            	'right'	=> esc_html__('Right Sidebar', 'socialmag'),
            	),

        'priority'	=> 1
    ) );
    
	// Social Icon One
    $wp_customize->add_setting( 'socialmag_social_icon_one',
        array(
	        'default' 			=> 'none',
	        'sanitize_callback' => 'socialmag_sanitize_social',
	) );

	$wp_customize->add_control('socialmag_social_icon_one',
		array(
	        'type'		=> 'select',
	        'label'		=> esc_html__( 'Social Icon #1', 'socialmag' ),
	        'section'	=> 'socialmag_network_icons_section',
	        'priority'	=> 1,
	        'choices'	=> $socialmag_themesmatic_social,
	    ) );		
	// Social Icon One URL
    $wp_customize->add_setting( 'socialmag_social_icon_one_url',
        array(
            'default'	 		=> '',
            'sanitize_callback'	=> 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_social_icon_one_url',
        array(
            'label'			=> esc_html__( 'Social Icon #1 URL', 'socialmag' ),
            'description' 	=> esc_html__('URL for 1st Social Network', 'socialmag'),
            'section' 		=> 'socialmag_network_icons_section',
            'type'    		=> 'url',
            'priority'		 => 1
    ) );
	// Social Icon Two
    $wp_customize->add_setting( 'socialmag_social_icon_two',
        array(
	        'default' 			=> 'none',
	        'sanitize_callback' => 'socialmag_sanitize_social',
	) );

	$wp_customize->add_control('socialmag_social_icon_two',
		array(
	        'type'		=> 'select',
	        'label'		=> esc_html__( 'Social Icon #2', 'socialmag' ),
	        'section'	=> 'socialmag_network_icons_section',
	        'priority'	=> 2,
	        'choices'	=> $socialmag_themesmatic_social,
	) );
	// Social Icon One URL
    $wp_customize->add_setting( 'socialmag_social_icon_two_url',
        array(
            'default'			=> '',
            'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_social_icon_two_url',
        array(
            'label'			=> esc_html__( 'Social Icon #2 URL', 'socialmag' ),
            'description' 	=> esc_html__('URL for 2nd Social Network', 'socialmag'),
            'section' 		=> 'socialmag_network_icons_section',
            'type'			=> 'url',
            'priority' 		=> 2
    ) );
    // Social Icon Three
    $wp_customize->add_setting( 'socialmag_social_icon_three',
        array(
	        'default' 			=> 'none',
	        'sanitize_callback' => 'socialmag_sanitize_social',
	) );

	$wp_customize->add_control('socialmag_social_icon_three',
		array(
	        'type'		=> 'select',
	        'label'		=> esc_html__( 'Social Icon #3', 'socialmag' ),
	        'section'	=> 'socialmag_network_icons_section',
	        'priority'	=> 3,
	        'choices'	=> $socialmag_themesmatic_social,
	) );
	// Social Icon Three URL
    $wp_customize->add_setting( 'socialmag_social_icon_three_url',
        array(
            'default'			=> '',
            'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_social_icon_three_url',
        array(
            'label'			=> esc_html__( 'Social Icon #3 URL', 'socialmag' ),
            'description'	=> esc_html__('URL for 3rd Social Network', 'socialmag'),
            'section' 		=> 'socialmag_network_icons_section',
            'type'			=> 'url',
            'priority' 		=> 3
    ) );        
    // Social Icon Four
    $wp_customize->add_setting( 'socialmag_social_icon_four',
        array(
	        'default' 			=> 'none',
	        'sanitize_callback' => 'socialmag_sanitize_social',
	) );

	$wp_customize->add_control('socialmag_social_icon_four',
		array(
	        'type' 		=> 'select',
	        'label' 	=> esc_html__( 'Social Icon #4', 'socialmag' ),
	        'section'	=> 'socialmag_network_icons_section',
	        'priority' 	=> 4,
	        'choices'	=> $socialmag_themesmatic_social,
	) );
	// Social Icon Four URL
    $wp_customize->add_setting( 'socialmag_social_icon_four_url',
        array(
            'default'			=> '',
            'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_social_icon_four_url',
        array(
            'label'			=> esc_html__( 'Social Icon #4 URL', 'socialmag' ),
            'description' 	=> esc_html__('URL for 4th Social Network', 'socialmag'),
            'section' 		=> 'socialmag_network_icons_section',
            'type'			=> 'url',
            'priority' 		=> 4
    ) );        
    // Social Icon Five
    $wp_customize->add_setting( 'socialmag_social_icon_five',
    array(
        'default' 			=> 'none',
        'sanitize_callback' => 'socialmag_sanitize_social',
	) );

	$wp_customize->add_control('socialmag_social_icon_five',
		array(
	        'type'		=> 'select',
	        'label'		=> esc_html__( 'Social Icon #5', 'socialmag' ),
	        'section'	=> 'socialmag_network_icons_section',
	        'priority'	=> 5,
	        'choices'	=> $socialmag_themesmatic_social,
	) );
	// Social Icon Five URL
    $wp_customize->add_setting( 'socialmag_social_icon_five_url',
        array(
            'default'			=> '',
            'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_social_icon_five_url',
        array(
            'label'			=> esc_html__( 'Social Icon #5 URL', 'socialmag' ),
            'description'	=> esc_html__('URL for 5th Social Network', 'socialmag'),
            'section' 		=> 'socialmag_network_icons_section',
            'type'			=> 'url',
            'priority' 		=> 5
    ) );        
    // Social Icon Six
    $wp_customize->add_setting( 'socialmag_social_icon_six',
        array(
	        'default' 			=> 'none',
	        'sanitize_callback' => 'socialmag_sanitize_social',
	) );

	$wp_customize->add_control( 'socialmag_social_icon_six',
		array(
	        'type' 		=> 'select',
	        'label' 	=> esc_html__( 'Social Icon #6', 'socialmag' ),
	        'section' 	=> 'socialmag_network_icons_section',
	        'priority' 	=> 6,
	        'choices' 	=> $socialmag_themesmatic_social,
	) );
	// Social Icon Six URL
    $wp_customize->add_setting( 'socialmag_social_icon_six_url',
        array(
            'default'			=> '',
            'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_social_icon_six_url',
        array(
            'label'			=> esc_html__( 'Social Icon #6 URL', 'socialmag' ),
            'description' 	=> esc_html__('URL for 6th Social Network', 'socialmag'),
            'section' 		=> 'socialmag_network_icons_section',
            'type'			=> 'url',
            'priority'		=> 6
    ) );        
    // Social Icon Seven
    $wp_customize->add_setting( 'socialmag_social_icon_seven',
        array(
	        'default' 			=> 'none',
	        'sanitize_callback' => 'socialmag_sanitize_social',
	) );

	$wp_customize->add_control('socialmag_social_icon_seven',
		array(
	        'type'		=> 'select',
	        'label'		=> esc_html__( 'Social Icon #7', 'socialmag' ),
	        'section'	=> 'socialmag_network_icons_section',
	        'priority'	=> 7,
	        'choices'	=> $socialmag_themesmatic_social,
	) );
	// Social Icon Seven URL
    $wp_customize->add_setting( 'socialmag_social_icon_seven_url',
        array(
            'default'			=> '',
            'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_social_icon_seven_url',
        array(
            'label'			=> esc_html__( 'Social Icon #7 URL', 'socialmag' ),
            'description' 	=> esc_html__('URL for 7th Social Network', 'socialmag'),
            'section' 		=> 'socialmag_network_icons_section',
            'type'			=> 'url',
            'priority' 		=> 7
    ) );