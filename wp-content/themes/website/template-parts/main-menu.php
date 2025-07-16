<!-- For static/demo template, uncomment the <ul.main-menu> -->
<!-- <div class="main-menu main-menu--header-nav navbar-nav mr-auto" id="main-menu--header-nav">
  <ul class="nav nav-pills">
    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link">ผลิตภัณฑ์</a></li>
    <li class="nav-item"><a href="#" class="nav-link">เฉดสี</a></li>
    <li class="nav-item"><a href="#" class="nav-link">ไอเดียตกแต่งบ้าน</a></li>
    <li class="nav-item"><a href="#" class="nav-link">แหล่งความรู้</a></li>
    <li class="nav-item"><a href="#" class="nav-link">เกี่ยวกับเรา</a></li>
  </ul>
</div> -->
<?php
  $nav_id = 'main_nav';
  $nav_menu = array(
    'theme_location'  =>  $nav_id,
    'depth'           => 2,
    'container'       => 'div',
    'container_class' => 'main-menu main-menu--header-nav navbar-nav mr-auto',
    'container_id'    => 'main-menu--header-nav',
    'menu_class'      => 'nav nav-pills',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
  );
  if (has_nav_menu( $nav_id  )) {
    wp_nav_menu( $nav_menu );
  }
?>
