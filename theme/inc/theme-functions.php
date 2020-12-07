<?php

function get_current_page_url() {
  global $wp;
  $current_url = home_url(add_query_arg(array(), $wp->request));
  return $current_url;
}

function get_social_network_icon_class($type) {
  $icons = array(
    'facebook' => 'facebook',
    'instagram' => 'instagram',
    'twitter' => 'twitter',
    'line' => 'line',
    'youtube' => 'youtube',
    'linkedin' => 'linkedin'
  );
  return isset($icons[$type]) ? $icons[$type] : '';
}

function get_current_page_template_name( $page_id = null ) {
  if ( !$template = get_page_template_slug( $page_id ) ) return;
  if ( !$file = locate_template( $template ) ) return;

  $data = get_file_data(
    $file,
    array(
      'Name' => 'Template Name',
    )
  );

  return $data['Name'];
}
