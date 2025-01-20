<?php

/*
Plugin Name: Social Share
Description: Social Share Elementor Widget
Plugin URI:  
Version:     1.0.4
Author:      S
Author URI:  
Text Domain: tcg
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function cr_plugin_loaded_text_domain (){

    load_plugin_textdomain('tcg', false, dirname(__FILE__).'/languages');

}

add_action('plugins_loaded', 'cr_plugin_loaded_text_domain');
 


require_once( plugin_dir_path( __FILE__ ) . 'base.php');


