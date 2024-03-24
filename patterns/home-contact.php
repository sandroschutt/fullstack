<?php

/**
 * Title: Home Contact
 * Slug: fullstack/home-contact
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":{"background":"#13203c"}},"textColor":"luminous-vivid-amber","className":"contact-element","layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group contact-element has-luminous-vivid-amber-color has-text-color has-background" style="
    background-color: #13203c;
    padding-top: var(--wp--preset--spacing--50);
    padding-bottom: var(--wp--preset--spacing--50);
  ">
    <!-- wp:heading {"textAlign":"center","textColor":"luminous-vivid-amber"} -->
    <h2 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color">
        Contact
    </h2>
    <!-- /wp:heading -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"className":"contact-form"} -->
        <div class="wp-block-column contact-form">
            <!-- wp:pattern {"slug": "fullstack/dummy-contact-form"} -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"textColor":"base"} -->
            <p class="has-base-color has-text-color">The form beside is styled based on WP Contact Form 7 (WPCF7), with comprehensive documentation included for easy reproduction. Get the same sleek design and functionality hassle-free! </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->