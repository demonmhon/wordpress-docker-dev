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

$logo_img = get_theme_main_logo();

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
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
          <?php if ($logo_img) : ?>
            <span class="logo">
              <img src="<?php echo $logo_img ?>" alt="<?php bloginfo('name'); ?>" class="logo-img logo-img-default">
            </span>
            <?php endif ?>
            <span class="text"><?php bloginfo('name'); ?></span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu--main" aria-controls="nav-menu--main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <div class="hamburger hamburger--slider">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </button>
          <div class="nav-menu--main collapse navbar-collapse" id="nav-menu--main">
            <?php get_template_part('template-parts/main-menu'); ?>
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
