(function( $ ) {
	// Custom controls by ThemesMatic that enable live preview changes in the theme customizer

	// Updates the site title to postMessage
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( 'a.site-title' ).html( to );
		} );
	} );
	
	//Updates the site description to postMessage
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.tagline' ).html( to );
		} );
	} );
	
	//Updates featured title text to postMessage
	wp.customize( 'socialmag_header_tag_setting', function( value ) {
		value.bind( function( to ) {
			$( '.intro-main-text' ).html( to );
		} );
	} );
	
	//Updates second header text to postMessage
	wp.customize( 'socialmag_header_tag_two_setting', function( value ) {
		value.bind( function( to ) {
			$( '.main-second-intro' ).html( to );
		} );
	} );
	
	//Updates featured button text to postMessage
	wp.customize( 'socialmag_button_text_setting', function( value ) {
		value.bind( function( to ) {
			$( '.featured-button' ).html( to );
		} );
	} );
	
	//Site Title, Menu Links, Article Links, Sidebar Links, Carousel Controls Hover Color
	wp.customize( 'socialmag_accent_color', function( value ) {
		value.bind( function( to ) {
			$('a, .sidebar a, a.carousel-control, .social-network-links a i, .edit-post a, aside li a, .article-nav-links li a').hover(
				function() {
					$(this).css('color', to );
				}, function() {
					$(this).css('color', '');
				} );
		} );
    } );
        
    //Featured Home Page Menu Links Color
	wp.customize( 'socialmag_featured_menu_textcolor', function( value ) {
		value.bind( function( to ) {
			$('.socialmag-transparent-bg.featured a.site-title, .socialmag-transparent-bg.featured ul.top-menu > li > a, .socialmag-transparent-bg.featured i#mobile-navigation, .socialmag-transparent-bg.featured i.search-icon, .socialmag-transparent-bg.featured ul.create-menu > li > a').css('color', to);
		} );
	} );
	
	//Featured Home Page Menu Links Hover Color
	wp.customize( 'socialmag_accent_color', function( value ) {
        value.bind( function( to ) {
            $('.featured a.site-title:hover, .featured .create-menu > li > a:hover, .featured ul.top-menu > li > a:hover, .featured i.search-icon:hover, .bg-menu a.site-title:hover, .bg-menu .create-menu > li > a:hover, .bg-menu ul.top-menu > li > a:hover, .bg-menu i.search-icon:hover, i.search-icon:hover, #magazine-slider.carousel a:hover i').css('color', to);
        } );
    } );
    
    //Featured Home Page Text Color
	wp.customize( 'socialmag_featured_title_color', function( value ) {
		value.bind( function( to ) {
			$('.featured-intro .intro-main-text, .featured-intro .main-second-intro, .featured-intro h2, .featured-intro p, .featured-slider .carousel-caption h2, .featured-slider .carousel-caption p').css('color', to );
		} );
	} );
	
	//Featured Button Text Color
	wp.customize( 'socialmag_featured_button_text_color', function( value ) {
		value.bind( function( to ) {
			$('.btn-primary.featured-button').css('color', to );
		} );
	} );
	
	//WooCommerce Button Colors
	wp.customize( 'socialmag_accent_color', function( value ) {
		value.bind( function( to ) {
			$('.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page a.added_to_cart, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button').hover(
				function() {
					$(this).css('background', to );
					$(this).css('color', '#fff' );	
				}, function() {
					$(this).css('background', '' );
				} );
		} );
    } );
	
	//Button Border Color
	wp.customize( 'socialmag_accent_color', function( value ) {
		value.bind( function( to ) {
			$('.btn-primary.featured-button').css('border-color', to );
		} );
	} );
	
	//Footer Text Color
	wp.customize( 'socialmag_footer_textcolor', function( value ) {
		value.bind( function( to ) {
			$('footer a.site-title, footer p, .footer-tml a, .bottom-title p.tagline, footer .socialmag-theme-widget h3, footer .socialmag-theme-widget a, footer .textwidget p, footer .footer-attr p, footer .footer-attr a').css('color', to );
		} );
	} );
	
	//Body Text Color
	wp.customize( 'socialmag_body_textcolor', function( value ) {
		value.bind( function( to ) {
			$('article p').css('color', to );
		} );
	} );
	
	//Background Color
	wp.customize( 'socialmag_site_background_color', function( value ) {
		value.bind( function( to ) {
			$('body').css('background', to );
		} );
	} );
	
	// Site title font size
	wp.customize( 'socialmag_site_title_font_size', function( value ) {
		value.bind( function( to ) {
			$('a.site-title').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_site_title_font_size', function( value ) {
		value.bind( function( to ) {
			$('a.site-title').css('line-height', to + 'px' );
		} );
	} );
	
	// Menu link font size
	wp.customize( 'socialmag_menu_links_font_size', function( value ) {
		value.bind( function( to ) {
			$('ul.top-menu > li > a, .search-icon, ul.sub-menu li a').css('font-size', to + 'px' );
		} );
	} );
	
	// Body font size
	wp.customize( 'socialmag_body_font_size', function( value ) {
		value.bind( function( to ) {
			$('article p').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_body_font_size', function( value ) {
		value.bind( function( to ) {
			$('article p').css('line-height', to + 'px' );
		} );
	} );
	
	// Letter Spacing for Site Title
	wp.customize( 'socialmag_letter_spacing_site_title', function( value ) {
		value.bind( function( to ) {
			$('a.site-title').css('letter-spacing', to + 'px' );
		} );
	} );
	
	// Letter Spacing for Header One
	wp.customize( 'socialmag_header_one_letter_spacing', function( value ) {
		value.bind( function( to ) {
			$('h1').css('letter-spacing', to + 'px' );
		} );
	} );
	
	// Letter Spacing for Headers
	wp.customize( 'socialmag_headers_letter_spacing', function( value ) {
		value.bind( function( to ) {
			$('h2, h2 a, h3, h4, h5, h6').css('letter-spacing', to + 'px' );
		} );
	} );
	
	// Featured Title font size
	wp.customize( 'socialmag_featured_title_font_size', function( value ) {
		value.bind( function( to ) {
			$('h1.intro-main-text, .intro-main-text, .page .socialmag-portfolio h1').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_featured_title_font_size', function( value ) {
		value.bind( function( to ) {
			$('h1.intro-main-text, .intro-main-text, .page .socialmag-portfolio h1').css('line-height', to + 'px' );
		} );
	} );
	
	// Changes header text font size
	wp.customize( 'socialmag_header_one_font_size', function( value ) {
		value.bind( function( to ) {
			$('h1.post, .archives h1, .category h1, .tag h1, .page h1, section h1').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_one_font_size', function( value ) {
		value.bind( function( to ) {
			$('h1.post, .archives h1, .category h1, .tag h1, .page h1, section h1').css('line-height', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_two_font_size', function( value ) {
		value.bind( function( to ) {
			$('.featured-intro h2, h2.sticky, .single-post h2, .single-post h2 a .search-results h2, .search-results h2 a').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_two_font_size', function( value ) {
		value.bind( function( to ) {
			$('.featured-intro h2, h2.sticky, .single-post h2, .single-post h2 a .search-results h2, .search-results h2 a').css('line-height', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_grid_two_font_size', function( value ) {
		value.bind( function( to ) {
			$('#grid article h2, #grid article h2 a').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_grid_two_font_size', function( value ) {
		value.bind( function( to ) {
			$('#grid article h2, #grid article h2 a').css('line-height', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_three_font_size', function( value ) {
		value.bind( function( to ) {
			$('h3').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_three_font_size', function( value ) {
		value.bind( function( to ) {
			$('h3').css('line-height', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_four_font_size', function( value ) {
		value.bind( function( to ) {
			$('h4').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_four_font_size', function( value ) {
		value.bind( function( to ) {
			$('h4').css('line-height', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_five_font_size', function( value ) {
		value.bind( function( to ) {
			$('h5').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_five_font_size', function( value ) {
		value.bind( function( to ) {
			$('h5').css('line-height', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_six_font_size', function( value ) {
		value.bind( function( to ) {
			$('h6').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'socialmag_header_six_font_size', function( value ) {
		value.bind( function( to ) {
			$('h6').css('line-height', to + 'px' );
		} );
	} );
	
	//Preview Size of Social Icons
	wp.customize( 'socialmag_themesmatic_icon_size', function( value ) {
		value.bind( function( to ) {
			$('.social-network-links a i').css('font-size', to + 'px' );
		} );
	} );
	
	$(window).scroll(function() {
		if ($('header.frontpage').length) {
			var scroll = $(window).scrollTop();
			if (scroll >= 50) {
				$('.masthead').addClass('bg-menu');
			} else {
				$('.masthead').removeClass('bg-menu');
			}
		}
	}).scroll();
	// Custom controls by ThemesMatic that enable live preview changes in the theme customizer
} )( jQuery );