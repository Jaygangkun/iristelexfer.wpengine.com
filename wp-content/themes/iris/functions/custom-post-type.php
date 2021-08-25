<?php
/* Custom Post Types */

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'c5_flush_rewrite_rules' );

// Flush your rewrite rules
function c5_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// Register 'people' Post Type
function people_post_type() {

	/***************************************************************
	  *
	  OUR PEOPLE
	  *
	***************************************************************/

	$peopleLabels = array(
		'name'                  => _x( 'Our People', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Our People', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Our People', 'text_domain' ),
		'name_admin_bar'        => __( 'Our People', 'text_domain' ),
		'archives'              => __( 'Our People Archives', 'text_domain' ),
		'attributes'            => __( 'Our People Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Our People:', 'text_domain' ),
		'all_items'             => __( 'All Our People', 'text_domain' ),
		'add_new_item'          => __( 'Add New Person', 'text_domain' ),
		'add_new'               => __( 'Add New Person', 'text_domain' ),
		'new_item'              => __( 'New Person', 'text_domain' ),
		'edit_item'             => __( 'Edit Person', 'text_domain' ),
		'update_item'           => __( 'Update Person', 'text_domain' ),
		'view_item'             => __( 'View Person', 'text_domain' ),
		'view_items'            => __( 'View Our People', 'text_domain' ),
		'search_items'          => __( 'Search Our People', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Person', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Person', 'text_domain' ),
		'items_list'            => __( 'Our People list', 'text_domain' ),
		'items_list_navigation' => __( 'Our People list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Our People list', 'text_domain' ),
	);
	$peopleArgs = array(
		'label'                 => __( 'Our People', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $peopleLabels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		// 'taxonomies'         => array( 'team_categories' ),
		//'rewrite'             => array( 'slug' => 'team-archive' ),
		'rewrite'               => true,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'show_in_rest'          => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type( 'people', $peopleArgs );
	/* this adds your post categories to your custom post type */
	// register_taxonomy_for_object_type( 'team_categories', 'team' );

}
add_action( 'init', 'people_post_type', 0 );

//add featured images to people post list
function custom_columns( $columns ) {
	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => 'Title',
		'featured_image' => 'Photo',
		'date' => 'Date'
	);
	return $columns;
}
add_filter('manage_people_posts_columns', 'custom_columns');

function custom_columns_data( $column, $post_id ) {
	switch ( $column ) {
	case 'featured_image':
		the_post_thumbnail( 'thumbnail' );
		break;
	}
}
add_action( 'manage_posts_custom_column' , 'custom_columns_data', 10, 2 );

// change title placeholder
add_filter('enter_title_here', 'people_title_placeholder' , 20 , 2 );
function people_title_placeholder($title , $post) {
	if ( $post->post_type == 'people' ) {
		$my_title = "Add employee's name";
		return $my_title;
	}
	return $title;
}

// add custom endpoint with acf fields included in 'people custom' post type
add_action( 'rest_api_init', function () {
	register_rest_route( 'people', '/all-posts', array(
		'methods' => 'GET',
		'callback' => 'custom_people',
	) );
} );
function custom_people( $data ) {
	global $post;
	$data = array();
	$people_posts = [];
	$people = get_posts(array(
		'post_type' => 'people',
		'posts_per_page' => 6,
		'paged' => ($_REQUEST['paged'] ? $_REQUEST['paged'] : 1)
	));
	foreach($people as $post) {
		setup_postdata($post);
		$postID = $post->ID;
		$people_posts[$postID]['img'] = get_the_post_thumbnail_url();
		$people_posts[$postID]['name'] = $post->post_title;
		$people_posts[$postID]['title'] = get_field('our_people_-_title', $post->ID);
		$people_posts[$postID]['linkedin'] = get_field('our_people_-_linkedin', $post->ID);
		$people_posts[$postID]['biography'] = get_field('our_people_-_biography', $post->ID);
	}
	$data = $people_posts;
	return rest_ensure_response( $data );
}




// Register 'states' Post Type
function state_post_type() {

	/***************************************************************
	  *
	  STATE REGULATIONS
	  *
	***************************************************************/

	$stateLabels = array(
		'name'                  => _x( 'State Regulations', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'State Regulations', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'State Regulations', 'text_domain' ),
		'name_admin_bar'        => __( 'State Regulations', 'text_domain' ),
		'archives'              => __( 'State Regulations Archives', 'text_domain' ),
		'attributes'            => __( 'State Regulations Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent State Regulations:', 'text_domain' ),
		'all_items'             => __( 'All States', 'text_domain' ),
		'add_new_item'          => __( 'Add State', 'text_domain' ),
		'add_new'               => __( 'Add State', 'text_domain' ),
		'new_item'              => __( 'New State', 'text_domain' ),
		'edit_item'             => __( 'Edit State', 'text_domain' ),
		'update_item'           => __( 'Update State', 'text_domain' ),
		'view_item'             => __( 'View State', 'text_domain' ),
		'view_items'            => __( 'View State Regulations', 'text_domain' ),
		'search_items'          => __( 'Search State Regulations', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into State', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this State', 'text_domain' ),
		'items_list'            => __( 'State Regulations list', 'text_domain' ),
		'items_list_navigation' => __( 'State Regulations list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter State Regulations list', 'text_domain' ),
	);
	$stateArgs = array(
		'label'                 => __( 'State Regulations', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $stateLabels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		// 'taxonomies'         => array( 'team_categories' ),
		//'rewrite'             => array( 'slug' => 'team-archive' ),
		'rewrite'               => true,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-admin-site',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'show_in_rest'          => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type( 'states', $stateArgs );

}
add_action( 'init', 'state_post_type', 0 );

// change title placeholder
add_filter('enter_title_here', 'state_title_placeholder' , 20 , 2 );
function state_title_placeholder($title , $post) {
	if ( $post->post_type == 'states' ) {
		$my_title = "Add state name";
		return $my_title;
	}
	return $title;
}

function regulation_taxonomy() {
	$regulationArgs = array(
		'labels'            => array(
			'name'               => 'Regulations',
			'singular_name'      => 'Regulation',
			'search_items'       => 'Search Regulations',
			'popular_items'      => 'Popular Regulations',
			'all_items'          => 'All Regulations',
			'parent_item'        => 'Parent Regulation',
			'parent_item_colon'  => 'Parent Regulation',
			'edit_item'          => 'Edit Regulation',
			'update_item'        => 'Update Regulation',
			'add_new_item'       => 'Add New Regulation',
			'edit_item_name'     => 'Edit Regulation',
			'menu_name'          => 'Edit Regulations'
		),
		'show_in_rest'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'hierarchical'      => true,
		'rewrite'           => array('slug' => 'regulations')
	);

	register_taxonomy('regulations', 'states', $regulationArgs);
}
add_action( 'init', 'regulation_taxonomy', 0 );

?>
