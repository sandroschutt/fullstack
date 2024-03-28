<?php
namespace Fullstack;

require_once dirname(__FILE__) . "/fullstack-public.php";
require_once dirname(__FILE__) . "/fullstack-admin.php";

class FUllstackSettings {
    private $public;
    private $admin;

    public function __construct() {
        $this->public = new FullstackPublicSettings();
        $this->admin = new FullstackAdminSettings();
        $this->activation_hook();
        $this->action_hooks();
        $this->filter_hooks();
    }

    public function action_hooks() {
        add_action('wp_enqueue_scripts', array($this->public, 'enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this->public, 'enqueue_styles'));
        add_action('init', array($this->admin, 'create_projects_post_type'));
        add_action('wp_enqueue_scripts', array($this->admin, 'enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this->admin, 'enqueue_styles'));
        add_action('admin_notices', array($this->admin, 'admin_notices'));
    }

    public function filter_hooks() {
        add_filter("script_loader_tag", array($this->public, 'add_public_modules'), 10, 3);
    }

    public function activation_hook() {
        add_action('after_switch_theme', array($this->admin, 'create_theme_pages'));
    }
}
