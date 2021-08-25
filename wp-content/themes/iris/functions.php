<?php
/***************************************************************
	*
	REGISTER CUSTOM POST TYPES
	*
***************************************************************/

require_once( 'functions/custom-post-type.php' );

/***************************************************************
	*
	GRAVITY FORMS FUNCTIONS
	*
***************************************************************/

require_once( 'functions/gravity-functions.php' );

/***************************************************************
	*
	THEME SPECIFIC FUNCTIONS
	*
***************************************************************/

require_once( 'functions/theme-setup.php' );

/***************************************************************
	*
	SCRIPTS & ENQUEUEING
	*
***************************************************************/

require_once( 'functions/load-scripts-styles.php' );

/***************************************************************
	*
	CLEANUP DEFAULT WORDPRESS BIZ
	*
***************************************************************/

require_once( 'functions/default-wp-cleanup.php' );

/***************************************************************
	*
	CUSTOM ARRANGE ADMIN MENU NAVIGATION
	*
***************************************************************/

// require_once( 'functions/admin-menu-sort.php' );

/***************************************************************
	*
	MENU AND NAVIGATION FUNCTIONS
	*
***************************************************************/

require_once( 'functions/menu-registration.php' );

/***************************************************************
	*
	PAGINATION
	*
***************************************************************/

require_once( 'functions/custom-pagination.php' );

/***************************************************************
	*
	ACF BLOCKS
	*
***************************************************************/

// require_once( 'functions/acf-block-registration.php' );

/***************************************************************
	*
	ACF OPTION PAGES
	*
***************************************************************/

require_once( 'functions/acf-option-pages.php' );

/***************************************************************
	*
	ACF ADDITIONAL CONFIGURATION
	*
***************************************************************/

require_once( 'functions/acf-additional-config.php' );

/***************************************************************
	*
	ALLOW SVG FILE TYPES
	*
***************************************************************/

require_once( 'functions/svg-previews.php' );

// **************************************************************
//   *
//   ACF SMART BUTTON FIELD
//   *
// **************************************************************

require_once(dirname(__FILE__) . '/extensions/acf/acf-smart-button/acf-smart-button.php');

// **************************************************************
//   *
//   ACF GRAVITY FORMS FIELD
//   *
// **************************************************************

require_once(dirname(__FILE__) . '/extensions/acf/acf-gravity-forms/acf-gravity-forms.php');


/***************************************************************
	*
	EXPERIMENTAL TAB RENAMING
	*
***************************************************************/

// function my_acf_prepare_field( $field ) {
//   global $post;
//   if (get_field('text_field', $post->ID)) {
//     $field['label'] = get_field('text_field', $post->ID);
//     $field['readonly'] = true;

//   }
//   return $field;
// }

// add_filter('acf/prepare_field/type=tab', 'my_acf_prepare_field');


function blog_posts_per_page( $query ){
    if( !is_admin()
        && !$query->is_search( )
        && $query->is_home( )
        && $query->is_main_query() ){
    		$featured_post = get_featured_post();
			if (isset($featured_post->ID)) {
            	$query->set( 'post__not_in', array( $featured_post->ID ) );
			}
    }
}
// add_action( 'pre_get_posts', 'blog_posts_per_page' );

function get_featured_post() {
	$query_args = array(
		'post_type'  => 'post',
		'posts_per_page' => 1,
		'post_status' => 'publish',
		'meta_query' => array(
		    array(
				'key'   => 'article_-_article_featured',
				'compare' => '=',
				'value' => 'yes',
		    ),
		)
	);

	$post = get_posts( $query_args );
	$post = isset($post[0]) ? $post[0] : null;
	return $post;
}

function add_active_classes($classes = array(), $menu_item = false){
	global $wp_query;

	if ( $menu_item->title == 'Blog' && is_singular('post') ) {
	    $classes[] = 'current-menu-item';
	}


	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_active_classes', 10, 2 );


/**
 * Returns the primary term for the chosen taxonomy set by Yoast SEO
 * or the first term selected.
 *
 * @link https://www.tannerrecord.com/how-to-get-yoasts-primary-category/
 * @param integer $post The post id.
 * @param string  $taxonomy The taxonomy to query. Defaults to category.
 * @return array The term with keys of 'title', 'slug', and 'url'.
 */
function get_primary_taxonomy_term( $post = 0, $taxonomy = 'category' ) {
	if ( ! $post ) {
		$post = get_the_ID();
	}

	$terms        = get_the_terms( $post, $taxonomy );
	$primary_term = array();

	if ( $terms ) {
		$term_display = '';
		$term_slug    = '';
		$term_link    = '';
		if ( class_exists( 'WPSEO_Primary_Term' ) ) {
			$wpseo_primary_term = new WPSEO_Primary_Term( $taxonomy, $post );
			$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
			$term               = get_term( $wpseo_primary_term );
			if ( is_wp_error( $term ) ) {
				$term_display = $terms[0]->name;
				$term_slug    = $terms[0]->slug;
				$term_link    = get_term_link( $terms[0]->term_id );
				$term_id      = $terms[0]->term_id;
			} else {
				$term_display = $term->name;
				$term_slug    = $term->slug;
				$term_link    = get_term_link( $term->term_id );
				$term_id      = $term->term_id;
			}
		} else {
			$term_display = $terms[0]->name;
			$term_slug    = $terms[0]->slug;
			$term_link    = get_term_link( $terms[0]->term_id );
			$term_id      = $terms[0]->term_id;
		}
		$primary_term['url']   = $term_link;
		$primary_term['slug']  = $term_slug;
		$primary_term['title'] = $term_display;
		$primary_term['id']    = $term_id;
	}
	return $primary_term;
}





function insights_loadmore_ajax_handler(){
	$paged = $_POST['paged'] ? $_POST['paged'] : 1;
 
	$args = array(
		'post_type' => 'insights',
		'post_status' => 'publish',
		'posts_per_page' => 9,
		'paged' => $paged
	);
	
	
	if(  $_POST['category'] ){
		$args['tax_query'][] = [
			'taxonomy' => 'insight_categories',
			'field' => 'slug',
			'terms' => $_POST['category'],
		];
	}
	
	if(  $_POST['topic'] ){
		$args['tax_query'][] = [
			'taxonomy' => 'insight_topics',
			'field' => 'slug',
			'terms' => $_POST['topic'],
		];
	}
	
	
	$wp_query = new WP_Query( $args ); 
 
	if( $wp_query->have_posts() ) :
 
		// run the loop
		while( $wp_query->have_posts() ): $wp_query->the_post();
 
			get_template_part( 'page-templates/insights', 'loop');
 
		endwhile;
 
	endif;
		
	?>
	<div class="posts-grid-pagination insights-pagination">
		<div class="nav-links">
		<?php
		//	echo $paged;
		 echo paginate_links( array(
			'base' => '%_%',
			'current' => $paged,
			'total' => $wp_query->max_num_pages,
			'mid_size' => 2
			)); ?>
		</div>
	</div>
	<?
	
	die;
}
 
 
 
add_action('wp_ajax_loadmore', 'insights_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'insights_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

// function admin_bar(){

//   if(is_user_logged_in()){
//     add_filter( 'show_admin_bar', '__return_true' , 1000 );
//   }
// }
// add_action('init', 'admin_bar' );

/* DON'T DELETE THIS CLOSING TAG */ ?>