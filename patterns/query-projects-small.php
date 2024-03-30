<?php

/**
 * Title: Query Projects: Small
 * Slug: fullstack/query-projects-sm
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|background"}},"textColor":"base","className":"projects-element","layout":{"type":"constrained"}} -->
<div class="wp-block-group projects-element has-base-color has-text-color has-background" style="
    background-color: var(--wp--preset--color--background);
    padding-top: var(--wp--preset--spacing--50);
    padding-bottom: var(--wp--preset--spacing--60);
  ">
    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textColor":"luminous-vivid-amber"} -->
        <h2 class="wp-block-heading has-luminous-vivid-amber-color has-text-color">
            Projects
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"layout":{"type":"default"}} -->
        <div class="wp-block-query">
            <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:columns {"verticalAlignment":"center","className":"are-horizontally-aligned-center"} -->
            <div class="wp-block-columns are-vertically-aligned-center are-horizontally-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 100%">
                    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"var:custom|border-radius|mid-rounded"}}} /-->

                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}}},"textColor":"highlights", "fontSize":"large"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->

        <!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}}},"textColor":"highlights","fontSize":"small"} -->
        <p class="has-text-align-right has-highlights-color has-text-color has-link-color has-small-font-size">
            <a href="/projects" data-type="page" data-id="55">Browse projects</a>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->