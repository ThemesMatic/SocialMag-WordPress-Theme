<?php
 
class SocialMag_Visit_Us_Widget extends WP_Widget {

public function __construct() {
	$socialmag_visit_widget = array(
		'classname' => 'socialmag_visit_us',
		'description' => esc_html__('Address and Visitation Info', 'socialmag'),
		'customize_selective_refresh' => true,
	);
		parent::__construct( 'socialmag_visit_us', esc_html__('Address and Visitation Info', 'socialmag'), $socialmag_visit_widget );
	}
	
	// Render widget on front end and set defaults
	function widget($args, $instance) {
		        
		$instance = wp_parse_args( (array) $instance, array(
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
			'before_widget' => '<div class="socialmag-theme-widget">',
			'after_widget'  => '</div>',
			'title' => esc_html__('Address and Visitation Info', 'socialmag'),
			'socialmag_street_address' => esc_html( '345 Ocean Drive' ),
			'socialmag_city_state' => esc_html( 'Santa Monica, CA' ),
			'socialmag_zip_code' => intval('90405'),
			'socialmag_weekdays' => esc_html( 'Mon-Fri' ),
			'socialmag_altdays' => esc_html( '' ),
			'socialmag_weekends' => esc_html( 'Sat-Sun' ),
			'socialmag_weekday_hours' => esc_html( '8am-5pm' ),
			'socialmag_alt_hours' => esc_html( '10am-7pm' ),
			'socialmag_weekend_hours' => esc_html( '9am-6pm' ),
		));
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		$socialmag_street = esc_html($instance['socialmag_street_address']);
		$socialmag_city_state = esc_html($instance['socialmag_city_state']);
		$socialmag_zip_code = intval($instance['socialmag_zip_code']);
		
		$socialmag_weekdays = esc_html($instance['socialmag_weekdays']);
		$socialmag_weekends = esc_html($instance['socialmag_weekends']);
		$socialmag_altdays = esc_html($instance['socialmag_altdays']);
		
		$socialmag_weekday_hours = esc_html($instance['socialmag_weekday_hours']);
		$socialmag_weekend_hours = esc_html($instance['socialmag_weekend_hours']);
		$socialmag_alt_hours = esc_html($instance['socialmag_alt_hours']);
		
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title']; ?>
		
		<address class="socialmag-visit-us-widget">
			<p class="widget-address"><?php esc_html_e('Location', 'socialmag'); ?></p>
			<p><?php echo $socialmag_street; ?></p>
			<p><?php echo $socialmag_city_state; echo ', '; echo $socialmag_zip_code; ?></p>
			<p class="widget-hours"><?php esc_html_e('Hours', 'socialmag'); ?></p>
			<p><?php echo $socialmag_weekdays; echo ': '; echo $socialmag_weekday_hours; ?></p>
			<p><?php echo $socialmag_weekends; echo ': '; echo $socialmag_weekend_hours; ?></p>
			<?php if ($socialmag_altdays != ''): ?>
			<p><?php echo $socialmag_altdays; echo ': '; echo $socialmag_alt_hours; ?></p>
			<?php endif; ?>
		</address>

		<?php echo $args['after_widget'];
	}
	
	// Update new instances from old instances
	function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['title']                          = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['socialmag_street_address']       = ( ! empty( $new_instance['socialmag_street_address'] ) ) ? sanitize_text_field($new_instance['socialmag_street_address']) : '';
        $instance['socialmag_city_state'] = ( ! empty( $new_instance['socialmag_city_state'] ) ) ? sanitize_text_field($new_instance['socialmag_city_state']) : '';
        $instance['socialmag_zip_code']      = ( ! empty( $new_instance['socialmag_zip_code'] ) ) ? sanitize_text_field($new_instance['socialmag_zip_code']) : '';
        $instance['socialmag_weekdays']           = ( ! empty( $new_instance['socialmag_weekdays'] ) ) ? sanitize_text_field($new_instance['socialmag_weekdays']) : '';
        $instance['socialmag_altdays']      = ( ! empty( $new_instance['socialmag_altdays'] ) ) ? sanitize_text_field($new_instance['socialmag_altdays']) : '';
        $instance['socialmag_weekends'] = ( ! empty( $new_instance['socialmag_weekends'] ) ) ? sanitize_text_field($new_instance['socialmag_weekends']) : '';
        $instance['socialmag_weekday_hours'] = ( ! empty( $new_instance['socialmag_weekday_hours'] ) ) ? sanitize_text_field($new_instance['socialmag_weekday_hours']) : '';
		$instance['socialmag_alt_hours'] = ( ! empty( $new_instance['socialmag_alt_hours'] ) ) ? sanitize_text_field($new_instance['socialmag_alt_hours']) : '';
		$instance['socialmag_weekend_hours'] = ( ! empty( $new_instance['socialmag_weekend_hours'] ) ) ? sanitize_text_field($new_instance['socialmag_weekend_hours']) : '';

