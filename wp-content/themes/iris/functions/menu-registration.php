<?php

/***************************************************************
	*
	REGISTER MENU AREAS
	*
***************************************************************/

// function register_menu_locations() {
// 	register_nav_menus(
// 		array(
// 			'top-links' => __('Top Links'),
// 			'bottom-links' => __( 'Bottom Links' ),
// 			'mobile-menu' => __('Mobile Menu'),
// 			'mobile-bottom-menu' => __('Mobile Bottom Menu')
// 		)
// 	);
// }
// add_action( 'init', 'register_menu_locations' );

/***************************************************************
	*
	CUSTOM WALKER
	*
***************************************************************/


function prefix_nav_description( $item_output, $item, $depth, $args ) {

	$icon = get_field( 'menu_icon', $item);
	$icon_img = $icon ? '<img class="nav-img" src="' . $icon . '">' : '';
	$item_output  = '<a class="flex" href="' . $item->url . '">' . $icon_img . '<div>' . $args->before;

	if ( $depth > 0 ) {
		$item_output .= $args->link_before . $item->title . $args->link_after . 'aiadb';
	} else {
		$item_output .= $args->link_before . $item->title . $args->link_after;
	}
	if ( !empty( $item->description ) ) {
		$item_output = str_replace( 'aiadb', '<p class="menu-item-description">' . $item->description . '</p>', $item_output );
	} else {
		$item_output = str_replace( 'aiadb', '', $item_output);
	}

	$item_output .= '</div></a>';
	$item_output .= $args->after;

 
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );



?>
