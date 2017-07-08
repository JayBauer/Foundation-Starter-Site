<?php
/**
 * Change the class for sticky posts to .wp-sticky to avoid conflicts with Foundation's Sticky plugin
 *
 * @package jaybauerstarter
 * @since 1.0
 * @author Jay Bauer &lt;jaybauermusic@gmail.com&gt;
 * @copyright Copyright (c) 2017, Jay Bauer
 * @link https://www.jaybauer.ca
*/

if ( ! function_exists( 'jaybauerstarter_sticky_posts' ) ) :
function jaybauerstarter_sticky_posts( $classes ) {
	if ( in_array( 'sticky', $classes, true ) ) {
	    $classes = array_diff($classes, array('sticky'));
	    $classes[] = 'wp-sticky';
	}
	return $classes;
}
add_filter('post_class','jaybauerstarter_sticky_posts');

endif;
