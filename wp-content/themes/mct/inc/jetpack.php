<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package mct
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function mct_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'mct_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function mct_jetpack_setup
add_action( 'after_setup_theme', 'mct_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function mct_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function mct_infinite_scroll_render
