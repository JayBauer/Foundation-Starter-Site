<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package jaybauerstarter
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap" role="main">

<?php do_action( 'jaybauerstarter_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php jaybauerstarter_entry_meta(); ?>
		</header>
		<?php do_action( 'jaybauerstarter_post_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
		</div>
		<footer>
			<?php
				wp_link_pages(
					array(
						'before' => '<nav id="page-nav"><p>Pages:',
						'after'  => '</p></nav>',
					)
				);
			?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php the_post_navigation(); ?>
		<?php do_action( 'jaybauerstarter_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'jaybauerstarter_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'jaybauerstarter_after_content' ); ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
