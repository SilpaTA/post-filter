<?php 
/*
Plugin Name: POST Filter Plugin
Description: A WordPress plugin to filter post data and display filtered output.
Version: 1.0
Author: Silpa TA
*/


define( 'POSTFILTER_PLUGIN', __FILE__ );
define( 'POSTFILTER_PLUGIN_BASENAME', plugin_basename( POSTFILTER_PLUGIN ) );
define( 'POSTFILTER_PLUGIN_NAME', trim( dirname( POSTFILTER_PLUGIN_BASENAME ), '/' ) );
define( 'POSTFILTER_PLUGIN_DIR', untrailingslashit( dirname( POSTFILTER_PLUGIN ) ) );
define( 'POSTFILTER_PLUGIN_CLASSES_DIR', POSTFILTER_PLUGIN_DIR . '/classes' );


// //Front end file
 require_once POSTFILTER_PLUGIN_CLASSES_DIR . '/class-post-filter.php';






