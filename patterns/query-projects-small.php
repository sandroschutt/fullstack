<?php

/**
 * Title: Query Projects: Small
 * Slug: fullstack/query-projects-sm
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}},"color":{"background":"#13203c"}},"textColor":"base","className":"projects-element","layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group projects-element has-base-color has-text-color has-background" style="
    background-color: #13203c;
    padding-top: var(--wp--preset--spacing--50);
    padding-bottom: var(--wp--preset--spacing--60);
  ">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="padding-top: 0; padding-bottom: 0">
        <!-- wp:heading {"textColor":"luminous-vivid-amber"} -->
        <h2 class="wp-block-heading has-luminous-vivid-amber-color has-text-color">
            Projects
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>
            A selection of recent works that showcase my expertise in fullstack
            software development and Wordpress. Explore to see my experience in
            action.
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"layout":{"type":"default"}} -->
        <div class="wp-block-query">
            <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:columns {"verticalAlignment":"center","className":"are-horizontally-aligned-center"} -->
            <div class="wp-block-columns are-vertically-aligned-center are-horizontally-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 100%">
                    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"12px"}}} /-->

                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}}},"textColor":"highlights"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->

        <!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}}},"textColor":"highlights","fontSize":"small"} -->
        <p class="has-text-align-right has-highlights-color has-text-color has-link-color has-small-font-size">
            <a href="http://localhost:10068/projects/" data-type="page" data-id="55">Browse projects</a>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->