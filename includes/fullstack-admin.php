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

    public function create_page(string $pageTitle)
    {
        $page = array(
            'post_title'    => $pageTitle,
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name' => strtolower($pageTitle)
        );

        $post_id = wp_insert_post($page);

        if (!is_wp_error($post_id)) {
            return $post_id;
        }

        return false;
    }

    public function create_theme_pages()
    {
        $pages = get_pages();
        $filteredPages = array();

        $fullstackPages = array(
            'home',
            'blog',
            'projects',
            'contact',
            'about'
        );

        foreach ($pages as $page) {
            array_push($filteredPages, $page->post_name);
        }

        foreach ($fullstackPages as $page) {
            if (!array_search($page, $filteredPages) && $filteredPages[array_search($page, $filteredPages)] !== 'about') {
                $this->create_page(ucwords($page));
            }
        }
    }

    public function theme_reading_settings()
    {
        $front_page = get_page_by_path('home');
        if ($front_page) {
            update_option('page_on_front', $front_page->ID);
            update_option('show_on_front', 'page');
        }

        $blog_page = get_page_by_path('blog');
        if ($blog_page) {
            update_option('page_for_posts', $blog_page->ID);
        }
    }

    public function add_theme_options_page()
    {
        add_options_page(
            'Fullstack Settings',
            'FS Settings',
            'manage_options',
            'fs-theme-options',
            array($this, 'render_custom_options_page')
        );
    }

    public function render_custom_options_page()
    {
    ?>
        <div class="wrap">
            <h1><?= esc_html_x('Fullstack Settings', 'fullstack') ?></h1>
            <p><?= esc_html_x('This is a brief description of the custom option page.', 'fullstack') ?></p>

            <form method="post" action="options.php">
                <?php
                // Add your select field here
                ?>
                <label for="template_select"><strong><?= esc_html_x('Enable transition effect:', '') ?></strong></label>
                <select name="template_select" id="template_select" style="display: block;">
                    <option value="true"><?= esc_html_x('Yes', 'fullstack') ?></option>
                    <option value="false"><?= esc_html_x('No', 'fullstack') ?></option>
                </select>

                <label for="template_select"><strong><?= esc_html_x('Single Project template:', '') ?></strong></label>
                <select name="template_select" id="template_select" style="display: block;">
                    <?php
                    // Get all registered post templates
                    $templates = get_page_templates();

                    // Loop through the templates and create an option for each
                    foreach ($templates as $slug => $name) {
                        echo '<option value="' . esc_attr($slug) . '">' . esc_html_x($name, 'fullstack') . '</option>';
                    }
                    ?>
                </select>

                <label for="ga4_token"><strong><?= esc_html_x('Google Analytics Token:', 'fullstack') ?></strong></label>
                <input type="text" name="ga4_token" id="ga4_token" value="<?php echo esc_attr(get_option('ga4_token')); ?>" style="display: block;">

                <?php
                // Output the save button
                submit_button('Save Changes');
                ?>
            </form>
        </div>
<?php
    }
}
