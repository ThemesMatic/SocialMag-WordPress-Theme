<?php
	function wpdocs_styles_method() {
    wp_enqueue_style(
        'socialmag-custom-style',
        get_template_directory_uri() . '/css/customizer.css'
    );
    // create css variable values
    
    	$socialmag_site_width = intval( get_theme_mod( 'socialmag_site_width', 1080 ) );
    
    	$socialmag_headings_font_style = sanitize_text_field( get_theme_mod( 'socialmag_headings_font_style_family', '' ) );
        
        $socialmag_body_font_style = sanitize_text_field( get_theme_mod( 'socialmag_body_font_style_family', 'font-family: "Montserrat", sans-serif;' ) );
        
        $socialmag_site_title_size = intval( get_theme_mod( 'socialmag_site_title_font_size', 40 ) );
        
        $socialmag_header_one_spacing = intval( get_theme_mod( 'socialmag_header_one_letter_spacing', -1.49 ) );
        
        $socialmag_headers_letter_spacing = intval( get_theme_mod( 'socialmag_headers_letter_spacing', -1.49 ) );
        
        $socialmag_header_footer_spacing = intval( get_theme_mod( 'socialmag_letter_spacing_site_title', -3 ) );
        
		$socialmag_menu_item_font_size = intval( get_theme_mod( 'socialmag_menu_links_font_size', 14 ) );
		
		$socialmag_featured_title_font_size = intval( get_theme_mod( 'socialmag_featured_title_font_size', 80 ) );
		
		$archive_post_header_size = intval( get_theme_mod( 'socialmag_header_one_font_size', 39 ) );
		
        $socialmag_article_font_size = intval( get_theme_mod( 'socialmag_body_font_size', 15 ) );
        
        $socialmag_grid_header_font_size = intval( get_theme_mod( 'socialmag_header_grid_two_font_size', 23 ) );
        
        $socialmag_header_two_font_size = intval( get_theme_mod( 'socialmag_header_two_font_size', 30 ) );
        
        $socialmag_header_three_font_size = intval( get_theme_mod( 'socialmag_header_three_font_size', 23 ) );
        
        $socialmag_header_four_font_size = intval( get_theme_mod( 'socialmag_header_four_font_size', 21 ) );

        $socialmag_header_five_font_size = intval( get_theme_mod( 'socialmag_header_five_font_size', 18 ) );
        
        $socialmag_header_six_font_size = intval( get_theme_mod( 'socialmag_header_six_font_size', 15 ) );
        
        $socialmag_icon_font_size = intval( get_theme_mod( 'socialmag_themesmatic_icon_size', 25 ) );
        
        $socialmag_accent_color = esc_attr( get_theme_mod( 'socialmag_accent_color', '#e10b00' ) );
        
        $socialmag_featured_title_color = esc_attr( get_theme_mod( 'socialmag_featured_title_color', '#fff') );
        
        $socialmag_footer_textcolor = esc_attr( get_theme_mod( 'socialmag_footer_textcolor', '#777') );
        
        $socialmag_body_textcolor = esc_attr( get_theme_mod( 'socialmag_body_textcolor', '#333' ) );
        
        $socialmag_featured_menu_textcolor = esc_attr( get_theme_mod( 'socialmag_featured_menu_textcolor', '#fff' ) );
        
        $socialmag_site_background_color = esc_attr( get_theme_mod( 'socialmag_site_background_color',  '#fff') );
        
    // create custom css from those variables
        $custom_css = "
        		.boxed header, .boxed #nav-container, .boxed .container, .boxed .wrap, .boxed footer {
        			max-width: {$socialmag_site_width}px;
					margin: 0 auto;
				}
        		
                body,
				.page .intro-main-text,
				.bbpress .wp-editor-area {
					$socialmag_body_font_style
				}
				
				.site-title,
				h1,
				.login h1 a,
				h2,
				h3,
				h4,
				h5,
				h6 {
					$socialmag_headings_font_style
				}
				
				h1 {
					letter-spacing: {$socialmag_header_one_spacing}px;
				}
				
				h2,
				h2 a,
				article h2 a,
				h3,
				h4,
				h5,
				h6 {
					letter-spacing: {$socialmag_headers_letter_spacing}px;
				}
				
                .masthead a.site-title,
				footer a.site-title {
                	font-size: {$socialmag_site_title_size}px;
                	line-height: 1;
                	letter-spacing: {$socialmag_header_footer_spacing}px;
                }
                
                ul.top-menu > li > a,
				.search-icon,
				ul.sub-menu li a {
					font-size: {$socialmag_menu_item_font_size}px;
				}
				
				.page h1.intro-main-text,
				.page h2.intro-main-text,
				.intro-main-text,
				.page .socialmag-portfolio h1 {
					font-size: {$socialmag_featured_title_font_size}px;
					line-height: {$socialmag_featured_title_font_size}px;
				}
				
				h1.post,
				.archives h1,
				.category h1,
				.tag h1,
				.page h1,
				section h1 {
					font-size: {$archive_post_header_size}px;
					line-height: {$archive_post_header_size}px;
				}
				                
                article p {
	                font-size: {$socialmag_article_font_size}px;
	                line-height: 1.5;
	                color: {$socialmag_body_textcolor};
	            }
	            
	            #grid article h2,
				#grid article h2 a {
					font-size: {$socialmag_grid_header_font_size}px;
					line-height: {$socialmag_grid_header_font_size}px;
				}
				
				h2.sticky,
				.single-post h2,
				.single-post h2 a .search-results h2,
				.search-results h2 a {
					font-size: {$socialmag_header_two_font_size}px;
					line-height: {$socialmag_header_two_font_size}px;
				}
				
				h3 {
					font-size: {$socialmag_header_three_font_size}px;
					line-height: {$socialmag_header_three_font_size}px;
				}
				
				h4 {
					font-size: {$socialmag_header_four_font_size}px;
					line-height: {$socialmag_header_four_font_size}px;
				}
				
				h5 {
					font-size: {$socialmag_header_five_font_size}px;
					line-height: {$socialmag_header_five_font_size}px;
				}
				
				h6 {
					font-size: {$socialmag_header_six_font_size}px;
					line-height: {$socialmag_header_six_font_size}px;
				}
				
				.social-network-links a .fa {
					font-size: {$socialmag_icon_font_size}px;
				}
				
				a:hover,
				.create-menu > li > a:hover,
				ul.top-menu > li > a:hover,
				i.search-icon:hover,
				.featured .create-menu > li > a:hover,
				.featured ul.top-menu > li > a:hover,
				.featured i.search-icon:hover,
				.edit-post a:hover,
				.socialmag-theme-widget a:hover,
				.article-nav-links li a:hover,
				a.carousel-control:hover i,
				.authorship a:hover,
				.pagination a:hover,
				ul.error-articles li a:hover,
				.social-network-links a i:hover,
				.woocommerce .product_meta a:hover {
					color: {$socialmag_accent_color};
				}
				
				.btn-primary.featured-button,
				.btn-primary.featured-button:hover,
				.btn-primary.landing-page-closing-button,
				.btn-primary.landing-page-closing-button:hover,
				.btn-primary.socialmag-about-button:hover,
				.btn-primary:hover,
				input#submit:hover,
				input#contact-submit:hover,
				input.wpcf7-form-control[type='submit']:hover,
				.carousel-indicators li:hover,
				.wrap ins, .woocommerce-account .addresses .title .edit:hover,
				#subscription-toggle a:hover,
				.select2-container--default .select2-results__option--highlighted[aria-selected],
				.post-password-form input[type='submit']:hover,
				.woocommerce #respond input#submit.alt:hover,
				.woocommerce a.button.alt:hover,
				.woocommerce button.button.alt:hover,
				.woocommerce input.button.alt:hover,
				.woocommerce #respond input#submit:hover,
				.woocommerce a.button:hover,
				.woocommerce button.button:hover,
				.woocommerce input.button:hover,
				.woocommerce a.added_to_cart,
				.select2-container--default .select2-results__option--highlighted[aria-selected] {
					background: {$socialmag_accent_color};
				}
				
				.btn-primary.featured-button,
				.btn-primary:hover {
					border-color: {$socialmag_accent_color};
				}
				
				.featured-intro .intro-main-text,
				.featured-intro .main-second-intro,
				.featured-intro h2,
				.featured-intro h3,
				.featured-intro p {
					color: {$socialmag_featured_title_color};
				}
				
				footer p,
				.footer-tml a,
				.footer-tml a:hover,
				.bottom-title p.tagline,
				footer .socialmag-theme-widget h3,
				footer .socialmag-theme-widget a {
					color: {$socialmag_footer_textcolor};
				}
				
				.featured a.site-title,
				.featured  ul.top-menu > li > a,
				.featured  i#mobile-navigation,
				.featured i.search-icon,
				.featured ul.create-menu li a {
					color: {$socialmag_featured_menu_textcolor};
				}
				
				body {
					background: {$socialmag_site_background_color};	
				}
				
				
                ";
    // pass those new styles to the customizer.css stylesheet
        wp_add_inline_style( 'socialmag-custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_styles_method' );