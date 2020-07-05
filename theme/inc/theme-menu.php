<?php

function theme_register_menu() {
    register_nav_menu('theme_main_nav',__('Main'));
}

add_action('init', 'theme_register_menu');
