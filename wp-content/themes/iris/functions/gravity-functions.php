<?php

/***************************************************************
  *
  FORCE GRAVITY FORMS TO INIT SCRIPTS IN THE FOOTER AND ENSURE
  THAT THE DOM IS LOADED BEFORE SCRIPTS ARE EXECUTED
  *
***************************************************************/

//add_filter( 'gform_init_scripts_footer', '__return_true' );
add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open', 1 );

function wrap_gform_cdata_open( $content = '' ) {

  if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
    return $content;
  }
    $content = 'document.addEventListener( "DOMContentLoaded", function() { ';
    return $content;
  }

  add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close', 99 );

  function wrap_gform_cdata_close( $content = '' ) {
    if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
    return $content;
    }

  $content = ' }, false );';

  return $content;

}

/***************************************************************
  *
  ADD CLASS TO FIELD TYPES
  *
***************************************************************/

add_filter( 'gform_field_css_class', 'custom_class', 10, 3 );
function custom_class( $classes, $field, $form ) {
    if ( $field->type == 'text' || $field->type == 'textarea' || $field->type == 'email' || $field->type == 'phone' ) {
        $classes .= ' placed-labels';
    }
    return $classes;
}

?>
