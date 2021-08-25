<?php
/*
Plugin Name: Advanced Custom Fields: Gravityforms Add-on
Plugin URI: https://github.com/dannyvanholten/acf-gravityforms-add-on
Description: Advanced Custom Field with which we can select Gravityforms.
Version: 1.2.4
Author: Danny van Holten
Author URI: http://www.dannyvanholten.com/
Copyright: Danny van Holten
*/

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

// Define multiple necessary constants
define('ACF_GF_FIELD_VERSION', '1.2.4');
define('ACF_GF_FIELD_TEXTDOMAIN', 'acf-gravityforms-add-on');
define('ACF_GF_FIELD_LANGUAGES', get_template_directory() . '/acf/acf-gravityforms-add-on/languages/');

define('ACF_GF_FIELD_ASSETS', get_template_directory_uri() . '/acf/acf-gravityforms-add-on/');
define('ACF_GF_FIELD_RESOURCES', __DIR__ . '/resources/');

// Use composer to autoload our classes
require_once __DIR__ . '/vendor/autoload.php';

// Initiate the field!
new ACFGravityformsField\Init();
