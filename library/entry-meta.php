<?php
/**
 * Default template to display archive-like pages.
 *
 * @package jaybauerstarter
 * @since 1.0
 * @author Jay Bauer &lt;jaybauermusic@gmail.com&gt;
 * @copyright Copyright (c) 2017, Jay Bauer
 * @link https://www.jaybauer.ca
*/

if ( ! function_exists( 'jaybauerstarter_entry_meta' ) ) :
	function jaybauerstarter_entry_meta() {
		/* translators: %1$s: current date, %2$s: current time */
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( 'Posted on %1$s at %2$s.', get_the_date(), get_the_time() ) . '</time>';
		echo '<p class="byline author">Written by <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
	}
endif;
