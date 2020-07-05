<?php

function theme_register_sidebar() {
    register_sidebar(array(
        'name'          => __('Primary Widgets'),
        'id'            => 'theme_widgets_primary',
        'description'   => __('Primary widgets'),
        'before_widget' => '<div class="wp-widget wp-widget__widget wp-widget__widget--primary wp-widget__item widget"><div class="wp-widget__body">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="wp-widget__title"><h3 class="wp-widget__title-text">',
        'after_title'   => '</h3></div>',
    ));
    register_sidebar(array(
        'name'          => __('Additional Widgets'),
        'id'            => 'theme_widgets_additional',
        'description'   => __('Addtional widgets on the side of the page'),
        'before_widget' => '<div class="wp-widget wp-widget__widget wp-widget__item widget"><div class="wp-widget__body">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="wp-widget__title"><h3 class="wp-widget__title-text">',
        'after_title'   => '</h3></div>',
    ));
}

add_action('widgets_init', 'theme_register_sidebar');
