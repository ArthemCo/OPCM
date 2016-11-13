<?php

function opcm_customizer_register( $wp_customize ) {

	/* Panels */
	$wp_customize->add_panel( 'panel_content', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Site Content', 'opcm' ),
		'description' => __('This panel controls what the main page will display as the featured story, submission link images and fixed media across the site.', 'opcm')
	) );


	// Panel 1: Homepage
	$wp_customize->add_section( 'section_home', array(
	    'priority' => 1,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Home Page', 'opcm' ),
	    'description' => 'This panel controls what the homepage will display.',
			'panel' => 'panel_content'
	) );

	// Homepage hero image
	$wp_customize->add_setting( 'home_img' );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'bs_bg_d', array( // hrmm
				'label'    => __( 'Home page banner', 'opcm' ),
				'section'  => 'section_home',
				'settings' => 'home_img',
				'description' => 'Must be 2560x1600px, .jpg'
			)
		)
	);
	// Call to Action Text
	$wp_customize->add_setting( 'home_CTA_text' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'home_CTA_text', array(
				'label'    => __( 'Home page banner', 'opcm' ),
				'section'  => 'section_home',
				'settings' => 'home_CTA_text',
				'description' => __('This is your call to action tagline, make it catchy', 'opcm')
			)
		)
	);
	// Call to Action button
	$wp_customize->add_setting('home_CTA_link', array('default' => '-1'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'home_CTA_link', array(
				'label'     => __('Call to action page', 'opcm'),
				'section'   => 'section_home',
				'settings'  => 'home_CTA_link',
				'priority'  => 2,
				'type'      => 'dropdown-pages',
				'description'=> __('Send users directly to a page from your homescreen, prioritizing that content.', 'opcm'),
			)
		)
	);
	// Call to Action button text
	$wp_customize->add_setting('home_CTA_link_text');
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'home_CTA_link_text', array(
				'label'     => __('Call to action button text', 'opcm'),
				'section'   => 'section_home',
				'settings'  => 'home_CTA_link_text',
				'priority'  => 2,
				'description'=> __('Cutomize the call to action text within the above button', 'opcm'),
			)
		)
	);

	// Added to existing Title tag
	$wp_customize->add_setting( 'opcm_header_logo' );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'header_logo', array(
				'label'    => __('Header Logo', 'opcm'),
				'section'  => 'title_tagline',
				'settings' => 'opcm_header_logo',
			)
		)
	);

	// Add nav info to existing title section
	$wp_customize->add_setting( 'opcm_nav_email' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'opcm_nav_email', array(
				'label'    => __('Email Contact', 'opcm'),
				'section'  => 'title_tagline',
				'settings' => 'opcm_nav_email',
			)
		)
	);

	// Add nav info to existing title section
	$wp_customize->add_setting( 'opcm_nav_tel' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'opcm_nav_tel', array(
				'label'    => __('Telephone Number', 'opcm'),
				'section'  => 'title_tagline',
				'settings' => 'opcm_nav_tel',
			)
		)
	);

	$wp_customize->add_setting( 'opcm_nav_show_info', array('default'  => '1'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'opcm_nav_show_info', array(
				'label'	   => __('Show Contact info', 'opcm'),
				'section'  => 'title_tagline',
				'settings' => 'opcm_nav_show_info',
				'type'     => 'checkbox'
			)
		)
	);

	// street adress ?

	// Same thing, add social media icons
	$wp_customize->add_setting( 'opcm_nav_facebook' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'opcm_nav_facebook', array(
				'label'    => __( 'Facebook link', 'opcm' ),
				'section'  => 'title_tagline',
				'settings' => 'opcm_nav_facebook',
			)
		)
	);
	// Same thing, add social media icons
	$wp_customize->add_setting( 'opcm_nav_twitter' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'opcm_nav_twitter', array(
				'label'    => __( 'Twitter link', 'opcm' ),
				'section'  => 'title_tagline',
				'settings' => 'opcm_nav_twitter',
			)
		)
	);
	// Same thing, add social media icons
	$wp_customize->add_setting( 'opcm_nav_youtube' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'opcm_nav_youtube', array(
				'label'    => __( 'YouTube link', 'opcm' ),
				'section'  => 'title_tagline',
				'settings' => 'opcm_nav_youtube',
			)
		)
	);


}
add_action( 'customize_register', 'opcm_customizer_register' );

// Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
function opcm_customize_preview_js() {
	wp_enqueue_script( 'opcm_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'opcm_customize_preview_js' );
