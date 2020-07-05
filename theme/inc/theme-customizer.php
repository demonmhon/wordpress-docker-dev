<?php

function customizer_get_categories_select() {
  $categories = get_categories(array(
    'hide_empty' => 0
  ));

  $results = array();
  foreach ($categories as $cat) {
    $results[$cat->slug] = $cat->name;
  }

  return $results;
}

function theme_customizer_register_appearance($wp_customize) {
  $wp_customize->add_section(
    'theme_appearance',
    array(
      'title'     => __('Appearance'),
      'description' => __(''),
      'priority'  => 901,
    )
  );
  $wp_customize->add_setting(
    'theme_appearance_header_bg_color',
    array(
      'default' => ''
    )
  );
  $wp_customize->add_setting(
    'theme_appearance_header_bg_img',
    array(
      'default' => ''
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize, 'theme_appearance_header_bg_color', array(
        'label'  => __('Header Background Color'),
        'section'  => 'theme_appearance',
        'settings' => 'theme_appearance_header_bg_color',
        'priority' => 10
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize, 'theme_appearance_header_bg_img', array(
        'label'  => __('Header Background Image'),
        'section'  => 'theme_appearance',
        'settings' => 'theme_appearance_header_bg_img',
        'priority' => 20
      )
    )
  );
}

function theme_customizer_register_layout($wp_customize) {
  $wp_customize->add_section(
    'theme_layout',
    array(
      'title'     => __('Layouts'),
      'description' => __(''),
      'priority'  => 902,
    )
  );
  $wp_customize->add_setting(
    'theme_layout_display_sidebar',
    array(
      'default' => '1'
    )
  );
  $wp_customize->add_control(
    'theme_layout_display_sidebar',
    array(
      'label'     => __('Widgets'),
      'description' => __('Show widgets in sidebar'),
      'section'   => 'theme_layout',
      'type'    => 'checkbox',
      'priority'  => 10
    )
  );
}

add_action('customize_register' , 'theme_customizer_register_appearance');
add_action('customize_register' , 'theme_customizer_register_layout');

/**
 * Get customizer settings
 */
function get_theme_custom_header_styles() {
  $custom_header_styles = '';

  if (get_theme_mod('theme_appearance_header_bg_img') != '') {
    $custom_header_styles .= 'background-image:url(' . get_theme_mod('theme_appearance_header_bg_img') . ');';
  }
  if (get_theme_mod('theme_appearance_header_bg_color') != '') {
    $custom_header_styles .= 'background-color:' . get_theme_mod('theme_appearance_header_bg_color');
  }

  return $custom_header_styles;
}

// get_theme_mod()
// --

// theme_appearance_header_bg_color
// theme_appearance_header_bg_img

// theme_layout_display_sidebar
