<?php
function fullstack_admin_notices()
{
?>
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
<?php
}

// Hook the custom notice function to the admin_notices action
add_action('admin_notices', 'fullstack_admin_notices');
