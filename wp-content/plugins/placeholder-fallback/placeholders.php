<?php

/*
Plugin Name: Placeholder Text
Plugin URI: http://wpbeaches.com
Description: Fallback for form/input placeholder text for older browsers
Author: Neil Gee
Version: 1.1.0
Author URI:http://coolestguidesontheplanet.com
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

// If called direct, refuse
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

//Script-tac-ulous -> Script Registration and Enqueue
function ng_placeholders_scripts() {

	wp_register_script ( 'placeholders' , plugins_url( '/js/placeholders.min.js',  __FILE__), '', '4.0.1', true );	

	wp_enqueue_script( 'placeholders' );
}

add_action( 'wp_enqueue_scripts', 'ng_placeholders_scripts' );