<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

	// VENDOR
	// wp_enqueue_script( 'smoothstate-js', get_template_directory_uri() . '/assets/js/vendor/smoothstate/jquery.smoothstate.min.js', array(), '1.0', true );
	//wp_enqueue_script( 'scrollreveal-js', get_template_directory_uri() . '/assets/js/vendor/scrollreveal/dist/scrollreveal.min.js', array(), '1.0', true );
	// custom modernizr in <head>
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '1.0', false );
	//  END VENDOR

  // switched to mini for prod
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0.8', true );
	// wp_enqueue_script( 'smoothstate', get_template_directory_uri() . '/assets/js/smoothState.js', array(), '1.0.2', true );

	// Register main stylesheet
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.8', 'all' );

	// Comment reply script for threaded comments
	if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
		wp_enqueue_script( 'comment-reply' );
	}

	// https://github.com/cedaro/dequeue-jquery-migrate/blob/develop/dequeue-jquery-migrate.php
	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
		$jquery_dependencies = $scripts->registered['jquery']->deps;
		$scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
	}
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
