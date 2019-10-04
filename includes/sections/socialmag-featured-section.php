<?php
	//*********************************************************************************
    //Adds custom intro content
    
    $wp_customize->add_setting('socialmag_featured_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_featured_divider',
	        array(
	            'label'   => esc_html__('Featured Content Options', 'socialmag'),
	            'section' => 'socialmag_front_page_section',
	            'priority' => 1,
	        )
	    )
	);
    
    // Enable Display of Featured Section Content
    $wp_customize->add_setting( 'socialmag_featured_section_choices', array(
        'default'	=> 'featured-static',
        'sanitize_callback'	=> 'socialmag_sanitize_featured_choices',
    ) );

	$wp_customize->add_control( 'socialmag_featured_section_choices', array(
        'label'		=> esc_html__( 'Enable Display of Featured Content + Background Image', 'socialmag' ),
        'description' => esc_html__('De-Select to remove the Featured Header Content and show regular blog style.', 'socialmag'),
        'section'	=> 'socialmag_front_page_section',
        'type'		=> 'radio',
        'choices' 	=> array(
	            'featured-slider'	=> esc_html__('Featured Slider', 'socialmag'),
            	'featured-static'	=> esc_html__('Featured Static Image', 'socialmag'),
            	'none'	=> esc_html__('None', 'socialmag'),
            	),
        'priority'	=> 1
    ) );
    
    // Header Title Text
    $wp_customize->add_setting( 'socialmag_header_tag_setting', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'socialmag_header_tag_setting', array(
        'label'   => esc_html__('Featured Title Text', 'socialmag' ),
        'section' => 'socialmag_front_page_section',
        'type'    => 'text',
        'priority' => 1
    ) );
    
    // Second Header Title Text
    $wp_customize->add_setting( 'socialmag_header_tag_two_setting', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'socialmag_header_tag_two_setting', array(
        'label'   => esc_html__('Second Header Text', 'socialmag' ),
        'section' => 'socialmag_front_page_section',
        'type'    => 'text',
        'priority' => 1
    ) );
        
    // Button URL
    $wp_customize->add_setting( 'socialmag_featured_button_url', array(
        'default'        => '#front-layout',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_featured_button_url', array(
        'label'   => esc_html__('Button Url (http://)', 'socialmag' ),
        'section' => 'socialmag_front_page_section',
        'type'    => 'url',
        'priority' => 1
    ) );
    
    // Button Text
    $wp_customize->add_setting( 'socialmag_button_text_setting', array(
        'default'        => 'Read More',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'socialmag_button_text_setting', array(
        'label'   => 'Button Text',
        'section' => 'socialmag_front_page_section',
        'type'    => 'text',
        'priority' => 1
    ) );
