<?php $wp_customize->add_setting('socialmag_body_font_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_body_font_divider',
	        array(
	            'label'   => esc_html__('Body Font Options', 'socialmag'),
	            'section' => 'socialmag_fonts_section',
	            'priority' => 1,
	        )
	    )
	);
    
    //Choice of Google Fonts
    $wp_customize->add_setting( 'socialmag_body_font_style_url', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_body_font_style_url', array(
        'label'   => esc_html__('Body Font URL & Weights', 'socialmag' ),
        'description'   => esc_html__('Copy the Embed Font line Google Fonts & paste here. Example: https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,700,800', 'socialmag' ),
        'section' => 'socialmag_fonts_section',
        'type'    => 'url',
        'priority' => 1
    ) );
    
    $wp_customize->add_setting( 'socialmag_body_font_style_family', array(
        'default'        => 'font-family: "Montserrat", sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'socialmag_body_font_style_family', array(
        'label'   => esc_html__('Body Font CSS Family', 'socialmag' ),
        'description'   => esc_html__('Copy the Specify in CSS line Google Fonts & paste here.  Example: font-family: &#39;Montserrat&#39;, sans-serif;', 'socialmag' ),
        'section' => 'socialmag_fonts_section',
        'type'    => 'text',
        'priority' => 1
    ) );
    
    // Body Font Size
    $wp_customize->add_setting( 'socialmag_body_font_size',
        array(
			'default' 			=> 15,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_body_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'Body Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 12px / Largest = 75px (Default = 15px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 12,
		        'max' 		=> 75,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
    
    $wp_customize->add_setting('socialmag_headings_font_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_headings_font_divider',
	        array(
	            'label'   => esc_html__('Headings Font Options', 'socialmag'),
	            'section' => 'socialmag_fonts_section',
	            'priority' => 1,
	        )
	    )
	);
	
    // Font Choice for Headings
    $wp_customize->add_setting( 'socialmag_headings_font_style_url', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( 'socialmag_headings_font_style_url', array(
        'label'   => esc_html__('Headings Font Name & Weights', 'socialmag' ),
        'description'   => esc_html__('Use only if you want headings to have a different Font Style', 'socialmag' ),
        'section' => 'socialmag_fonts_section',
        'type'    => 'url',
        'priority' => 1
    ) );
    
    $wp_customize->add_setting( 'socialmag_headings_font_style_family', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'socialmag_headings_font_style_family', array(
        'label'   => esc_html__('Headings Font CSS Family', 'socialmag' ),
        'description'   => esc_html__('Use only if you want headings to have a different Font Style', 'socialmag' ),
        'section' => 'socialmag_fonts_section',
        'type'    => 'text',
        'priority' => 1
    ) );
    
    $wp_customize->add_setting('socialmag_title_font_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_title_font_divider',
	        array(
	            'label'   => esc_html__('Site Title Font Options', 'socialmag'),
	            'section' => 'socialmag_fonts_section',
	            'priority' => 1,
	        )
	    )
	);
	
    // Site Title Font Size
    $wp_customize->add_setting( 'socialmag_site_title_font_size',
        array(
			'default' 			=> 40,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_site_title_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'Site Title Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 15px / Largest = 75px (Default = 40px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 15,
		        'max' 		=> 75,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	
	// Site Title Font Spacing
	$wp_customize->add_setting( 'socialmag_letter_spacing_site_title',
        array(
			'default' 			=> -3,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_int',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_letter_spacing_site_title',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'Letter Spacing (Site Title)', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = -10px / Largest = 5px (Default = -3px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> -10,
		        'max' 		=> 5,
		        'step' 		=> .5,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	
	$wp_customize->add_setting('socialmag_menu_links_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_menu_links_divider',
	        array(
	            'label'   => __('Menu Links Font Size', 'socialmag'),
	            'section' => 'socialmag_fonts_section',
	            'priority' => 1,
	        )
	    )
	);
	
	// Menu Links Font Size
	$wp_customize->add_setting( 'socialmag_menu_links_font_size',
        array(
			'default' 			=> 14,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_menu_links_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'Menu Link Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 10px / Largest = 25px (Default = 14px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 10,
		        'max' 		=> 25,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	
	$wp_customize->add_setting('socialmag_featured_title_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_featured_title_divider',
	        array(
	            'label'   => __('Home Page Featured Title Font Size', 'socialmag'),
	            'section' => 'socialmag_fonts_section',
	            'priority' => 1,
	        )
	    )
	);
	
	// Featured (Front Page) Title Font Size
	$wp_customize->add_setting( 'socialmag_featured_title_font_size',
        array(
			'default' 			=> 80,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_featured_title_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'Featured Title Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 30px / Largest = 105px (Default = 80px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 30,
		        'max' 		=> 105,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	
	$wp_customize->add_setting('socialmag_heading_size_divider', array(
        'type' => 'headline_control',
    	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
	));
	
	$wp_customize->add_control(
	    new SocialMag_Divider_Label(
	        $wp_customize,
	        'socialmag_heading_size_divider',
	        array(
	            'label'   => esc_html__('Headings Font Size/Spacing Options', 'socialmag'),
	            'section' => 'socialmag_fonts_section',
	            'priority' => 1,
	        )
	    )
	);
	
	// H1 Font Size
	$wp_customize->add_setting( 'socialmag_header_one_font_size',
        array(
			'default' 			=> 39,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_header_one_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'h1 Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 20px / Largest = 75px (Default = 39px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 20,
		        'max' 		=> 75,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	// H1 Letter Spacing
	$wp_customize->add_setting( 'socialmag_header_one_letter_spacing',
        array(
			'default' 			=> -1.5,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_int',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_header_one_letter_spacing',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'Letter Spacing (H1)', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = -10px / Largest = 5px (Default = -1.5px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> -10,
		        'max' 		=> 5,
		        'step' 		=> .5,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	// H2 Grid (Post Thumbnails) Header Font Size
	$wp_customize->add_setting( 'socialmag_header_grid_two_font_size',
        array(
			'default' 			=> 23,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_header_grid_two_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'Grid h2 Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 15px / Largest = 75px (Default = 23px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 15,
		        'max' 		=> 75,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	// H2 Font Size
	$wp_customize->add_setting( 'socialmag_header_two_font_size',
        array(
			'default' 			=> 30,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_header_two_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'h2 Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 15px / Largest = 75px (Default = 30px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 15,
		        'max' 		=> 75,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	// H3 Font Size
	$wp_customize->add_setting( 'socialmag_header_three_font_size',
        array(
			'default' 			=> 23,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_header_three_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'h3 Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 15px / Largest = 75px (Default = 23px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 15,
		        'max' 		=> 75,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	// H4 Font Size
	$wp_customize->add_setting( 'socialmag_header_four_font_size',
        array(
			'default' 			=> 21,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_header_four_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'h4 Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 15px / Largest = 75px (Default = 21px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 15,
		        'max' 		=> 75,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	// H5 Font Size
	$wp_customize->add_setting( 'socialmag_header_five_font_size',
        array(
			'default' 			=> 18,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_header_five_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'h5 Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 15px / Largest = 75px (Default = 18px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 15,
		        'max' 		=> 75,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	// H6 Font Size
	$wp_customize->add_setting( 'socialmag_header_six_font_size',
        array(
			'default' 			=> 15,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_numeric',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_header_six_font_size',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'h6 Font Size', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = 15px / Largest = 75px (Default = 15px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> 15,
		        'max' 		=> 75,
		        'step' 		=> 1,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	// Header Letter Spacing
	$wp_customize->add_setting( 'socialmag_headers_letter_spacing',
        array(
			'default' 			=> -1.5,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_int',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_headers_letter_spacing',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'Letter Spacing (h2, h3, h4, h5, h6)', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = -10px / Largest = 5px (Default = -1.5px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> -10,
		        'max' 		=> 5,
		        'step' 		=> .5,
		        'style' 	=> 'width: 100%;',
	    ),
	) );
	// Featured Slider Letter Spacing
	$wp_customize->add_setting( 'socialmag_featured_slider_letter_spacing',
        array(
			'default' 			=> -6,
			'type' 				=> 'theme_mod',
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'socialmag_sanitize_int',
			'transport' 		=> 'postMessage',
	) );

	$wp_customize->add_control( 'socialmag_featured_slider_letter_spacing',
		array(
		    'type' 			=> 'number',
		    'priority' 		=> 1,
		    'section' 		=> 'socialmag_fonts_section',
		    'label' 		=> esc_html__( 'Letter Spacing for Featured Slider Titles', 'socialmag' ),
		    'description'	=> esc_html__('Smallest = -10px / Largest = 5px (Default = -6px)', 'socialmag'),
		    'input_attrs' 	=> array(
		        'min' 		=> -10,
		        'max' 		=> 5,
		        'step' 		=> .5,
		        'style' 	=> 'width: 100%;',
	    ),
	) );