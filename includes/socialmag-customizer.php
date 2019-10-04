<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           socialmag-customizer.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
	if( class_exists( 'WP_Customize_Control' ) ):
		class SocialMag_Divider_Label extends WP_Customize_Control {
		public $label = '';
	    public function render_content() { ?>
		     <h3 class="socialmag-divider-label"><?php echo esc_html( $this->label ); ?></h3>
	    <?php }
		}
	endif;
	
	function socialmag_themesmatic_customize_register( $wp_customize ) {
	
	//*********************************************************************************
	// Adds New Class Content for Customizer Panel

    require get_template_directory() . '/includes/class/customizer-class.php';
	    
    $wp_customize->get_section('header_image')->priority = 20;
    $wp_customize->get_section('colors')->priority = 21;
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    
    //*********************************************************************************
	// Adds Selective Refresh to Customizer Panel Controls (if PHP Version is greater than 5.2)
	$socialmag_version_check = phpversion();
	
	if( $socialmag_version_check > 5.2 ):
		require get_template_directory() . '/includes/sections/selective-refresh.php';
	endif;
    
    //*********************************************************************************
	// Creates New Sections for Theme Customizer
 
	require get_template_directory() . '/includes/sections/add-sections.php';
    
    //*********************************************************************************
	// Adds Settings & Controls for New Classess 
    
    $wp_customize->add_setting( 'socialmag_themesmatic_upsell_panel', array(
        'default'	=> '',
        'sanitize_callback' => 'esc_html'
    ) );
    
    $wp_customize->add_control( new SocialMag_Themesmatic_Display_Content(
		$wp_customize,
			'socialmag_themesmatic_upsell_panel',
				array(
					'section'	=> 'socialmag_themesmatic_upsell_panel',
					'priority'	=> 1,
					)
	) );
    
    //******************************************************************************/
    // Colors Settings & Controls
    
    require get_template_directory() . '/includes/sections/socialmag-colors.php';
	
    //******************************************************************************/
    // Home Page Featured Settings & Controls
    
    require get_template_directory() . '/includes/sections/socialmag-featured-section.php';
        
    //******************************************************************************/
    // Sidebar Settings & Controls
    
    require get_template_directory() . '/includes/sections/socialmag-sidebar-section.php';
        
    //******************************************************************************/
    // Fonts + Size Settings & Controls
    
    require get_template_directory() . '/includes/sections/socialmag-fonts-section.php';
    
    //******************************************************************************/
    // Front Page Settings & Controls
	
	require get_template_directory() . '/includes/sections/socialmag-front-page-section.php';

    //******************************************************************************/
    // Adds Social Network Icons and links
    
    $socialmag_themesmatic_social = array(
		        'none'			=> '-',
	            'amazon'		=> esc_html__('Amazon', 'socialmag'),
				'behance'		=> esc_html__('Behance', 'socialmag'),
				'digg'			=> esc_html__('Digg', 'socialmag'),
				'etsy'			=> esc_html__('Etsy', 'socialmag'),
				'dribbble'		=> esc_html__('Dribbble', 'socialmag'),
				'facebook'		=> esc_html__('Facebook', 'socialmag'),
				'flickr'		=> esc_html__('Flickr', 'socialmag'),
				'github'		=> esc_html__('Github', 'socialmag'),
				'google-plus'	=> esc_html__('Google Plus', 'socialmag'),
				'instagram'		=> esc_html__('Instagram', 'socialmag'),
				'imdb'			=> esc_html__('IMDB', 'socialmag'),
				'lastfm'		=> esc_html__('LastFM', 'socialmag'),
				'linkedin'		=> esc_html__('Linked In', 'socialmag'),
				'pinterest'		=> esc_html__('Pinterest', 'socialmag'),
				'podcast'		=> esc_html__('Podcast', 'socialmag'),
				'reddit-alien'	=> esc_html__('Reddit', 'socialmag'),
				'spotify'		=> esc_html__('Spotify', 'socialmag'),
				'soundcloud'	=> esc_html__('Soundcloud', 'socialmag'),
				'tumblr'		=> esc_html__('Tumblr', 'socialmag'),
				'twitter'		=> esc_html__('Twitter', 'socialmag'),
				'twitch'		=> esc_html__('Twitch', 'socialmag'),
				'vine'			=> esc_html__('Vine', 'socialmag'),
				'vimeo'			=> esc_html__('Vimeo', 'socialmag'),
				'youtube'		=> esc_html__('Youtube', 'socialmag'),
				'wordpress'		=> esc_html__('WordPress', 'socialmag'),
				'vk'			=> esc_html__('VK','socialmag'),
				'xing'			=> esc_html__('Xing','socialmag'),
	);
	
	//******************************************************************************/
    // Social Network Settings & Controls
    
	require get_template_directory() . '/includes/sections/socialmag-network-icons-section.php';
   
	//Sanitizes Social Selection
	function socialmag_sanitize_social( $input ) {
	    $socialmag_themesmatic_social = array(
		        'none'			=> '-',
		        'amazon'		=> 'Amazon',
				'behance'		=> 'Behance',
				'digg'			=> 'Digg',
				'etsy'			=> 'Etsy',
				'dribbble'		=> 'Dribbble',
				'facebook'		=> 'Facebook',
				'flickr'		=> 'Flickr',
				'github'		=> 'Github',
				'google-plus'	=> 'Google Plus',
				'instagram'		=> 'Instagram',
				'imdb'			=> 'IMDB',
				'lastfm'		=> 'LastFM',
				'linkedin'		=> 'Linked In',
				'pinterest'		=> 'Pinterest',
				'podcast'		=> 'Podcast',
				'reddit-alien'	=> 'Reddit',
				'spotify'		=> 'Spotify',
				'soundcloud'	=> 'Soundcloud',
				'tumblr'		=> 'Tumblr',
				'twitter'		=> 'Twitter',
				'twitch'		=> 'Twitch',
				'vine'			=> 'Vine',
				'vimeo'			=> 'Vimeo',
				'youtube'		=> 'Youtube',
				'wordpress'		=> 'WordPress',
				'vk'			=> 'VK',
				'xing'			=> 'Xing',
				);
	 
	    if ( array_key_exists( $input, $socialmag_themesmatic_social ) ) {
	        return $input;
	    } else {
	        return '';
	    }
	} //end socialmag_sanitize_social
			
	// Sanitizes Checkboxes
	function socialmag_sanitize_checkbox( $input ) {
		if ( $input == 1 ) {
			return 1;
		} else {
			return '';
		}
	} //end socialmag_sanitize_checkbox
	
	// Sanitizes Numeric Input (Non-Negative)
	function socialmag_sanitize_numeric( $input ) {
		return absint( $input );
	} //end socialmag_sanitize_numeric
	
	// Sanitizes Numeric Input
	function socialmag_sanitize_int( $int ) {
		return intval( $int );
	} //end socialmag_sanitize_int
	
	// Sanitize Radio Button (Grid Choice)
	function socialmag_sanitize_grid( $input ) {
		$valid_grid = array( 'standard', 'category', 'fullpage', 'magazine' );
		
		return in_array( $input, $valid_grid ) ? $input : '';
	} //end socialmag_sanitize_grid
	
	// Sanitize Column Number Choice
	function socialmag_sanitize_column_choice( $input ){
		$valid_column = array( 'two-columns', 'three-columns', 'four-columns' );
		
		return in_array( $input, $valid_column ) ? $input : '';
	} //end socialmag_sanitize_column_choice
	
	// Sanitize Header Choices
	function socialmag_sanitize_header_choice( $input ) {
		$valid_header_choice = array( 'header-one', 'header-two' );
		
		return in_array( $input, $valid_header_choice ) ? $input : '';
	} //end socialmag_sanitize_header_choice
	
	// Sanitize Header Display Position
	function socialmag_sanitize_header( $input ){
		$valid_header_display = array( 'fixed', 'absolute' );
		
		return in_array( $input, $valid_header_display ) ? input : '';
	}
	
	// Sanitize Contact Form Layout
	function socialmag_sanitize_contact_layout( $input ) {
		$valid_contact_layout = array( 'full-width', 'side-by-side' );
		
		return in_array( $input, $valid_contact_layout ) ? $input : '';
	}
	
	// Sanitize Sidebar Icons Location Choice
	function socialmag_sanitize_icons_location( $input ) {
		$valid_location = array( 'left', 'right' );
		
		return in_array( $input, $valid_location ) ? $input : '';
	} //end socialmag_sanitize_icons_location
	
	// Sanitize App Store Image Choice
	function socialmag_sanitize_app_image( $input ) {
		$valid_app_choice = array( 'app-no-image', 'app-image' );
		
		return in_array( $input, $valid_app_choice ) ? $input : '';
	} //end socialmag_sanitize_app_image
	
	// Custom active callbacks
	function socialmag_is_single_post() {
		return is_single();
	}
	
	function socialmag_is_single_page() {
		return is_page();
	}
	
	// sanitize sidebar position choices
	function socialmag_left_sidebar_active() {
		if ( is_front_page() ):
		return get_theme_mod('socialmag_left_sidebar_home_check', 0 );
		elseif ( is_single() ):
		return get_theme_mod('socialmag_left_sidebar_single_check', 0 );
		elseif ( is_page() ):
		return get_theme_mod('socialmag_left_sidebar_page_check', 0 );
		endif;
	} // end socialmag_left_sidebar_active
	
	function socialmag_right_sidebar_active() {
		if ( is_single() ):
		return is_dynamic_sidebar('socialmag-right-page-sidebar');
		endif;
	} // end socialmag_right_sidebar_active
		
} // end socialmag_themesmatic_customize_register function
	
	//******************************************************************************/
    // Outputs Generated Theme Customizer CSS
    
	require get_template_directory() . '/includes/sections/customizer-css-output.php';

	// Sets up Theme Customizer setting and controls
	add_action( 'customize_register' , 'socialmag_themesmatic_customize_register' );
	
	// Adds styling scripts to theme customizer
	add_action( 'customize_controls_enqueue_scripts', 'socialmag_customizer_scripts' );
	
	function socialmag_customizer_scripts() {
		wp_enqueue_style( 'socialmag_customizer_style', get_template_directory_uri(). '/css/theme-customizer-panel.css');
		wp_enqueue_style( 'socialmag_font_awesome_style', get_template_directory_uri(). '/css/font-awesome.min.css');
	} //end socialmag_customizer_scripts
	
	// Updates some live setting previews to 'postMessage' from the default 'refresh' and loads scripts
	add_action( 'customize_preview_init', 'socialmag_customizer_preview_js' );
	
	function socialmag_customizer_preview_js() {
		wp_enqueue_script( 'socialmag-customizer-preview', get_template_directory_uri() . '/js/customizer/customizer-preview.js', array( 'customize-preview' ), '', true );
	} //end socialmag_customizer_preview_js
	
	//******************************************************************************/
    // Outputs Customizer Scripts
    
    // Adds custom scripts to theme customizer
	add_action( 'customize_controls_print_footer_scripts', 'customizer_custom_scripts' );
	
	require get_template_directory() . '/includes/sections/socialmag-customizer-scripts.php';