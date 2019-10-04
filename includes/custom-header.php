<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           custom-header.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/

function socialmag_header_setup() {
/**
* enable header image
*/
add_theme_support( 'custom-header', apply_filters( 'social_mag_header_args', array(
	'default-image' => get_parent_theme_file_uri( '/images/socialmag-orange.png' ),
	'flex-width'    => true,
	'flex-height'   => true,
	'width'         => 1500,
	'height'        => 800,
	'video' 		=> true,

) ) );
/*
* Register Default Header Image
*/
register_default_headers( array(
	'default-image' => array(
		'url'           => get_parent_theme_file_uri('/images/socialmag-orange.png'),
		'thumbnail_url' => get_parent_theme_file_uri('/images/socialmag-orange.png'),
		'description'   => esc_html__( 'Social Mag Featured', 'socialmag' )
	)
) );

} //socialmag_header_setup
add_action( 'after_setup_theme', 'socialmag_header_setup');
/*
* Header Video Controls
*/ 
function socialmag_video_controls( $video_settings ) {
    $video_settings['l10n']['play'] = '<i class="fa fa-play" aria-hidden="true"></i>';
    $video_settings['l10n']['pause'] = '<i class="fa fa-pause" aria-hidden="true"></i>';
    return $video_settings;
}
add_filter( 'header_video_settings', 'socialmag_video_controls' );