<?php

define('THEME_CUSTOMIZER_HEADER_BG_COLOR', 'theme_appearance_header_bg_color');
define('THEME_CUSTOMIZER_HEADER_BG_IMG', 'theme_appearance_header_bg_img');
define('THEME_LOGO_IMG', 'theme_logo_img');
define('THEME_SHOW_SEARCH_BOX', 'theme_show_search_box');

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
    THEME_CUSTOMIZER_HEADER_BG_COLOR,
    array(
      'default' => ''
    )
  );
  $wp_customize->add_setting(
    THEME_CUSTOMIZER_HEADER_BG_IMG,
    array(
      'default' => ''
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize, THEME_CUSTOMIZER_HEADER_BG_COLOR, array(
        'label'  => __('Header Background Color'),
        'section'  => 'theme_appearance',
        'settings' => THEME_CUSTOMIZER_HEADER_BG_COLOR,
        'priority' => 10
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize, THEME_CUSTOMIZER_HEADER_BG_IMG, array(
        'label'  => __('Header Background Image'),
        'section'  => 'theme_appearance',
        'settings' => THEME_CUSTOMIZER_HEADER_BG_IMG,
        'priority' => 20
      )
    )
  );
}

function theme_customizer_register_layout($wp_customize) {
  $wp_customize->add_section(
    'theme_layout',
    array(
      'title'       => __('Layouts'),
      'description' => __(''),
      'priority'    => 902,
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
      'label'       => __('Widgets'),
      'description' => __('Show widgets in sidebar'),
      'section'     => 'theme_layout',
      'type'        => 'checkbox',
      'priority'    => 10
    )
  );
}

function theme_customizer_register_logo($wp_customize) {
  $wp_customize->add_setting(
    THEME_LOGO_IMG,
    array(
      'default' => ''
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control($wp_customize, THEME_LOGO_IMG,
      array(
        'label'       => __('Main Logo Image'),
        'section'     => 'title_tagline',
        'description' => __('The main logo appeared in header'),
        'priority'    => 100
      )
    )
  );
}

function theme_customizer_show_search_box($wp_customize) {
  $wp_customize->add_setting(
    THEME_SHOW_SEARCH_BOX,
    array(
      'default' => '1'
    )
  );
  $wp_customize->add_control(
    THEME_SHOW_SEARCH_BOX,
    array(
      'label'       => __('Show search box'),
      'description' => __('Show search box in website'),
      'section'     => 'title_tagline',
      'type'        => 'checkbox',
      'priority'    => 110
    )
  );
}


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

// add_action('customize_register' , 'theme_customizer_register_appearance');
// add_action('customize_register' , 'theme_customizer_register_layout');
add_action('customize_register' , 'theme_customizer_register_logo');
add_action('customize_register' , 'theme_customizer_show_search_box');

// get_theme_mod()
// --

// theme_appearance_header_bg_color
// theme_appearance_header_bg_img
// theme_layout_display_sidebar
// theme_show_search_box

function get_theme_main_logo() {
  return get_theme_mod(THEME_LOGO_IMG, '');
}

function should_show_search_box() {
  return get_theme_mod(THEME_SHOW_SEARCH_BOX, false);
}
