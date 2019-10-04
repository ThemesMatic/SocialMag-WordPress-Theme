<?php
	//*********************************************************************************
    //Adds custom colors to customizer
    
    $wp_customize->add_setting( 'socialmag_featured_menu_textcolor',
     array(
        'default' => '#ffffff',
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
		) 
	);
  
  	$wp_customize->add_control( new WP_Customize_Color_Control(
     $wp_customize,
     'socialmag_featured_menu_textcolor',
     array(
        'label' => esc_html__( 'Transparent Home Menu Text Color', 'socialmag' ),
        'description' => esc_html__( 'Site title & menu text on transparent home header', 'socialmag' ),
        'section' => 'colors',
        'settings' => 'socialmag_featured_menu_textcolor',
        'active_callback' => 'is_front_page',
        'priority' => 10,
		) 
	) );
         
    $wp_customize->add_setting( 'socialmag_accent_color',
     array(
        'default' => '#999999',
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
		)
	);
  
  	$wp_customize->add_control( new WP_Customize_Color_Control(
     $wp_customize,
     'socialmag_accent_color',
     array(
        'label' => esc_html__( 'Accent Color', 'socialmag' ),
        'section' => 'colors',
        'settings' => 'socialmag_accent_color',
        'priority' => 10,
		) 
	) );
	
	$wp_customize->add_setting( 'socialmag_featured_title_color',
     array(
        'default' => '#fff',
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
		) 
	);
  
  	$wp_customize->add_control( new WP_Customize_Color_Control(
     $wp_customize,
     'socialmag_featured_title_color',
     array(
        'label' => esc_html__( 'Featured Slider/Featured Image Text Color', 'socialmag' ),
        'description' => esc_html__( 'Featured Home Page Text', 'socialmag'),
        'section' => 'colors',
        'settings' => 'socialmag_featured_title_color',
        'active_callback' => 'is_front_page',
        'priority' => 10,
		) 
	) );
	
	$wp_customize->add_setting( 'socialmag_featured_button_text_color',
     array(
        'default' => '#333333',
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
		)
	);
  
  	$wp_customize->add_control( new WP_Customize_Color_Control(
     $wp_customize,
     'socialmag_featured_button_text_color',
     array(
        'label' => esc_html__( 'Featured Button Text Color', 'socialmag' ),
        'section' => 'colors',
        'settings' => 'socialmag_featured_button_text_color',
        'priority' => 10,
		) 
	) );

			
	$wp_customize->add_setting( 'socialmag_site_background_color',
     array(
        'default' => '#fff',
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
		) 
	);
	
  	$wp_customize->add_control( new WP_Customize_Color_Control(
     $wp_customize,
     'socialmag_site_background_color',
     array(
        'label' => esc_html__( 'Site Background Color', 'socialmag' ),
        'section' => 'colors',
        'settings' => 'socialmag_site_background_color',
        'priority' => 10,
		) 
	) );
	
	$wp_customize->add_setting( 'socialmag_footer_textcolor',
     array(
        'default' => '#777',
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
		) 
	);
  
  	$wp_customize->add_control( new WP_Customize_Color_Control(
     $wp_customize,
     'socialmag_footer_textcolor',
     array(
        'label' => esc_html__( 'Footer Text Color', 'socialmag' ),
        'section' => 'colors',
        'settings' => 'socialmag_footer_textcolor',
        'priority' => 10,
		) 
	) );
	
	$wp_customize->add_setting( 'socialmag_body_textcolor',
     array(
        'default' => '#333',
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
		) 
	);
  
  	$wp_customize->add_control( new WP_Customize_Color_Control(
     $wp_customize,
     'socialmag_body_textcolor',
     array(
        'label' => esc_html__( 'Body Text Color', 'socialmag' ),
        'section' => 'colors',
        'settings' => 'socialmag_body_textcolor',
        'priority' => 10,
		) 
	) );