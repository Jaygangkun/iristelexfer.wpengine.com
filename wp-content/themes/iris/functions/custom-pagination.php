<?php

/***************************************************************
  *
  PAGINATION
  *
***************************************************************/

// Numeric Page Navi (built into the theme by default)
function bones_page_navi() {
  global $wp_rewrite, $wp_query;
  $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  //echo '<nav class="pagination">';
  $pagination = array(
    'base' => @add_query_arg('page','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
    'prev_text'    => '<i class="far fa-arrow-left"></i>',
    'next_text'    => '<i class="far fa-arrow-right"></i>',
    'type'         => 'list',
    'end_size'     => 1,
    'mid_size'     => 2,
    'type' => 'array'
  );
  //echo '</nav>';
  if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
  if ( !empty( $wp_query->query_vars['s'] ) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
  $pages = paginate_links( $pagination );
  echo '<div class="post-pagination" data-aos="fade-in" data-aos-duration="1000"><ul>';
  if ( $current == 1) echo '<li><a href="#" class="disabled no-click"><i class="far fa-arrow-left"></i></a></li>';
  foreach ($pages as $page) :
      echo '<li>'.$page.'</li>';
  endforeach;
  if ( $current == $wp_query->max_num_pages ) echo '<li><a href="#" class="disabled no-click"><i class="far fa-arrow-right"></i></a></li>';
  echo '</ul></div>';

} /* end page navi */

function bones_resource_navi() {
  global $wp_rewrite, $resource_query;
  $resource_query->query_vars['paged'] > 1 ? $current = $resource_query->query_vars['paged'] : $current = 1;
  $bignum = 999999999;
  if ( $resource_query->max_num_pages <= 1 )
    return;
  //echo '<nav class="pagination">';
  $pagination = array(
    'base' => @add_query_arg('page','%#%'),
    'format' => '',
    'total' => $resource_query->max_num_pages,
    'current' => $current,
    'prev_text'    => '<i class="far fa-arrow-left"></i>',
    'next_text'    => '<i class="far fa-arrow-right"></i>',
    'type'         => 'list',
    'end_size'     => 1,
    'mid_size'     => 2,
    'type' => 'array'
  );
  //echo '</nav>';
  if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
  if ( !empty( $resource_query->query_vars['s'] ) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
  $pages = paginate_links( $pagination );
  echo '<div class="post-pagination" data-aos="fade-in" data-aos-duration="1000"><ul>';
  if ( $current == 1) echo '<li><a href="#" class="disabled no-click"><i class="far fa-arrow-left"></i></a></li>';
  foreach ($pages as $page) :
      echo '<li>'.$page.'</li>';
  endforeach;
  if ( $current == $resource_query->max_num_pages ) echo '<li><a href="#" class="disabled no-click"><i class="far fa-arrow-right"></i></a></li>';
  echo '</ul></div>';

} /* end page navi */

?>
