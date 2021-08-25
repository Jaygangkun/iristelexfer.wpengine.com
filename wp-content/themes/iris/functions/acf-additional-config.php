<?php

// hide ACF in dashboard -- don't forget to delete Theme Code Pro
// add_filter('acf/settings/show_admin', '__return_false');

// add a new 'barebones' toolbar to WYSIWYG
add_filter( 'acf/fields/wysiwyg/toolbars', 'my_toolbars' );
function my_toolbars ( $toolbars ) {
	$toolbars['Bare'] = array();
	$toolbars['Bare'][1] = array( 'forecolor', 'bold', 'italic', 'underline', 'strikethrough', 'bullist', 'link', 'removeformat' ); // 'formatselect', 
	return $toolbars;
}

// add a brand colors button to WYSIWYG
add_filter('tiny_mce_before_init', 'my_mce4_options');
function my_mce4_options($init) {
	$custom_colours = '
		"070742", "Brand Color (#070742) - Dark Purple",
		"52527B", "Brand Color (#52527B) - Medium Purple",
		"867AC7", "Brand Color (#867AC7) - Light Purple",
		"F434A6", "Brand Color (#F434A6) - Hot Pink",
	';
	// build colour grid default+custom colors
	$init['textcolor_map'] = '['.$custom_colours.']';
	// change the number of rows in the grid if the number of colors changes - 8 swatches per row
	$init['textcolor_rows'] = 1;
	// filter the text formats available
	// $init['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 4=h4';

	return $init;
}

// strip <p> tags from WYSIWYG output for headers
add_filter( 'header_filter', 'header_striptags' );
function header_striptags( $field ) {
	$formatted_field = strip_tags( $field, '<br>, <span>, <strong>, <em>, <del>, <ul>, <li>, <a>' );
	return $formatted_field;
}

// add commas to statistics component number field
// add_filter('acf/format_value/name=statistics_component_-_number', 'fix_number', 20, 3);
// function fix_number($value, $post_id, $field) {
// 	$value = number_format($value);
// 	return $value;
// }

// drop-down select fix
add_action('acf/init', 'c5_acf_init');
function c5_acf_init() {
	acf_update_setting('select2_version', 3);
}


?>