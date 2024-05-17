<?php 
if ( !defined( 'ABSPATH' ) ) exit;

class Postfilterhook {
    function __construct()
    {
        add_action( 'wp_enqueue_scripts', array($this, 'wp_post_listing_scripts')  );
    }

    public function wp_post_listing_scripts() {
        wp_enqueue_script( 'wp-post-listing-script', POSTFILTER_PLUGIN_DIR . './react/build/static/js/main.89e901b1.js', array( 'jquery' ), '1.0', true );
        
    }
}
$postfilterhook = new Postfilterhook;