        return $new_instance;
    }
	
	//Render widget form on back end with set defaults
	function form($instance) {
		$instance = wp_parse_args( (array) $instance, array(
			'socialmag_street_address' => esc_html( '345 Ocean Drive' ),
			'socialmag_city_state' => esc_html( 'Santa Monica, CA' ),
			'socialmag_zip_code' => intval('90405'),
			'socialmag_weekdays' => esc_html( 'Mon-Fri' ),
			'socialmag_altdays' => esc_html( '' ),
			'socialmag_weekends' => esc_html( 'Sat-Sun' ),
			'socialmag_weekday_hours' => esc_html( '8am-5pm' ),
			'socialmag_alt_hours' => esc_html( '' ),
			'socialmag_weekend_hours' => esc_html( '9am-6pm' ),
		));
		
		$title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$socialmag_street = isset( $instance['socialmag_street_address'] ) ? esc_html($instance['socialmag_street_address']) : '';
		$socialmag_city_state = isset( $instance['socialmag_city_state'] ) ? esc_html($instance['socialmag_city_state']) : '';
		$socialmag_zip_code = isset( $instance['socialmag_zip_code'] ) ? intval($instance['socialmag_zip_code']) : '';
		
		$socialmag_weekdays = isset( $instance['socialmag_weekdays'] ) ? esc_html($instance['socialmag_weekdays']) : '';
		$socialmag_weekends = isset( $instance['socialmag_weekends'] ) ? esc_html($instance['socialmag_weekends']) : '';
		$socialmag_altdays = isset( $instance['socialmag_altdays'] ) ? esc_html($instance['socialmag_altdays']) : '';
		
		$socialmag_weekday_hours = isset( $instance['socialmag_weekday_hours'] ) ? esc_html($instance['socialmag_weekday_hours']) : '';
		$socialmag_weekend_hours = isset( $instance['socialmag_weekend_hours'] ) ? esc_html($instance['socialmag_weekend_hours']) : '';
		$socialmag_alt_hours = isset( $instance['socialmag_alt_hours'] ) ? esc_html($instance['socialmag_alt_hours']) : '';
				
		if ( isset( $instance[ 'title' ] ) ) {
		$title = $instance[ 'title' ];
		}
		else {
		$title = esc_html__( 'Address and Visitation Info', 'socialmag' );
		} ?>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'socialmag' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('socialmag_street_address'); ?>"><?php esc_html_e('Street Address:', 'socialmag' ); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('socialmag_street_address'); ?>" name="<?php echo $this->get_field_name('socialmag_street_address'); ?>" type="url" value="<?php echo esc_html($socialmag_street); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('socialmag_city_state'); ?>"><?php esc_html_e('City & State:', 'socialmag' ); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('socialmag_city_state'); ?>" name="<?php echo $this->get_field_name('socialmag_city_state'); ?>" type="url" value="<?php echo esc_html($socialmag_city_state); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('socialmag_zip_code'); ?>"><?php esc_html_e('Zip Code:', 'socialmag' ); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('socialmag_zip_code'); ?>" name="<?php echo $this->get_field_name('socialmag_zip_code'); ?>" type="url" value="<?php echo intval($socialmag_zip_code); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('socialmag_weekdays'); ?>"><?php esc_html_e('Weekdays:', 'socialmag' ); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('socialmag_weekdays'); ?>" name="<?php echo $this->get_field_name('socialmag_weekdays'); ?>" type="url" value="<?php echo esc_html($socialmag_weekdays); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('socialmag_weekends'); ?>"><?php esc_html_e('Weekends:', 'socialmag' ); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('socialmag_weekends'); ?>" name="<?php echo $this->get_field_name('socialmag_weekends'); ?>" type="url" value="<?php echo esc_html($socialmag_weekends); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('socialmag_altdays'); ?>"><?php esc_html_e('Alternate Days:', 'socialmag' ); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('socialmag_altdays'); ?>" name="<?php echo $this->get_field_name('socialmag_altdays'); ?>" type="url" value="<?php echo esc_html($socialmag_altdays); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('socialmag_weekday_hours'); ?>"><?php esc_html_e('Weekday Hours:', 'socialmag' ); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('socialmag_weekday_hours'); ?>" name="<?php echo $this->get_field_name('socialmag_weekday_hours'); ?>" type="url" value="<?php echo esc_html($socialmag_weekday_hours); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('socialmag_weekend_hours'); ?>"><?php esc_html_e('Weekend Hours:', 'socialmag' ); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('socialmag_weekend_hours'); ?>" name="<?php echo $this->get_field_name('socialmag_weekend_hours'); ?>" type="url" value="<?php echo esc_html($socialmag_weekend_hours); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('socialmag_alt_hours'); ?>"><?php esc_html_e('Alternate Hours Hours:', 'socialmag' ); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('socialmag_alt_hours'); ?>" name="<?php echo $this->get_field_name('socialmag_alt_hours'); ?>" type="url" value="<?php echo esc_html($socialmag_alt_hours); ?>" />
		</p>
		
			
	<?php }
	
} // ends widget class SocialMag_Visit_Us_Widget