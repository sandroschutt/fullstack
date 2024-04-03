<?php
require_once dirname(__FILE__) . "/fullstack-public.php";
require_once dirname(__FILE__) . "/fullstack-admin.php";

class FUllstackSettings
{
    private $public;
    private $admin;

    public function __construct()
    {
        $this->public = new FullstackPublicSettings();
        $this->admin = new FullstackAdminSettings();
        $this->activation_hook();
        $this->action_hooks();
        $this->filter_hooks();
    }

    public function action_hooks()
    {
        add_action('init', array($this->admin, 'add_projects_post_type'));
        add_action('admin_notices', array($this->admin, 'add_admin_notices'));
        add_action('admin_menu', array($this->admin, 'add_theme_options_page'));
        add_action('wp_enqueue_scripts', array($this->public, 'enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this->public, 'enqueue_styles'));
        add_action('wp_enqueue_scripts', array($this->admin, 'enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this->admin, 'enqueue_styles'));
    }

    public function filter_hooks()
    {
        add_filter('wp_lazy_loading_enabled', '__return_false');
        add_filter("script_loader_tag", array($this->public, 'add_public_modules'), 10, 3);
    }

    public function activation_hook()
    {
        add_action('after_switch_theme', array($this->admin, 'add_theme_pages'));
        add_action('after_switch_theme', array($this->admin, 'theme_reading_settings'));
    }
}

$themeSettings = new FUllstackSettings();
