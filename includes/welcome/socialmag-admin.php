<?php function socialmag_admin_notice__success() { ?>
<div class="notice notice-success is-dismissible">
    <p><?php esc_html_e( 'Welcome to SocialMag! Be sure to visit our', 'socialmag'); ?> <a href="<?php echo esc_url( admin_url( 'themes.php?page=socialmag-welcome') ); ?>"> <?php esc_html_e('Welcome Page', 'socialmag'); ?> </a> <?php esc_html_e('to get started.', 'socialmag' ); ?></p> <p><a href="<?php echo esc_url( admin_url('themes.php?page=socialmag-welcome')); ?>" class="button button-primary"><?php esc_html_e('Get Started w/SocialMag', 'socialmag'); ?></a></p>
</div>
<?php }
add_action( 'admin_notices', 'socialmag_admin_notice__success' );

// Creates Admin menu
function socialmag_admin_menu() {
	add_theme_page( esc_html__('Welcome to SocialMag!', 'socialmag'), esc_html__('SocialMag Welcome', 'socialmag'), 'edit_theme_options', 'socialmag-welcome', 'socialmag_admin_page' );
}
add_action( 'admin_menu', 'socialmag_admin_menu' );

// Loads Admin CSS
function socialmag_admin_styles($hook) {
	if( 'appearance_page_socialmag-welcome' != $hook) {
		return;
	}
	// Enqueue  CSS
	wp_enqueue_style( 'socialmag_admin_css', get_theme_file_uri('/includes/welcome/css/socialmag-admin.css'), array(), '1.0.0');
}
add_action( 'admin_enqueue_scripts', 'socialmag_admin_styles');

// Creates Welcome Page content
function socialmag_admin_page() {
	$socialmag_theme = wp_get_theme(); ?>
	
	<div class="wrap socialmag-admin">
		
		<h1><?php esc_html_e('Welcome to&nbsp;', 'socialmag'); echo $socialmag_theme->get( 'Name' ); esc_html_e('!', 'socialmag'); ?></h1>
		
		<div class="socialmag-wrap">
			
			<img class="socialmag-pro" src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png'); ?>" alt="socialmag theme" />
			
			<div class="socialmag-content">
				<h2><?php esc_html_e('About&nbsp;', 'socialmag'); echo $socialmag_theme->get( 'Name' ); esc_html_e('&nbsp;Version&nbsp;', 'socialmag'); echo $socialmag_theme->get( 'Version' ); ?></h2>
				<p class="socialmag-rating"><?php esc_html_e('If you like SocialMag, please write a', 'socialmag'); ?> <a href="<?php echo esc_url( 'https://wordpress.org/support/theme/socialmag/reviews/'); ?>" target="_blank"><?php esc_html_e('&#9733;&#9733;&#9733;&#9733;&#9733;', 'socialmag'); ?></a> <?php esc_html_e('Rating.', 'socialmag'); esc_html_e('&nbsp;Thank you for being awesome!', 'socialmag'); ?></p>
				<p class="socialmag-description"><?php echo $socialmag_theme->get( 'Description' ); ?></p>
				<div class="socialmag-btn-bar">
					<p><a href="<?php echo esc_url('https://www.themesmatic.com/documentation/socialmag'); ?>" class="button button-primary"><?php esc_html_e('Documentation', 'socialmag'); ?></a></p>
					<p><a href="<?php echo esc_url( admin_url('customize.php') ); ?>" class="button button-primary"><?php esc_html_e('Start Customizing SocialMag', 'socialmag'); ?></a></p>
				</div><!-- socialmag-btn-bar -->
			</div><!-- socialmag-content -->

		</div><!-- socialmag-wrap -->
	
	</div><!-- wrap -->	
	
	<div class="socialmag-card">
		
	</div><!-- socialmag-card -->
	
	<?php } // end socialmag admin page ?>