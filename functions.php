<?php
require get_theme_file_path('/assets/php/enqueue_scripts.php');
require get_theme_file_path('/assets/php/modules.php');
require get_theme_file_path('/assets/php/admin-notices.php');

add_action('wp_enqueue_scripts', 'custom_styles');

function custom_styles()
{
    wp_enqueue_style('styles', get_theme_file_uri() . '/assets/css/styles.css');
    wp_enqueue_style('root-variables', get_theme_file_uri() . '/assets/css/root.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css');
}

add_filter('wp_lazy_loading_enabled', '__return_false');
