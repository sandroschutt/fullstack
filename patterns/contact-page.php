<?php

/**
 * Title: contact page
 * Slug: fullstack/contact-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"container contact","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group container contact" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-title {"textAlign":"left"} /-->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"35%"} -->
        <div class="wp-block-column" style="flex-basis:35%"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","fontSize":"1.5rem"}}} -->
            <h4 class="wp-block-heading" style="font-size:1.5rem;font-style:normal;font-weight:600;text-transform:uppercase">Don't be shy!</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}}} -->
            <p style="font-size:0.8rem">The form beside is styled based on WP Contact Form 7 (WPCF7), with comprehensive documentation included for easy reproduction. Get the same sleek design and functionality hassle-free.</p>
            <!-- /wp:paragraph -->

            <!-- wp:html -->
            <div>
                <i class="bi bi-envelope-fill"></i>
                <span><strong>Mail me</strong></span>
            </div>
            <!-- /wp:html -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
            <p style="font-size:0.9rem">developer@localhost</p>
            <!-- /wp:paragraph -->

            <!-- wp:html -->
            <div>
                <i class="bi bi-whatsapp"></i>
                <span><strong>Call me</strong></span>
            </div>
            <!-- /wp:html -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
            <p style="font-size:0.9rem">+55 99 99999-9999</p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"className":"is-style-default","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
            <ul class="wp-block-social-links is-style-default"><!-- wp:social-link {"url":"https://github.com","service":"github"} /-->

                <!-- wp:social-link {"url":"https://linkedin.com/in","service":"linkedin"} /-->

                <!-- wp:social-link {"url":"https://facebook.com/https://www.facebook.com","service":"facebook"} /-->

                <!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <!-- wp:pattern {"slug": "fullstack/dummy-contact-form-wide"} /-->
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->