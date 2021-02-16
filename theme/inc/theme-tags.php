<?php

/**
 * Customize excerpt more
 */

function theme_excerpt_more( $more ) {
  global $post;
  return ' &hellip; <a href="'. get_permalink($post->ID) . '">Read more</a>';
}

add_filter('excerpt_more', 'theme_excerpt_more');
