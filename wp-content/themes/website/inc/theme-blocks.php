<?php

/**
 * Register Custom Block Styles
 */
add_action('enqueue_block_editor_assets', function() {
  wp_enqueue_style(
    'block-styles-stylesheet',
    get_template_directory_uri() . '/assets/blocks-style.min.css',
    array(),
    '1.0'
  );
});

add_action( 'init', function() {
  if (function_exists('register_block_style')) {
    /**
     * Register stylesheet
     */
    // wp_register_style(
    //   'block-styles-stylesheet',
    //   get_template_directory_uri() . '/assets/blocks-style.min.css',
    //   array(),
    //   '1.0'
    // );
  }
});
