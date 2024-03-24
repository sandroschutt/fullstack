<?php
add_filter("script_loader_tag", "add_modules", 10, 3);
function add_modules($tag, $handle, $src)
{
    $scripts = array(
        'jquery-module',
        'actions',
        'archive-blog',
        'projects',
        'archive-projects',
        'contact',
        'about',
        'countReadingTime',
        'projectsCarouselClick',
        'chart_js'
    );

    foreach ($scripts as $key => $script) {
        if ($script === $handle) {
            $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
        }
    }

    return $tag;
}