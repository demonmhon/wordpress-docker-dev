<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>
<?php

$logo = get_stylesheet_directory_uri() . '/img/logo.png';

if (function_exists('get_field')) {
  if (get_field('header_logo', 'option')) {
    $logo = get_field('header_logo', 'option');
  }
}

?>
<body <?php body_class(); ?>>
<div class="layout__site-wrapper">
  <a href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
  <div id="top"></div>
  <!-- Site header -->
  <header id="layout__header" class="layout__header">
    <div class="layout__header-container">
      <nav class="navbar navbar-expand-md">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu--main" aria-controls="nav-menu--main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <div class="hamburger hamburger--slider">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </button>
          <div class="collapse navbar-collapse" id="nav-menu--main">
            <ul class="main-menu main-menu--header-nav navbar-nav mr-auto" id="main-menu--header-nav">
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
            </ul>
            <?php
              // $nav_menu =
              //   array(
              //     'theme_location' => 'theme_main_nav',
              //     'container'    => false,
              //     'menu_id'    => 'main-menu--header-nav',
              //     'menu_class'   => 'main-menu main-menu--header-nav navbar-nav mr-auto',
              //     'depth'      => 3,
              //     'walker'     => new bs4navwalker()
              //   );
              // wp_nav_menu($nav_menu);
            ?>
            <div class="form-inline my-2 my-lg-0">
              <?php get_template_part('template-parts/search-form'); ?>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- Page content -->
  <div id="content"></div>
  <div id="layout__content" class="layout__content">
    <div class="layout__content-container">
