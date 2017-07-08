<?php
/**
 * Basic WooCommerce support
 *
 * @package jaybauerstarter
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

get_header(); ?>

<div class="row">
	<div class="main-wrap" role="main">

	<?php do_action( 'jaybauerstarter_before_content' ); ?>

	<?php while ( woocommerce_content() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'jaybauerstarter_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'jaybauerstarter' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'jaybauerstarter_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'jaybauerstarter_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'jaybauerstarter_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer();
