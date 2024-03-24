<?php

/**
 * Title: Archive: Projects
 * Slug: fullstack/archive-projects
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"}}},"className":"container projects-archive hide-on-touch","layout":{"type":"constrained","contentSize":"1000px"}} -->
<main class="wp-block-group container projects-archive hide-on-touch" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"top":"var:preset|spacing|40"}}},"className":"project-archive-title"} /-->

    <!-- wp:query {"queryId":2,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":10},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
        <p style="margin-bottom:var(--wp--preset--spacing--30)">A selection of recent works that showcase my expertise in fullstack software development and WordPress. Explore to see my experience in action.</p>
        <!-- /wp:paragraph -->

        <!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"","height":"","className":"hide-on-touch"} /-->

        <!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"fontSize":"1.4em","fontStyle":"normal","fontWeight":"500"}},"textColor":"base"} /-->

        <!-- wp:post-excerpt {"excerptLength":30} /-->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous {"label":"Newer Posts"} /-->

        <!-- wp:query-pagination-next {"label":"Older Posts"} /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->

    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</main>
<!-- /wp:group -->