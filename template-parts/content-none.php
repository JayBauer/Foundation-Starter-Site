<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package jaybauerstarter
 * @since 1.0
 * @author Jay Bauer &lt;jaybauermusic@gmail.com&gt;
 * @copyright Copyright (c) 2017, Jay Bauer
 * @link https://www.jaybauer.ca
*/

?>

<header class="page-header">
	<h1 class="page-title">Nothing Found</h1>
</header>

<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p>
		<?php
			/* translators: %1$s: new post url */
			printf(
				'Ready to publish your first post? <a href="%1$s">Get started here</a>.',
				admin_url( 'post-new.php' )
			);
		?>
	</p>

	<?php elseif ( is_search() ) : ?>

	<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div>
