<?php

/**
 * Title: Blog
 * Slug: fullstack/blog
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"container hide-on-touch","layout":{"type":"constrained"}} -->
<main class="wp-block-group container hide-on-touch" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1,"align":"wide"} -->
    <h1 class="wp-block-heading alignwide">Blog </h1>
    <!-- /wp:heading -->

    <!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","className":"blog-archive","layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"100%","align":"wide"} /-->

        <!-- wp:post-title {"isLink":true, "style":{"typography":{"fontSize":"var(--wp--custom--fonts--sizes--post-query-title)"}}} /-->

        <!-- wp:post-excerpt {"excerptLength":16} /-->

        <!-- wp:post-date {"isLink":true} /-->

        <!-- wp:spacer {"height":"var(--wp--preset--spacing--40)"} -->
        <div aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
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