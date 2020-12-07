<?php
  $nav_id = 'footer_nav';
  $nav_menu =
    array(
      'theme_location' => $nav_id,
      'container'      => false,
      'menu_id'        => 'footer-menu',
      'menu_class'     => 'footer-menu navbar-nav mr-auto',
      'depth'          => 1,
      'walker'         => new bs4navwalker()
    );
  if (has_nav_menu( $nav_id )) {
    wp_nav_menu($nav_menu);
  }
?>
