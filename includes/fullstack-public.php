<?php
require_once dirname(dirname(__FILE__)) . "/includes/fullstack-interface.php";

class FullstackPublicSettings implements Fullstack\FullstackInterface
{
    public function enqueue_scripts()
    {
        wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css');
        wp_register_script('jquery', get_theme_file_uri() . '/assets/javascript/jquery.js', array('jquery'), null, true);
        wp_enqueue_script('jquery');
        wp_register_script('actions', get_theme_file_uri() . '/assets/javascript/actions/index.js', array('jquery'), null, true);
        wp_enqueue_script('actions');

        if (is_singular('post')) {
            wp_register_script('countReadingTime', get_theme_file_uri() . '/assets/javascript/actions/countReadingTime.js', array('jquery'), null, true);
            wp_enqueue_script('countReadingTime');
        }

        if (is_home()) {
            wp_register_script('archive-blog', get_theme_file_uri() . '/assets/javascript/archive-blog.js', array('jquery'), null, true);
            wp_enqueue_script('archive-blog');
        }

        if (is_singular(__('projects', 'fullstack'))) {
            wp_register_script('projects', get_theme_file_uri() . '/assets/javascript/projects.js', array('jquery'), null, true);
            wp_enqueue_script('projects');
        }

        if (is_post_type_archive(__('projects', 'fullstack'))) {
            wp_register_script('archive-projects', get_theme_file_uri() . '/assets/javascript/archive-projects.js', array('jquery'), null, true);
            wp_enqueue_script('archive-projects');
        }

        if (get_page_template_slug() === 'page-contact' || is_page("contact")) {
            wp_register_script(__('contact', 'fullstack'), get_theme_file_uri() . '/assets/javascript/contact.js', array('jquery'), null, true);
            wp_enqueue_script('contact');
        }

        if (get_page_template_slug() === "page-about" || is_page("about")) {
            wp_register_script('about', get_theme_file_uri() . '/assets/javascript/about.js', array('jquery'), null, true);
            wp_enqueue_script('about');
        }
    }

    public function enqueue_styles()
    {
        wp_enqueue_style('style', get_theme_file_uri() . '/assets/css/build/style.css');
        wp_enqueue_style('screen-small', get_theme_file_uri() . '/assets/css/build/screen/small.css');
        wp_enqueue_style('screen-medium', get_theme_file_uri() . '/assets/css/build/screen/medium.css');

        if (is_front_page()) {
            wp_register_style('home', get_theme_file_uri() . '/assets/css/build/home.css');
            wp_enqueue_style('home');
        }

        if (is_singular('post')) {
            wp_register_style('single-post', get_theme_file_uri() . '/assets/css/build/single-post.css');
            wp_enqueue_style('single-post');
        }

        if (is_singular(__('projects', 'fullstack'))) {
            wp_register_style('single-project', get_theme_file_uri() . '/assets/css/build/single-project.css');
            wp_enqueue_style('single-project');
        }

        if (is_post_type_archive(__('projects', 'fullstack'))) {
            wp_register_style('archive-projects', get_theme_file_uri() . '/assets/css/build/archive-projects.css');
            wp_enqueue_style('archive-projects');
        }

        if (get_page_template_slug() === 'page-contact' || is_page('contact')) {
            wp_register_style('contact', get_theme_file_uri() . '/assets/css/build/contact.css');
            wp_enqueue_style('contact');
        }

        if (get_page_template_slug() === "page-about" || is_page('about')) {
            wp_register_style('about-page', get_theme_file_uri() . '/assets/css/build/about.css');
            wp_enqueue_style('about-page');
        }
    }

    function add_public_modules($tag, $handle, $src)
    {
        $scripts = array(
            'jquery-module',
            'archive-blog',
            'archive-projects',
            'projects',
            'contact',
            'about',
            'countReadingTime',
        );

        foreach ($scripts as $key => $script) {
            if ($script === $handle) {
                $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
            }
        }

        return $tag;
    }
}
