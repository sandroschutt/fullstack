<?php

/**
 * Title: Blog
 * Slug: fullstack/blog
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"container hide-on-touch","layout":{"type":"constrained","contentSize":"1000px"}} -->
<main class="wp-block-group container hide-on-touch" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"}}}} -->
    <h1 class="wp-block-heading alignwide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--50)">Tips &amp; Tricks </h1>
    <!-- /wp:heading -->

    <!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":12},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","className":"blog-archive","layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"","height":"clamp(15vw, 30vh, 400px)","align":"wide"} /-->

        <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.5rem"}}} /-->

        <!-- wp:post-excerpt {"excerptLength":16} /-->

        <!-- wp:post-date {"isLink":true} /-->

        <!-- wp:spacer {"height":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40)"} -->
        <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous {"label":"Newer Posts"} /-->

        <!-- wp:query-pagination-next {"label":"Older Posts"} /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</main>
<!-- /wp:group -->