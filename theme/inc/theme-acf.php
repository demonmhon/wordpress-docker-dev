<?php

/**
 * Plugin: ACF
 * https://www.advancedcustomfields.com/
 */

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function theme_acf_init() {
	acf_update_setting('google_api_key', '');
}

function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_theme_file_path() . '/acf';
    return $paths;
}

function my_acf_json_save_point( $path ) {
    $path = get_theme_file_path() . '/acf';
    return $path;
}

add_action('acf/init', 'theme_acf_init');
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
