<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/**
 * Admin Pages Class
 *
 * Handles generic Admin functionailties
 *

 */

class Postfilter_Admin {
    function __construct() {		
        add_action( 'admin_menu', array( $this, 'wp_post_filter_menu' ) );
        add_action( 'admin_enqueue_scripts', array( $this,'enqueue_react_app_scripts' ) );
    }


    public function enqueue_react_app_scripts() {
        // Get the directory URI of the plugin
        $plugin_dir_uri = plugins_url( '/', __FILE__ );

    
        // Enqueue React app JavaScript
        wp_enqueue_script(
            'react-app',
            $plugin_dir_uri . 'assets/js/main.app.js',
            array(), // Dependencies (if any)
            '1.0',   // Version number
            true     // Load script in footer
        );
    
        // Enqueue React app CSS
        wp_enqueue_style(
            'react-app-style',
            $plugin_dir_uri . 'assets/css/main.app.css',
            array(), // Dependencies (if any)
            '1.0'    // Version number
        );
        // Enqueue React app CSS
        wp_enqueue_style(
            'flt-plugin-style',
            $plugin_dir_uri . 'assets/css/style.css',
            array(), // Dependencies (if any)
            '1.0'    // Version number
        );
    }

    public function wp_post_filter_menu() {
        add_menu_page(
            'Post Filter',           // Page title
            'Post Filter',           // Menu title
            'manage_options',        // Capability
            'wp-post-filter',        // Menu slug
            array( $this, 'wp_post_filter_page' ),   // Callback function
            'dashicons-list-view'    // Icon 
        );
    }

    public function wp_post_filter_page() {
        ?>
        <div id="root">
            
        </div>
        <?php
    }
    
}
$Postfilter_Admin = new Postfilter_Admin;

