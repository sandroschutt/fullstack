<?php

/**
 * Title: Projects
 * Slug: fullstack/projects
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"container projects-archive hide-on-touch","layout":{"type":"constrained"}} -->
<main class="wp-block-group container projects-archive hide-on-touch" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide","className":"project-archive-title"} /-->

    <!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":12},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
        <p style="margin-bottom:var(--wp--preset--spacing--30);">A description for your projects. Feel free to alter this according to your needs.</p>
        <!-- /wp:paragraph -->

        <!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"hide-on-touch"} /-->

        <!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"fontSize":"var(--wp--custom--fonts--sizes--post-query-title)","fontStyle":"normal"}},"textColor":"base"} /-->

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