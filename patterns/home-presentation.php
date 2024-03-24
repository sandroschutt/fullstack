<?php

/**
 * Title: Home Presentation
 * Slug: fullstack/home-presentation
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"color":{"background":"#13203c"}},"className":"presentation","layout":{"type":"constrained"}} -->
<div class="wp-block-group presentation has-background" style="background-color:#13203c;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"4rem"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"luminous-vivid-amber"} -->
            <h1 class="wp-block-heading has-text-align-left has-luminous-vivid-amber-color has-text-color" style="margin-bottom:0px;font-size:4rem;font-style:normal;font-weight:600">FULLSTACK</h1>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"base"} -->
            <h1 class="wp-block-heading has-text-align-left has-base-color has-text-color" style="margin-bottom:0px;font-size:3rem;font-style:normal;font-weight:500">WORDPRESS</h1>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"3rem"}},"textColor":"luminous-vivid-amber"} -->
            <h1 class="wp-block-heading has-text-align-left has-luminous-vivid-amber-color has-text-color" style="font-size:3rem;font-style:normal;font-weight:400">DEVELOPER</h1>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":5,"textColor":"luminous-vivid-amber"} -->
            <h5 class="wp-block-heading has-luminous-vivid-amber-color has-text-color"><em>Benedict Example</em></h5>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}},"textColor":"luminous-vivid-amber","margin":{"top":"0"}} -->
            <p class="has-luminous-vivid-amber-color has-text-color" style="font-size:1rem"><em>Wordpress | Node | React | PHP | Laravel | MySql</em></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":133,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"hide-on-touch--transparency"} -->
            <figure class="wp-block-image aligncenter size-large hide-on-touch--transparency"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/presentation-2-1024x1024.png" alt="" class="wp-image-133" title="" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->