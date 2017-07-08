<?php
/**
 * The template for displaying search results pages.
 *
 * @package jaybauerstarter
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

get_header(); ?>

<div class="main-wrap" role="main">

<?php do_action( 'jaybauerstarter_before_content' ); ?>

<article <?php post_class('main-content') ?> id="search-results">
	<header>
	    <h1 class="entry-title">Search results for <?php echo get_search_query(); ?></h1>
	</header>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	<?php do_action( 'jaybauerstarter_before_pagination' ); ?>

	<?php
	if ( function_exists( 'jaybauerstarter_pagination' ) ) :
		jaybauerstarter_pagination();
	elseif ( is_paged() ) :
	?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
			<div class="post-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
		</nav>
	<?php endif; ?>

</article>

<?php do_action( 'jaybauerstarter_after_content' ); ?>
<?php get_sidebar(); ?>

</div>

<?php get_footer();
