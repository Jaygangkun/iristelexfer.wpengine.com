<?php

/***************************************************************
  *
  ACF BLOCKS
  *
***************************************************************/

// function always_load() {
//   return true;
// }
//
// add_filter( 'ACFFA_always_enqueue_fa', 'always_load', 10, 1 );
//
// add_filter( 'block_categories', function( $categories, $post ) {
//     return array_merge(
//       $categories,
//       array(
//         array(
//           'slug'  => 'page-components',
//           'title' => 'Page Components',
//         ),
// 				array(
// 					'slug' => 'page-templates',
// 					'title' => 'Page Templates',
// 				)
//       )
//     );
// }, 10, 2 );
//
// function c5_acf_init() {
//
// 	// check function exists
// 	if( function_exists('acf_register_block') ) {
//
//     acf_register_block(array(
// 			'name'				    => 'acf-page-hero-block',
// 			'title'				    => __('Page hero block'),
// 			'description'		  => __('Adds page hero block with option for illustration'),
// 			'render_callback'	=> 'acf_page_callback',
//       'category'			  => 'page-components',
// 			'icon'				    => 'welcome-widgets-menus',
// 			'keywords'		  	=> array( 'hero', 'header' ),
//       'mode' => 'edit',
//       'enqueue_style'		=> get_template_directory_uri() . '/assets/css/blocks/acf-page-hero-block.css',
// 		));
//
//     acf_register_block(array(
// 			'name'			    	=> 'data-page-block',
// 			'title'				    => __('Data Guardianship page block'),
// 			'description'		  => __('Predefined layout for Data Guardianship page'),
// 			'render_callback'	=> 'acf_page_callback',
//       'category'			  => 'page-templates',
// 			'icon'				    => 'shield',
// 			'keywords'		  	=> array( 'data', 'data guardianship page', 'pages' ),
//       'supports'        => array( 'align' => false ),
//       'mode' => 'edit',
//       'enqueue_assets' => function(){
//         wp_enqueue_style( 'data-block', get_template_directory_uri() . '/assets/css/blocks/data-page-block.css' );
//         wp_enqueue_script( 'data-polyfill', get_template_directory_uri() . '/assets/js/vendor/stickyfill.min.js', array('jquery'), '', true );
//         wp_enqueue_script( 'data-vendor', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery'), '', true );
//       },
// 		));
//
// 	}
// }
// add_action('acf/init', 'c5_acf_init');
//
// function acf_page_callback( $block ) {
//
// 	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
// 	$slug = str_replace('acf/', '', $block['name']);
//
// 	// include a template part from within the "template-parts/block" folder
// 	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}.php") ) ) {
// 		include( get_theme_file_path("/template-parts/blocks/{$slug}.php") );
// 	}
//
// }
//
?>
