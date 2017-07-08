<?php
/**
 * Template part for desktop top bar menu
 *
 * @package jaybauerstarter
 * @since 1.0
 * @author Jay Bauer &lt;jaybauermusic@gmail.com&gt;
 * @copyright Copyright (c) 2017, Jay Bauer
 * @link https://www.jaybauer.ca
*/
?>

<nav class="site-navigation top-bar" role="navigation">
  <div class="top-bar-right">
    <?php jaybauerstarter_top_bar_r(); ?>
  </div>
  <div class="top-bar-left">
    <div class="site-desktop-title top-bar-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </div>
  </div>
</nav>
