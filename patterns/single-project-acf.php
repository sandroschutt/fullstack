<?php

/**
 * Title: Single: Project (ACF)
 * Slug: fullstack/single-project-acf
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":{"background":"var:preset|color|background"}},"textColor":"luminous-vivid-amber","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-luminous-vivid-amber-color has-text-color has-background" style="background-color:var(--wp--preset--color--background);padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}},"typography":{"fontSize":"var:custom|fonts|sizes|post-title","fontStyle":"normal","fontWeight":"var:custom|fonts|weight|light"}},"className":"container"} /-->

        <!-- wp:post-featured-image {"aspectRatio":"16/9","width":"70%","overlayColor":"contrast","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"border":{"radius":"var:custom|border-radius|mid-rounded"}},"className":"container project-featured-image hide-on-touch"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"container project-content hide-on-touch","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container project-content hide-on-touch"><!-- wp:columns {"className":"hide-on-touch"} -->
        <div class="wp-block-columns hide-on-touch"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center client-column"><!-- wp:paragraph {"className":"client-tag"} -->
                <p class="client-tag"></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"mobile-hidden"} -->
            <div class="wp-block-column mobile-hidden"></div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"mobile-hidden"} -->
            <div class="wp-block-column mobile-hidden"></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:paragraph {"className":"project-type hide-on-touch"} -->
        <p class="project-type hide-on-touch"><strong><?= esc_html_x('Type:', 'fullstack') ?></strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"project-technologies hide-on-touch","layout":{"type":"constrained"}} -->
        <div class="wp-block-group project-technologies hide-on-touch"><!-- wp:paragraph {"className":"project-technologies"} -->
            <p class="project-technologies"><i><strong><?= esc_html_x('Technologies: ','fullstack') ?></strong></i></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"style":{"color":{"background":"var:preset|color|background"}},"className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--separator);color:var(--wp--preset--color--separator)" />
        <!-- /wp:separator -->

        <!-- wp:post-content {"style":{"dimensions":{"minHeight":"var:custom|posts|min-height"}},"className":"post-content type-project","layout":{"type":"constrained"},"fontSize":"medium"} /-->

        <!-- wp:separator {"style":{"color":{"background":"var:preset|color|background"}},"className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--separator);color:var(--wp--preset--color--separator)" />
        <!-- /wp:separator -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">More Projects:</h5>
        <!-- /wp:heading -->

        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"chevron","style":{"typography":{"fontStyle":"normal","fontWeight":"var:custom|fonts|weight|medium"}}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:post-navigation-link {"textAlign":"right","showTitle":true,"arrow":"chevron","style":{"typography":{"fontStyle":"normal","fontWeight":"var:custom|fonts|weight|medium"}}} /--></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->