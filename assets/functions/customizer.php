<?php

function opcm_customizer_register( $wp_customize ) {
	
	/* Panels */
	$wp_customize->add_panel( 'panel_content', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Site Content', 'opcm' ),
		'description' => 'This panel controls what the main page will display as the featured story, submission link images and fixed media across the site.', 'opcm'
	) );
	
	
	// Panel 1: Featured Story => Big Story Options
	$wp_customize->add_section( 'section_home', array(
	    'priority' => 1,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Home Page', 'opcm' ),
	    'description' => 'This panel controls what the homepage will display.',
		'panel' => 'panel_content'
	) );
	
	// Featured Story Desktop Image
	$wp_customize->add_setting( 'home_img' );
	$wp_customize->add_control( 
		new WP_Customize_Image_Control( 
			$wp_customize, 
			'bs_bg_d', array(
				'label'    => __( 'Home page banner', 'opcm' ),
				'section'  => 'section_home',
				'settings' => 'home_img',
				'description' => 'Must be 2560x1600px, .jpg'
			)
		) 
	);
	
	
	// Added to existing Title tag
	$wp_customize->add_setting( 'opcm_header_logo' );
	$wp_customize->add_control( 
		new WP_Customize_Image_Control( 
			$wp_customize, 
			'header_logo', array(
				'label'    => __( 'Header Logo', 'opcm' ),
				'section'  => 'title_tagline',
				'settings' => 'opcm_header_logo',
			)
		) 
	);

}
add_action( 'customize_register', 'opcm_customizer_register' );

// Default options transport to js
function opcm_customize_register( $wp_customize ) {
	$wp_customize->remove_section( 'static_front_page' );
}
add_action( 'customize_register', 'opcm_customize_register' );

// Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
function opcm_customize_preview_js() {
	wp_enqueue_script( 'opcm_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'opcm_customize_preview_js' );
