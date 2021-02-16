<?php

/**
 * Custom Post type
 *
 * https://developer.wordpress.org/reference/functions/register_post_type/
 * https://developer.wordpress.org/reference/functions/register_taxonomy/
 */

function create_post_types() {
  $post_type_name = 'product';

  $post_type_labels = array(
    'name'          => __('Products'),
    'singular_name' => __('Product')
  );
  $post_type_args = array(
    'labels'        => $post_type_labels,
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 20, // below Pages
    'supports'      => array('title', 'editor', 'author', 'thumbnail'),
    'show_in_rest'  => true,
  );

  $taxonomy_labels = array(
    'name'          => __('Categories'),
    'singular_name' => __('Category'),
    'menu_name'     => __('Categories')
  );
  $taxonomy_args = array(
    'labels'  => $taxonomy_labels,
    'rewrite' => array(
      'slug'         => $post_type_name,
      'with_front'   => true,
      'hierarchical' => false
    ),
  );

  register_post_type($post_type_name, $post_type_args);
  register_taxonomy($post_type_name, array($post_type_name), $taxonomy_args);
}

add_action('init', 'create_post_types');
