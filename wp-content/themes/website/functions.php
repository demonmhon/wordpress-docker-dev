<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
add_action('after_setup_theme', function() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('editor-styles');
  add_theme_support('html5', array('search-form'));
});

/**
 * Enqueue assets
 */
add_action('wp_default_scripts', function( $wp_scripts ) {
  if (is_admin()) return;
  $wp_scripts->add_data('jquery', 'group', 1);
  $wp_scripts->add_data('jquery-core', 'group', 1);
  $wp_scripts->add_data('jquery-migrate', 'group', 1);
});

add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('theme_styles_web', get_template_directory_uri() . '/assets/style.min.css', array(), null);
  wp_register_script('theme_script_web', get_template_directory_uri() . '/assets/script.min.js', array('jquery'), '1.0', true);
  wp_register_script('theme_script_fonts', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', array('jquery'), '1.0', true);

  wp_enqueue_script('theme_styles_web');
  wp_enqueue_script('theme_script_web');
  wp_enqueue_script('theme_script_fonts');

  if (is_singular() && comments_open() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
});

/**
 * Require theme functions
 */
require get_template_directory() . '/inc/theme-acf.php';
require get_template_directory() . '/inc/theme-blocks.php';
require get_template_directory() . '/inc/theme-customizer.php';
require get_template_directory() . '/inc/theme-functions.php';
require get_template_directory() . '/inc/theme-menu.php';
// require get_template_directory() . '/inc/theme-post-types.php';
// require get_template_directory() . '/inc/theme-tags.php';
// require get_template_directory() . '/inc/theme-widgets.php';
// require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
