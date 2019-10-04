<?php
	//SocialMag Slider One Headline
	$wp_customize->add_setting('socialmag_first_slider_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_first_slider_divider',
	        array(
	            'label'   => esc_html__('First Slider Options', 'socialmag'),
	            'section' => 'socialmag_slider_section',
	            'priority' => 1,
	        )
	    )
	);
	
	//SocialMag Slider One Image
	$wp_customize->add_setting(
        'socialmag_slider_one_image',
        array(
            'default' => get_template_directory_uri() . '/images/action-beach-fun-416676.jpg',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh'            
        )
    );
    
    $wp_customize->add_control(
    new WP_Customize_Image_Control(
	    $wp_customize,
		    'socialmag_slider_one_image',
		    array(
			    'label'       => __( 'Upload First Slider Image', 'socialmag' ),
			    'description' => __( 'Images should be 3000px x 1500px. <br> Larger images will be centered with a window of 3000px x 1500px.', 'socialmag' ),
				'section'     => 'socialmag_slider_section',
				'flex_width'  => true,
				'flex_height' => true,
				'width'       => 3000, // Default size.
				'height'      => 1500,
				'priority'	  => 1,
			)
		)
	);
	
	//SocialMag Slider One H2 Intro
    $wp_customize->add_setting( 'socialmag_first_slider_intro', array(
        'default'        => __('Create a WordPress Magazine','socialmag'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'socialmag_first_slider_intro', array(
        'label'   => esc_html__('Heading Text', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'text',
        'priority' => 1
    ) );
    
    //SocialMag Secondary Intro
    $wp_customize->add_setting( 'socialmag_first_slider_secondary', array(
        'default'        => __('Welcome to SocialMag', 'socialmag' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'socialmag_first_slider_secondary', array(
        'label'   => esc_html__('Secondary Text', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'text',
        'priority' => 1
    ) );
    
    //SocialMag Button Intro
    $wp_customize->add_setting( 'socialmag_first_button_intro', array(
        'default'        =>  __('Discover More', 'socialmag'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ) );
    
    $wp_customize->add_control( 'socialmag_first_button_intro', array(
        'label'   => esc_html__('Button Text', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'text',
        'priority' => 1
    ) );
    
    // Button URL
    $wp_customize->add_setting( 'socialmag_first_slider_button_url', array(
        'default'        => '#front-layout',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_first_slider_button_url', array(
        'label'   => esc_html__('Button Url (http://)', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'url',
        'priority' => 1
    ) );
    
    //SocialMag Slider Two Divider
	$wp_customize->add_setting('socialmag_second_slider_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_second_slider_divider',
	        array(
	            'label'   => esc_html__('Second Slider Options', 'socialmag'),
	            'section' => 'socialmag_slider_section',
	            'priority' => 2,
	        )
	    )
	);
    
    //SocialMag Slider Two Image
	$wp_customize->add_setting(
        'socialmag_slider_two_image',
        array(
            'default' => get_template_directory_uri() . '/images/aroma-chili-condiments-357743.jpg',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh'            
        )
    );
    
    $wp_customize->add_control(
    new WP_Customize_Image_Control(
	    $wp_customize,
		    'socialmag_slider_two_image',
		    array(
			    'label'       => __( 'Upload Second Slider Image', 'socialmag' ),
			    'description' => __( 'Images should be 3000px x 1500px. <br> Larger images will be centered with a window of 3000px x 1500px.', 'socialmag' ),
				'section'     => 'socialmag_slider_section',
				'flex_width'  => true,
				'flex_height' => true,
				'width'       => 3000, // Default size.
				'height'      => 1500,
				'priority'	  => 2,
			)
		)
	);
	
	//SocialMag Slider Two H2 Intro
    $wp_customize->add_setting( 'socialmag_second_slider_intro', array(
        'default'        => __('Structured HTML5 & SEO','socialmag'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'socialmag_second_slider_intro', array(
        'label'   => esc_html__('Heading Text', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'text',
        'priority' => 2
    ) );
    
    //SocialMag Secondary Intro
    $wp_customize->add_setting( 'socialmag_second_slider_secondary', array(
        'default'        => __('Fast Loading & Responsive', 'socialmag' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'socialmag_second_slider_secondary', array(
        'label'   => esc_html__('Secondary Text', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'text',
        'priority' => 2
    ) );
    
    //SocialMag Button Intro
    $wp_customize->add_setting( 'socialmag_second_button_intro', array(
        'default'        => __('Read More', 'socialmag'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ) );
    
    $wp_customize->add_control( 'socialmag_second_button_intro', array(
        'label'   => esc_html__('Button Text', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'text',
        'priority' => 2
    ) );
    
    // Button URL
    $wp_customize->add_setting( 'socialmag_second_slider_button_url', array(
        'default'        => '#front-layout',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_second_slider_button_url', array(
        'label'   => esc_html__('Button Url (http://)', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'url',
        'priority' => 2
    ) );
    
	//SocialMag Slider Third Divider
	$wp_customize->add_setting('socialmag_third_slider_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_third_slider_divider',
	        array(
	            'label'   => esc_html__('Third Slider Options', 'socialmag'),
	            'section' => 'socialmag_slider_section',
	            'priority' => 3,
	        )
	    )
	);
	
	//SocialMag Slider Three Image
	$wp_customize->add_setting(
        'socialmag_slider_three_image',
        array(
            'default' => get_template_directory_uri() . '/images/blanket-environment-foggy-590137.jpg',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh'            
        )
    );
    
    $wp_customize->add_control(
    new WP_Customize_Image_Control(
	    $wp_customize,
		    'socialmag_slider_three_image',
		    array(
			    'label'       => __( 'Upload Third Slider Image', 'socialmag' ),
			    'description' => __( 'Images should be 3000px x 1500px. <br> Larger images will be centered with a window of 3000px x 1500px.', 'socialmag' ),
				'section'     => 'socialmag_slider_section',
				'flex_width'  => true,
				'flex_height' => true,
				'width'       => 3000, // Default size.
				'height'      => 1500,
				'priority'	  => 3,
			)
		)
	);
	
	//SocialMag Slider Third H2 Intro
    $wp_customize->add_setting( 'socialmag_third_slider_intro', array(
        'default'        => __('Multi-Purpose Design','socialmag'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'socialmag_third_slider_intro', array(
        'label'   => esc_html__('Heading Text', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'text',
        'priority' => 3
    ) );
    
    //SocialMag Third Intro
    $wp_customize->add_setting( 'socialmag_third_slider_secondary', array(
        'default'        => __('Create Your Vision', 'socialmag' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'socialmag_third_slider_secondary', array(
        'label'   => esc_html__('Secondary Text', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'text',
        'priority' => 3
    ) );
    
    //SocialMag Button Intro
    $wp_customize->add_setting( 'socialmag_third_button_intro', array(
        'default'        => __('Read More', 'socialmag'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ) );
    
    $wp_customize->add_control( 'socialmag_third_button_intro', array(
        'label'   => esc_html__('Button Text', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'text',
        'priority' => 3
    ) );
    
    // Button URL
    $wp_customize->add_setting( 'socialmag_third_slider_button_url', array(
        'default'        => '#front-layout',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_third_slider_button_url', array(
        'label'   => esc_html__('Button Url (http://)', 'socialmag' ),
        'section' => 'socialmag_slider_section',
        'type'    => 'url',
        'priority' => 3
    ) );