<?php

/**
 * Title: About Card
 * Slug: fullstack/about-card
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|background"}},"className":"about-element","layout":{"type":"constrained"}} -->
<div class="wp-block-group about-element has-background" style="background-color:var(--wp--preset--color--background);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textColor":"luminous-vivid-amber"} -->
    <h2 class="wp-block-heading has-luminous-vivid-amber-color has-text-color">About</h2>
    <!-- /wp:heading -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"var:custom|border-radius|mid-rounded"}},"className":"default-shadow"} -->
            <figure class="wp-block-image size-full has-custom-border default-shadow"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/profile.jpg" alt="" class="wp-image-611" style="width:100%;border-radius:var(--wp--custom--border-radius--mid-rounded)" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"about-element"} -->
        <div class="wp-block-column about-element"><!-- wp:paragraph {"textColor":"base","fontSize":"medium"} -->
            <p class="has-base-color has-text-color has-medium-font-size">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt. <strong><a href="/about" data-type="page" data-id="109">Learn more</a></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->