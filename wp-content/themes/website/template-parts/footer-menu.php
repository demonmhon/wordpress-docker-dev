<?php
  $nav_id = 'footer_nav';
  $nav_menu = array(
    'theme_location'  => $nav_id,
    'depth'           => 2,
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'footer-menu',
    'menu_class'      => 'footer-menu navbar-nav mr-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
  );
  if (has_nav_menu( $nav_id  )) {
    wp_nav_menu( $nav_menu );
  }
?>
