<?php
/*
Template Name: Front Page
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<!-- Full-width header, image set in CSS -->
</header>
<?php do_action( 'jaybauerstarter_before_content' ); // Fixes potential WooCommerce styling headaches ?>

<section class="row expanded">
  <p>Content?</p>
</section>

<?php do_action( 'jaybauerstarter_after_content' ); // Fixes potential WooCommerce styling headaches ?>
<?php get_footer();
