<?php

/**
 * Title: Query Posts: Small
 * Slug: fullstack/query-posts-sm
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":{"background":"var:preset|color|background"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="
    background-color: var(--wp--preset--color--background);
    padding-top: var(--wp--preset--spacing--50);
    padding-bottom: var(--wp--preset--spacing--50);
  ">
    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textColor":"luminous-vivid-amber"} -->
        <h2 class="wp-block-heading has-luminous-vivid-amber-color has-text-color">
            Blog
        </h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 40%">
                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"border":{"radius":"var:custom|border-radius|low-rounded"}}} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis: 75%">
                <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}}},"className":"query-title","fontSize":"large"} /-->

                <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":25,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}}},"textColor":"base","fontSize":"small"} /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->