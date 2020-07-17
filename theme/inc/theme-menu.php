<?php

function theme_register_menu() {
  register_nav_menu('main_nav',__('Main Menu'));
}

add_action('init', 'theme_register_menu');
