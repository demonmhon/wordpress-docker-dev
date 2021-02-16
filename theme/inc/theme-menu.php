<?php

function theme_register_menu() {
  register_nav_menu('main_nav', __('Main Menu'));
  register_nav_menu('footer_nav', __('Footer Menu'));
}

add_action('init', 'theme_register_menu');
