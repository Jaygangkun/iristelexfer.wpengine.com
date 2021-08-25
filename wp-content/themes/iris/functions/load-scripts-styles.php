<?php

add_action( 'wp_enqueue_scripts', 'c5_load_scripts' );

function c5_load_scripts() {
  wp_enqueue_script( 'jquery' );
}

// get theme version
function wpmix_get_version() {
	$theme_data = wp_get_theme();
	return $theme_data->Version;
}

$theme_version = wpmix_get_version();
global $theme_version;

// get random number
function wpmix_get_random() {
	$randomizr = '-' . rand(100,999);
	return $randomizr;
}

$random_number = wpmix_get_random();
global $random_number;

add_action( 'wp_enqueue_scripts', 'c5_scripts_and_styles', 999 );

function c5_scripts_and_styles() {

  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  global $theme_version, $random_number;

  if (!is_admin()) {

	// remove wordpress jquery
	wp_deregister_script('jquery');

	// register newer version of jquery
    wp_register_script('jquery', ('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'), '', '3.5.1', true);
    wp_enqueue_script('jquery');

    // register gsap
    wp_register_script('gsap', ('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.2/gsap.min.js'), false, '', true );
    wp_enqueue_script('gsap');

    // register glide.js
    wp_register_script('glide', ('https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js'), false, '', true);
    wp_enqueue_script('glide');

    // register iframeResizer.js
    wp_register_script('iframeResizer', ('https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.3.1/iframeResizer.min.js'), false, '', true);
    wp_enqueue_script('iframeResizer');
    

    // register swup.js
    // wp_register_script('swup', ('https://cdnjs.cloudflare.com/ajax/libs/swup/2.0.10/swup.min.js'), false, '', true);
    // wp_enqueue_script('swup');

    // sticky polyfill
    wp_register_script( 'c5-sticky', get_stylesheet_directory_uri() . '/assets/js/vendor/stickyfill.min.js', array(), '', true );
    wp_enqueue_script( 'c5-sticky' );
    
    // Slick JS
    wp_register_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/js/vendor/slick.min.js', array(), '', true );
    wp_enqueue_script( 'slick-js' );

    wp_register_style( 'slick-style', get_stylesheet_directory_uri() . '/assets/css/vendor/slick.css', array(), $theme_version . $random_number, 'all' );
    wp_enqueue_style( 'slick-style' );

    // animate on scroll
    // wp_register_style( 'c5-aos-style', get_stylesheet_directory_uri() . '/assets/css/vendor/aos.css', array(), $theme_version . $random_number, 'all' );
    // wp_enqueue_style( 'c5-aos-style' );
    // wp_register_script( 'c5-aos', get_stylesheet_directory_uri() . '/assets/js/vendor/aos.js', array(), $theme_version . $random_number, true );
    // wp_enqueue_script( 'c5-aos' );

    // register Google fonts
    // wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700', false );
    // wp_enqueue_style( 'google-fonts' );

	// register main stylesheet
	wp_register_style( 'c5-stylesheet', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), $theme_version . $random_number, 'all' );
    wp_enqueue_style( 'c5-stylesheet' );

	//adding scripts file in the footer
	wp_register_script( 'c5-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), $theme_version . $random_number, true );
    wp_enqueue_script( 'c5-js' );


	}

}

?>
