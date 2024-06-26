<?php

/**
 * Title: Footer
 * Slug: fullstack/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"background":"var:preset|color|background"}},"className":"hide-on-touch","layout":{"type":"constrained"}} -->
<div class="wp-block-group hide-on-touch has-background" style="background-color:var(--wp--preset--color--background);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"site-footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group site-footer"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"25px","style":{"layout":{"type":"constrained"}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0;flex-basis:25px"><!-- wp:image {"align":"center","width":"25px","height":"25px","scale":"contain","sizeSlug":"large","linkDestination":"custom","style":{"color":{"duotone":["#fcb900","#ffffff"]}},"className":"hide-on-touch"} -->
                <figure class="wp-block-image aligncenter size-large is-resized hide-on-touch">
                    <a href="https://linkedin.com/in/your-username">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/linkedin.svg" alt="" class="wp-image-92" style="object-fit:contain;width:25px;height:25px" />
                    </a>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"25px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25px"><!-- wp:image {"align":"center","width":"25px","height":"25px","scale":"contain","sizeSlug":"large","linkDestination":"custom","style":{"color":{"duotone":["#fcb900","#ffffff"]}},"className":"hide-on-touch"} -->
                <figure class="wp-block-image aligncenter size-large is-resized hide-on-touch">
                    <a href="https://github.com/your-username">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/square-github.svg" alt="" class="wp-image-93" style="object-fit:contain;width:25px;height:25px" />
                    </a>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"25px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25px"><!-- wp:image {"align":"center","width":"25px","height":"25px","scale":"contain","sizeSlug":"large","linkDestination":"custom","style":{"color":{"duotone":["#fcb900","#ffffff"]}},"className":"hide-on-touch"} -->
                <figure class="wp-block-image aligncenter size-large is-resized hide-on-touch">
                    <a href="https://facebook.com/your-username">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/square-facebook.svg" alt="" class="wp-image-94" style="object-fit:contain;width:25px;height:25px" />
                    </a>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"25px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25px"><!-- wp:image {"align":"center","width":"25px","height":"25px","scale":"contain","sizeSlug":"large","linkDestination":"custom","style":{"color":{"duotone":["#fcb900","#ffffff"]}},"className":"is-style-default hide-on-touch"} -->
                <figure class="wp-block-image aligncenter size-large is-resized is-style-default hide-on-touch">
                    <a href="https://instagram.com/your-username">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/square-instagram.svg" alt="" class="wp-image-95" style="object-fit:contain;width:25px;height:25px" />
                    </a>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:custom|fonts|sizes|smaller"}},"textColor":"luminous-vivid-amber"} -->
    <p class="has-text-align-center has-luminous-vivid-amber-color has-text-color" style="font-size:var(--wp--custom--fonts--sizes--smaller)">©Fullstack <?= date('Y') ?> | All rights reserved</p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->