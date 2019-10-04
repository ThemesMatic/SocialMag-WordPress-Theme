<?php
defined('ABSPATH') or die("please don't run scripts");
/*
* @file           header.php
* @package        SocialMag
* @author         ThemesMatic
* @copyright      2017 ThemesMatic
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- for mobile -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head><!-- /head -->

<body <?php if (get_theme_mod( 'socialmag_boxed_check', 0 ) == 1 ): ?>
		<?php body_class('boxed'); ?>
		<?php else: ?>
		<?php body_class('socialmag'); ?>
		<?php endif; ?>>
		
<?php get_template_part('parts/header', 'one'); ?>