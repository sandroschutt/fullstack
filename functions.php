<?php

/**
 * Theme settings are handled by the FullstackSettings class.
 */

namespace Fullstack;

require dirname(__FILE__) . "/includes/fullstack-settings.php";

$themeSettings = new FUllstackSettings();

add_filter('wp_lazy_loading_enabled', '__return_false');
