<?php

function svg_mime_types( $mimes ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';

  return $mimes;
}

add_filter( 'upload_mimes', 'svg_mime_types' );

function svg_enqueue_scripts( $hook ) {
  wp_enqueue_style( 'svg-previews-style', get_theme_file_uri( '/extensions/svg/svg-previews.css' ) );
  wp_enqueue_script( 'svg-previews', get_theme_file_uri( '/extensions/svg/svg-previews.js' ), 'jquery', '', true );
  wp_localize_script( 'svg-previews', 'script_vars', array( 'AJAXurl' => admin_url( 'admin-ajax.php' ) ) );
}

add_action( 'admin_enqueue_scripts', 'svg_enqueue_scripts' );


function svg_get_attachment_url_media_library() {

  $url          = '';
  $attachmentID = isset( $_REQUEST['attachmentID'] ) ? $_REQUEST['attachmentID'] : '';
  if ( $attachmentID ) {
    $url = wp_get_attachment_url( $attachmentID );
  }

  echo $url;

  die();
}

add_action( 'wp_ajax_svg_get_attachment_url', 'svg_get_attachment_url_media_library' );

?>