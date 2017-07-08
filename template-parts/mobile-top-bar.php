<?php
/**
 * Template part for mobile top bar menu
 *
 * @package jaybauerstarter
 * @since 1.0
 * @author Jay Bauer &lt;jaybauermusic@gmail.com&gt;
 * @copyright Copyright (c) 2017, Jay Bauer
 * @link https://www.jaybauer.ca
*/
?>

<div class="site-title-bar title-bar" <?php jaybauerstarter_title_bar_responsive_toggle(); ?>>
  <div class="title-bar-right">
    <button class="menu-icon" type="button" data-toggle="<?php jaybauerstarter_mobile_menu_id(); ?>"></button>
    <span class="site-mobile-title title-bar-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </span>
  </div>
</div>
<nav class="mobile-menu vertical menu" id="<?php jaybauerstarter_mobile_menu_id(); ?>" role="navigation">
  <?php jaybauerstarter_mobile_nav(); ?>
</nav>
