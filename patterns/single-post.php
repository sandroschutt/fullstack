<?php

/**
 * Title: Single: Post
 * Slug: fullstack/single-post
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"className":"container single-post hide-on-touch","layout":{"type":"constrained","contentSize":"var:global|layout|content-size"}} -->
<main class="wp-block-group container single-post hide-on-touch" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
    <div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"16/9","overlayColor":"contrast","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50","top":"calc(-1 * var(--wp--preset--spacing--50))"}}}} /-->

        <!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|30"}},"typography":{"fontSize":"3rem"}}} /-->

        <!-- wp:paragraph {"className":"read-time","fontSize":"small"} -->
        <p class="read-time has-small-font-size"></p>
        <!-- /wp:paragraph -->

        <!-- wp:post-date /-->

        <!-- wp:post-content {"className":"post-content type-post","layout":{"type":"constrained","contentSize":"var:global|layout|content-size","wideSize":"var:global|layout|content-size"}} /-->

        <!-- wp:columns {"style":{"padding":{"top":"var:preset|spacing|40"}}} -->
        <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"10%"} -->
            <div class="wp-block-column" style="flex-basis:7%"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>Tags:</strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"bottom"} -->
            <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:post-terms {"term":"post_tag"} /--></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"luminous-vivid-amber","className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-luminous-vivid-amber-color has-alpha-channel-opacity has-luminous-vivid-amber-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)" />
        <!-- /wp:separator -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">Read More:</h5>
        <!-- /wp:heading -->

        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"chevron","style":{"typography":{"fontStyle":"normal","fontWeight":"var:custom|posts|pagination|font-weight"}}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:post-navigation-link {"textAlign":"right","showTitle":true,"arrow":"chevron","style":{"typography":{"fontStyle":"normal","fontWeight":"var:custom|posts|pagination|font-weight"}}} /--></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->