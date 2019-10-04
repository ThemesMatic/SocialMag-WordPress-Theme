<?php
	
	//Sidebar Displays Header
    $wp_customize->add_setting('socialmag_sidebar_header', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_sidebar_header',
	        array(
	            'label'   => esc_html__('SocialMag Pro enables more Left & Double Sidebar options on Author / Category / Archive / Tags Pages', 'socialmag'),
	            'section' => 'socialmag_sidebar_section',
	            'priority' => 1,
	        )
	    )
	);
 
    //Sidebar Displays Divider
    $wp_customize->add_setting('socialmag_sidebar_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_sidebar_divider',
	        array(
	            'label'   => esc_html__('Sidebar Displays', 'socialmag'),
	            'section' => 'socialmag_sidebar_section',
	            'priority' => 1,
	        )
	    )
	);
    
	// Left Sidebar Home Page
    $wp_customize->add_setting( 'socialmag_left_sidebar_home_check', array(
        'default'	=> 0,
        'sanitize_callback'	=> 'socialmag_sanitize_checkbox',
    ) );

	$wp_customize->add_control( 'socialmag_left_sidebar_home_check', array(
        'label'		=> esc_html__( 'Left Sidebar on Home Page', 'socialmag' ),
        'section'	=> 'socialmag_sidebar_section',
        'type'		=> 'checkbox',
        'priority'	=> 1
    ) );
    
    // Left Sidebar Single Post
    $wp_customize->add_setting( 'socialmag_left_sidebar_single_check', array(
        'default'	=> 0,
        'sanitize_callback'	=> 'socialmag_sanitize_checkbox',
    ) );

	$wp_customize->add_control( 'socialmag_left_sidebar_single_check', array(
        'label'		=> esc_html__( 'Left Sidebar on Single Posts', 'socialmag' ),
        'section'	=> 'socialmag_sidebar_section',
        'type'		=> 'checkbox',
        'priority'	=> 1
    ) );
    
    // Left Sidebar Page
    $wp_customize->add_setting( 'socialmag_left_sidebar_page_check', array(
        'default'	=> 0,
        'sanitize_callback'	=> 'socialmag_sanitize_checkbox',
    ) );

	$wp_customize->add_control( 'socialmag_left_sidebar_page_check', array(
        'label'		=> esc_html__( 'Left Sidebar on Pages', 'socialmag' ),
        'section'	=> 'socialmag_sidebar_section',
        'type'		=> 'checkbox',
        'priority'	=> 1
    ) );