<?php	
defined('ABSPATH') or die("please don't run scripts");
/**
* WARNING: Please do not edit this file
* functionality may be affected
* @file           functions.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/

function socialmag_styles() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/all.min.css');
	wp_enqueue_style( 'socialmag_style', get_stylesheet_uri());
	if ( class_exists('WooCommerce') ):
		wp_enqueue_style( 'socialmag_custom_woocommerce', get_template_directory_uri() . '/woocommerce/css/custom-woocommerce.css');
	endif;
	if ( class_exists('bbPress') ):
		wp_enqueue_style( 'socialmag_custom_bbpress', get_template_directory_uri() . '/bbpress/css/custom-bbpress.css');
	endif;
	if ( function_exists('bp_is_active') ):
		wp_enqueue_style( 'socialmag_custom_buddypress', get_template_directory_uri() . '/buddypress/css/custom-buddypress.css');
	endif;
	if ( is_customize_preview() ):
		wp_enqueue_style( 'socialmag_customizer_style', get_template_directory_uri() . '/css/theme-customizer-preview.css');
	endif;

	if ( get_theme_mod('socialmag_body_font_style_url', '') == '' ):
		wp_enqueue_style( 'socialmag_default_font', esc_url('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,700,800') );
	else:
		wp_enqueue_style( 'socialmag_body_font', esc_url( get_theme_mod('socialmag_body_font_style_url') ) );
	endif;
	if ( get_theme_mod('socialmag_headings_font_style_url', '') != '' || get_theme_mod('socialmag_headings_font_style_url') != get_theme_mod('socialmag_body_font_style_url') ):
		wp_enqueue_style( 'socialmag_headings_font', esc_url( get_theme_mod('socialmag_headings_font_style_url', '') ) );
	endif;
}
add_action( 'wp_enqueue_scripts', 'socialmag_styles' );

function socialmag_scripts() {
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.11.1', true);
	wp_enqueue_script( 'socialmag_js', get_stylesheet_directory_uri() . '/js/socialmag.js', array( 'jquery' ), '1.11.1', true);
	
	if ( is_singular() && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'socialmag_scripts' );

// Registers custom widgets
function socialmag_widgets() {
	register_widget( 'SocialMag_Visit_Us_Widget' );
}
add_action( 'widgets_init', 'socialmag_widgets' );

// Adds SocialMag customizations to the WP Theme Customizer
require get_parent_theme_file_path( '/includes/socialmag-customizer.php' );

// Adds SocialMag visit us widget
require get_parent_theme_file_path( '/widgets/socialmag-visit-us-widget.php' );

// Enable Comments, Pingbacks and Trackbacks
require get_template_directory() . '/includes/socialmag_comments.php';

// Adds Admin Notice and Welcome Page
if( is_admin() ): 
require get_parent_theme_file_path( 'includes/welcome/socialmag-admin.php' );
endif;

// allows only users who can edit theme options to create/edit menus as a security measure             
function themesmatic_menu_fallback() {
	if ( current_user_can('edit_theme_options') ) {
		echo '<ul class="create-menu">
				<li><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . esc_html__('Create a menu', 'socialmag') . '</a></li>
			</ul>';
	}
}

if ( ! function_exists( 'socialmag_setup' ) ) :

// Sets up theme defaults and registers support for various WordPress features.
// Note that this function is hooked into the after_setup_theme hook, which
// runs before the init hook. The init hook is too late for some features, such
// as indicating support for post thumbnails.
function socialmag_setup() {
	// enables international language translation of SocialMag
	load_theme_textdomain( 'socialmag', get_template_directory() . '/languages' );
	
	// Register Nav Bar 
	register_nav_menus( array(
	    'top' => esc_html__( 'Top Menu', 'socialmag' ),
	) );

	// enable post thumbnails & custom sizes
	add_theme_support( 'post-thumbnails' );
	
	set_post_thumbnail_size( 500, 300, array( 'top', 'left')  );
	
	add_image_size( 'socialmag-standard', 1000, 500 , true );
	
	add_image_size( 'socialmag-panels', 2000, 800 , true );
	
	add_image_size( 'socialmag-category-thumb-small', 300, 250, true );
	
	add_image_size( 'socialmag-slider', 750, 280, true );
	
	add_image_size( 'socialmag-narrow-slider', 750, 310, true );
	
	add_image_size( 'socialmag-single-column', 1150, 600 , true );
	
	// enable post formats
	add_theme_support( 'post-formats', array(
		'aside',
		'audio',
		'gallery',
		'quote',
		'image',
		'video',
		'link',
	) );
	
	// Add support for custom logo
	$socialmag_logo = array(
		'width'         => 300,
		'height'        => 70,
		'flex-height' 	=> false,
		'flex-width'  	=> true,
	);
	add_theme_support( 'custom-logo', $socialmag_logo );
	
	$socialmag_header_defaults = array(
		'header-text'	=> false,
		'default-image'	=> get_template_directory_uri() . '/images/purple-mag.jpg',
		'width'			=> 3000,
		'height'		=> 1200,
	);
	add_theme_support( 'custom-header', $socialmag_header_defaults );
	
	// enables the selective refresh of widgets
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	// enables title tags
	add_theme_support( 'title-tag' );
	
	// enable RSS feed links
	add_theme_support( 'automatic-feed-links' );
	
	// adds styles to the editor
	add_editor_style('/css/custom-editor-style.css');
	
	// Adds Custom Background Support
	add_theme_support( 'custom-background' );
	
	// Adds WooCommerce Support
	add_theme_support( 'woocommerce' );
	
	// Adds WooCommerce Gallery Slider, Gallery Zoom, Lightbox Support
	if ( class_exists('WooCommerce') ):
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	endif;

	// enables starter content
	$socialmag_starter_content = array(
		'widgets' => array(
			// Places core defined widgets into widget areas
			'sidebar-1' => array(
				'text_about',
				'search',
				'categories',
				'archives',
			),
			
			'default-left-sidebar' => array(
				'text_about',
				'search',
				'categories',
				'archives',
			),
			
			'socialmag-right-home-sidebar' => array(
				'text_about',
				'search',
				'categories',
				'archives',
			),

			// Places core defined widget(s) in the footer 1 widget area
			'footer-1' => array(
				'text_business_info',
			),
			
			// Places core defined widget(s) in the footer 2 widget area
			'footer-2' => array(
				'meta',
			),
		),

		// Create the custom image attachments used as post thumbnails for pages
		'attachments' => array(
			'image-about' => array(
				'post_title' => _x( 'About', 'Theme starter content', 'socialmag' ),
				'file' => '/images/about.jpg',
			),
			'image-blog' => array(
				'post_title' => _x( 'Blog', 'Theme starter content', 'socialmag' ),
				'file' => '/images/blog.jpg',
			),
			'image-contact-page' => array(
				'post_title' => _x( 'Contact', 'Theme starter content', 'socialmag' ),
				'file' => '/images/contact.jpg',
			),
		),
		
		// Specify the core-defined pages to create and add custom thumbnails
		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-about}}',
				'featured-image' => '{{image-about}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-blog}}',
				'featured-image' => '{{image-blog}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-contact-page}}',
				'featured-image' => '{{image-contact-page}}',
			),
		),
		
		'options' => array(
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menu for registered area in the theme
		'nav_menus' => array(
			// Assign a menu to 'top' section
			'top' => array(
				'name' => esc_html__( 'Top Menu', 'socialmag' ),
				'items' => array(
					'link_home',
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	);
	
	$socialmag_starter_content = apply_filters( 'socialmag_starter_content', $socialmag_starter_content );
	
	add_theme_support( 'starter-content', $socialmag_starter_content );
	
	add_theme_support( 'html5', array(
		'comment-form', 
		'comment-list', 
		'gallery', 
		'caption',
	) );
} // socialmag_setup function
add_action( 'after_setup_theme', 'socialmag_setup' );

// sets content width
if ( ! isset( $content_width ) ) {
	$content_width = 1000;
}	
endif;

function socialmag_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'socialmag_content_width', 1000 );
}
add_action( 'after_setup_theme', 'socialmag_content_width', 0 );

// Register sidebars and widgetized areas.
function socialmag_widget_sidebars() {
	
	register_sidebar(array(
		'name' => esc_html__( 'Default Right Sidebar', 'socialmag' ),
		'id' => 'sidebar-1',
		'description'   => esc_html__( 'Default right sidebar which can be overridden by other widget areas.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Default Left Sidebar', 'socialmag' ),
		'id' => 'default-left-sidebar',
		'description'   => esc_html__( 'Default left sidebar which can be overridden by other widget areas.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Right Home Sidebar', 'socialmag' ),
		'id' => 'socialmag-right-home-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on right.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Left Home Sidebar', 'socialmag' ),
		'id' => 'socialmag-left-home-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on left.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Right Post Sidebar', 'socialmag' ),
		'id' => 'socialmag-right-post-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on right of post.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Left Post Sidebar', 'socialmag' ),
		'id' => 'socialmag-left-post-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on left of post.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Right Page Sidebar', 'socialmag' ),
		'id' => 'socialmag-right-page-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on right of page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Left Page Sidebar', 'socialmag' ),
		'id' => 'socialmag-left-page-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on left of page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Left Category Sidebar', 'socialmag' ),
		'id' => 'socialmag-left-category-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on left of category page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Right Category Sidebar', 'socialmag' ),
		'id' => 'socialmag-right-category-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on right of category page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Left Archives Sidebar', 'socialmag' ),
		'id' => 'socialmag-left-archives-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on left of archives page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Right Archives Sidebar', 'socialmag' ),
		'id' => 'socialmag-right-archives-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on right of archives page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Left Tag Sidebar', 'socialmag' ),
		'id' => 'socialmag-left-tag-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on left of tags page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Right Tag Sidebar', 'socialmag' ),
		'id' => 'socialmag-right-tag-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on right of tags page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Right Author Sidebar', 'socialmag' ),
		'id' => 'socialmag-right-author-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on right of author page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Left Author Sidebar', 'socialmag' ),
		'id' => 'socialmag-left-author-sidebar',
		'description'   => esc_html__( 'Primary sidebar appears on left of author page.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'SiteWide Right Sidebar', 'socialmag' ),
		'id' => 'socialmag-sitewide-right-sidebar',
		'description'   => esc_html__( 'Sidebar that appears sitewide on right (Overrides all other right sidebar widget areas).', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'SiteWide Left Sidebar', 'socialmag' ),
		'id' => 'socialmag-sitewide-left-sidebar',
		'description'   => esc_html__( 'Sidebar that appears sitewide on left (Overrides all other left sidebar widget areas).', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Bottom Center', 'socialmag'),
		'id' => 'footer-1',
		'description'   => esc_html__( 'Footer widget appears in bottom center.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Bottom Right', 'socialmag' ),
		'id' => 'footer-2',
		'description'   => esc_html__( 'Footer widget appears on bottom right.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Adsense (Top Right Sidebar)', 'socialmag' ),
		'id' => 'top-sidebar-ad',
		'description'   => esc_html__( 'Adsense Widget for Top Right Sidebar. Select Text and paste Adsense code into Content area.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Adsense (Home Page Top Center)', 'socialmag'),
		'id' => 'featured-home-page-ad',
		'description'   => esc_html__( 'Adsense Widget for Featured Home Page Ad. Select Text and paste Adsense code into Content area.  If Full Page Grid Display is selected (728x90) is an ideal size.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Adsense (Top Right Sidebar)', 'socialmag'),
		'id' => 'top-right-sidebar-ad',
		'description'   => esc_html__( 'Adsense Widget for Top Right Sidebar. Select Text and paste Adsense code into Content area.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Adsense (Top Left Sidebar)', 'socialmag'),
		'id' => 'top-left-sidebar-ad',
		'description'   => esc_html__( 'Adsense Widget for Top Left Sidebar. Select Text and paste Adsense code into Content area.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Adsense (Footer Banner)', 'socialmag'),
		'id' => 'footer-banner-ad',
		'description'   => esc_html__( 'Adsense Widget for Footer Banner. Select Text and paste Adsense code into Content area.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'My Account Sidebar', 'socialmag'),
		'id' => 'socialmag-myaccount-sidebar',
		'description'   => esc_html__( 'Sidebar that appears next to My Account page in WooCommerce.', 'socialmag' ),
		'before_widget' => '<div class="socialmag-theme-widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
	));
	register_sidebar(array(
		'name' => esc_html__( 'Landing Page Sections', 'socialmag' ),
		'id' => 'socialmag-landing-page',
		'description'   => esc_html__( 'Sections below main section on Landing Page', 'socialmag' ),
		'before_widget' => '<div class="socialmag-landing-widget">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));
}
add_action( 'widgets_init', 'socialmag_widget_sidebars' );

function socialmag_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_archive() ) {
       return str_replace('Month: ', '', $title);
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'socialmag_archive_title' );



// Custom blog post excerpt length
function socialmag_excerpt_length( $socialmag_post_excerpt_value ) {
	$socialmag_post_excerpt_value = absint( get_theme_mod('socialmag_post_excerpt_setting', 20 ) );
	return $socialmag_post_excerpt_value;
}
add_filter( 'excerpt_length', 'socialmag_excerpt_length', 999 );

// read more excerpt
function socialmag_excerpt_more( $more ) {
	$more = esc_html__('&hellip;', 'socialmag');
	return $more;
}
add_filter('excerpt_more', 'socialmag_excerpt_more');

// Add Custom Header Options
require get_parent_theme_file_path( '/includes/custom-header.php' );

// Displays plugin notices on admin backend
if ( is_admin() ){
	require_once get_template_directory() . '/includes/class/class-tgm-plugin-activation.php';	
	require_once get_template_directory() . '/includes/socialmag-plugin-config.php';
}