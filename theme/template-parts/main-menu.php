<!-- For static/demo template, uncomment the <ul.main-menu> -->
<!-- <ul class="main-menu main-menu--header-nav navbar-nav mr-auto" id="main-menu--header-nav">
  <li class="nav-item active">
    <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>
</ul> -->
<?php
  $nav_id = 'main_nav';
  $nav_menu =
    array(
      'theme_location' => 'main_nav',
      'container'      => false,
      'menu_id'        => 'main-menu--header-nav',
      'menu_class'     => 'main-menu main-menu--header-nav navbar-nav mr-auto',
      'depth'          => 2,
      'walker'         => new bs4navwalker()
    );
  if (has_nav_menu( $nav_id  )) {
    wp_nav_menu($nav_menu);
  }
?>
