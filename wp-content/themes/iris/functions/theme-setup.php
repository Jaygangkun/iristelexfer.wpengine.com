<?php

/***************************************************************
  *
  THEME SETUP
  *
***************************************************************/

function c5_setup() {
  load_theme_textdomain( 'c5', get_template_directory() . '/languages' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  global $content_width;
  if ( ! isset( $content_width ) ) $content_width = 640;
    register_nav_menus(
      array( 'main-menu' => __( 'Main Menu', 'c5' ) )
    );
}
add_action( 'after_setup_theme', 'c5_setup' );

/***************************************************************
  *
  UPDATE CSS IN ADMIN
  *
***************************************************************/

function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/assets/css/admin.css');
}

add_action('admin_enqueue_scripts', 'admin_style');

/***************************************************************
  *
  ADD CLASS TO BODY TAG USING PAGE SLUG
  *
***************************************************************/

function add_slug_body_class( $classes ) {

  global $post;

  if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }

  return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/***************************************************************
  *
  CUSTOM CSS FOR ACF BACKEND
  *
***************************************************************/

function my_acf_admin_head() {
    ?>
    <style type="text/css">

    /* css here */
    .acf-field-5acfdc4dcd5e6 .acf-repeater .acf-row > td {
      border:0;
      border-bottom: 15px solid #dedede;
    }

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

/***************************************************************
  *
  SYNC ACF FIELDS BETWEEN ENVIRONMENTS
  *
***************************************************************/

function my_acf_json_load_point( $paths ) {

    // remove original path (optional)
    unset($paths[0]);


    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';


    // return
    return $paths;

}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

/***************************************************************
  *
  STRIP SHORTCODES
  *
***************************************************************/

function remove_shortcode_from_index( $content ) {
  if ( is_home() ) {
    $content = strip_shortcodes( $content );
  }
  return $content;
}
add_filter( 'the_content', 'remove_shortcode_from_index' );



/***************************************************************
  *
  CUSTOM CSS BLOCK
  *
***************************************************************/

function inject_custom_css_block() {
    $value = get_post_meta( get_the_ID(), 'custom_css_meta_block_field', true );

    if ( $value && is_singular( 'post' ) ) {
      echo '<style type="text/css">'.  "\n";
      echo esc_html( $value );
      echo "\n" . '</style>';
    }

}
add_action('wp_head', 'inject_custom_css_block');

/***************************************************************
  *
  ALTER MAIN QUERY
  *
***************************************************************/

function wpa_post_types_front_page( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
      $query->set( 'post_type', array(
        'post',
        'news'
      ) );
    }
    if ( $query->is_category() && $query->is_main_query() ) {
      $query->set( 'post_type', array(
        'post',
        'news'
      ) );
    }
}
add_action( 'pre_get_posts', 'wpa_post_types_front_page' );

function specific_no_wpautop($content) {
    if (is_page('resources')) { // or whatever other condition you like
        remove_filter( 'the_content', 'wpautop' );
        return $content;
    } else {
        return $content;
    }
}
add_filter('the_content', 'specific_no_wpautop', 9);

/***************************************************************
  *
  ALTER SEARCH QUERY
  *
***************************************************************/

function searchfilter($query) {

  if ($query->is_search && !is_admin() ) {
    $query->set('post_type',array('post','news', 'use_cases', 'resource'));
  }

  return $query;

}

add_filter('pre_get_posts','searchfilter');

/***************************************************************
  *
  STRIP STRING FOR ID NAME
  *
***************************************************************/

function cleanString($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}

/***************************************************************
  *
  HEX to RGBA
  *
***************************************************************/

function hex2rgb($hex) {

  $hex = str_replace("#", "", $hex);

  if(strlen($hex) == 3) {
    $r = hexdec(substr($hex,0,1).substr($hex,0,1));
    $g = hexdec(substr($hex,1,1).substr($hex,1,1));
    $b = hexdec(substr($hex,2,1).substr($hex,2,1));
  } else {
    $r = hexdec(substr($hex,0,2));
    $g = hexdec(substr($hex,2,2));
    $b = hexdec(substr($hex,4,2));
  }

  $rgb = array($r, $g, $b);

  return $rgb; // returns an array with the rgb values

}

/***************************************************************
  *
  MOVE YOAST BOX TO BOTTOM
  *
***************************************************************/

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

?>
