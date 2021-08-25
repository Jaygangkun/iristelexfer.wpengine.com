<?php

add_action( 'admin_menu', 'set_admin_menu_separator' );

function set_admin_menu_separator() {
  remove_menu_page( 'coblocks-getting-started' ); //Remove Coblocks

  $addSep1 = 93;
  $addSep2 = 94;
  $addSep3 = 95;
  $addSep4 = 96;
  global $menu;
  $menu[$addSep1] = array(
    0	=>	'',
    1	=>	'read',
    2	=>	'separator' . $addSep1,
    3	=>	'',
    4	=>	'wp-menu-separator'
  );
  $menu[$addSep2] = array(
    0	=>	'',
    1	=>	'read',
    2	=>	'separator' . $addSep2,
    3	=>	'',
    4	=>	'wp-menu-separator'
  );
  $menu[$addSep3] = array(
    0	=>	'',
    1	=>	'read',
    2	=>	'separator' . $addSep3,
    3	=>	'',
    4	=>	'wp-menu-separator'
  );
  $menu[$addSep4] = array(
    0	=>	'',
    1	=>	'read',
    2	=>	'separator' . $addSep4,
    3	=>	'',
    4	=>	'wp-menu-separator'
  );
}


function custom_menu_order($menu_ord) {
  if (!$menu_ord) return true;

  return array(
    'index.php',                                               // Dashboard
    'separator1',                                              // ***** separator
    'edit.php',                                                // Posts
    'edit.php?post_type=news',                                 // News
    'edit.php?post_type=page',                                 // Pages
    'separator2',                                              // ***** separator
    'edit.php?post_type=use_cases',                            // Use cases
    'edit.php?post_type=resource',                             // Resources
    'edit.php?post_type=team',                                 // Team
    'separator93',                                             // ***** separator
    'upload.php',                                              // Media
    'gf_edit_forms',                                           // Forms
    'separator95',                                             // ***** separator
    'edit.php?post_type=acf-field-group',                      // ACF Fields
    'themes.php',                                              // Appearance
    'plugins.php',                                             // Plugins
    'separator96',                                             // ***** separator
    'users.php',                                               // Users
    'tools.php',                                               // Tools
    'options-general.php',                                     // Settings
    'separator-last',                                          // ***** separator
    'wpseo_dashboard',                                         // Yoast SEO
    'two-factor-auth-user',                                    // Two Factor auth
    'bulletproof-security/admin/core/core.php'                 // Bulletproof security
  );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');

?>
