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

get_header(); ?>

<div class="main-wrap" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'jaybauerstarter_pagination' ) ) :
			jaybauerstarter_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous">&larr; Older posts</div>
				<div class="post-next">Newer posts &rarr;</div>
			</nav>
		<?php endif; ?>

	</article>
	<?php get_sidebar(); ?>

</div>

<?php get_footer();
