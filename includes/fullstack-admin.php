<?php
namespace FUllstack;

require_once dirname(dirname(__FILE__)) . "/includes/fullstack-interface.php";

class FullstackAdminSettings implements FullstackInterface
{
    public function enqueue_scripts()
    {
    }

    public function enqueue_styles()
    {
    }

    public function admin_notices()
    { ?>
        <div class="notice notice-warning is-dismissible">
            <p><?php _e('This theme requires the following plugins to work properly:', 'text-domain'); ?></p>
            <ul style="padding-left: 24px; list-style: disc;">
                <li>
                    <?php _e('<strong><a href="https://github.com/sandroschutt/highlight-code-snippets">Fullstack Highlight Code Snippets</a></strong> to show formated code in your posts and projects', 'text-domain'); ?>
                </li>
                <li>
                    <?php _e('<strong><a href="https://github.com/sandroschutt/wp-custom-charts-block">Fullstack Custom Charts</a></strong> to display data graphically in your about page and anywhere you wish', 'text-domain'); ?>
                </li>
                <li>
                    <?php _e('<strong><a href="https://wordpress.org/plugins/advanced-custom-fields/">Advanced Custom Fields (AFC)</a></strong> to add the "Projects" post type and its custom fields. You can find the ACF settings file inside the theme.', 'text-domain'); ?>
                </li>
                <li>
                    <?php _e('<strong><a href="https://wordpress.org/plugins/safe-svg/">Safe SVG</a></strong> to protect your SVG files from XML/SVG attacks.', 'text-domain'); ?>
                </li>
            </ul>
        </div>
    <?php }

    public function create_projects_post_type()
    {
        /**
         * Register the 'projects' post type and its dependencies.
         */

        $labels = array(
            'name'               => _x('Projects', 'post type general name', 'textdomain'),
            'singular_name'      => _x('Project', 'post type singular name', 'textdomain'),
            'menu_name'          => _x('Projects', 'admin menu', 'textdomain'),
            'name_admin_bar'     => _x('Project', 'add new on admin bar', 'textdomain'),
            'add_new'            => _x('Add New', 'project', 'textdomain'),
            'add_new_item'       => __('Add New Project', 'textdomain'),
            'new_item'           => __('New Project', 'textdomain'),
            'edit_item'          => __('Edit Project', 'textdomain'),
            'view_item'          => __('View Project', 'textdomain'),
            'all_items'          => __('All Projects', 'textdomain'),
            'search_items'       => __('Search Projects', 'textdomain'),
            'parent_item_colon'  => __('Parent Projects:', 'textdomain'),
            'not_found'          => __('No projects found.', 'textdomain'),
            'not_found_in_trash' => __('No projects found in Trash.', 'textdomain')
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __('A custom post type for your professional projects', 'textdomain'),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'projects'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_icon'          => 'dashicons-portfolio',
            'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
            'show_in_rest'         => true
        );

        if (!post_type_exists('projects')) {
            register_post_type('projects', $args);
        }
    }
}
