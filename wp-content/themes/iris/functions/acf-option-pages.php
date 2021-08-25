<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Who We Serve',
		'menu_title'	=> 'Who We Serve',
		'menu_slug' 	=> 'who-we-serve',
		'position'		=> 23,
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-plus-alt',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Announcements',
		'menu_title'	=> 'Announcements',
		'menu_slug' 	=> 'announcements',
		'position'		=> 24,
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-archive',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Footer Options',
		'menu_title'	=> 'Footer Options',
		'menu_slug' 	=> 'footer-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-archive',
		'redirect'		=> false
	));

}

?>
