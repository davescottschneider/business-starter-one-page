<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Business Starter One Page
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function business_starter_one_page_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'business_starter_one_page_jetpack_setup' );
