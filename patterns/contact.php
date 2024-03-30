<?php

/**
 * Title: Contact
 * Slug: fullstack/contact
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"className":"container contact","layout":{"type":"constrained"}} -->
<div class="wp-block-group container contact" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-title {"textAlign":"left"} /-->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"35%"} -->
        <div class="wp-block-column" style="flex-basis:35%"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"var:custom|fonts|weight|bold","fontSize":"var:custom|fonts|sizes|post-query-title"}}} -->
            <h4 class="wp-block-heading" style="font-size:1.5rem;font-style:normal;font-weight:var(--wp--custom--fonts--weight--bold);text-transform:uppercase">Don't be shy!</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:custom|fonts|sizes|contact-info"}}} -->
            <p style="font-size:var(--wp--custom--fonts--sizes--contact-info)">The form beside is styled based on WP Contact Form 7 (WPCF7), with comprehensive documentation included for easy reproduction. Get the same sleek design and functionality hassle-free.</p>
            <!-- /wp:paragraph -->

            <!-- wp:html -->
            <div>
                <i class="bi bi-envelope-fill"></i>
                <span><strong>Mail me</strong></span>
            </div>
            <!-- /wp:html -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:custom|fonts|sizes|post-query-title"}}} -->
            <p style="font-size:var(--wp--custom--fonts--sizes--contact-info)">developer@localhost</p>
            <!-- /wp:paragraph -->

            <!-- wp:html -->
            <div>
                <i class="bi bi-whatsapp"></i>
                <span><strong>Call me</strong></span>
            </div>
            <!-- /wp:html -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:custom|fonts|sizes|post-query-title"}}} -->
            <p style="font-size:var(--wp--custom--fonts--sizes--contact-info)">+55 99 99999-9999</p>
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
        <div class="wp-block-column"><!-- wp:html -->
            <div class="wp-block-column">
                <form action="#">
                    <div class="input-field">
                        <label for="">
                            <input type="text" class="text" placeholder="Name*:" required>
                        </label>
                        <label for="">
                            <input type="text" class="text" placeholder="E-mail*:" required>
                        </label>
                    </div>

                    <div class="input-field">
                        <label for="">
                            <input type="text" placeholder="Subject*:" required>
                        </label>
                    </div>

                    <label for="">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Hi! This is a placeholder message!" required></textarea>
                    </label>

                    <div class="submit-field">
                        <span>
                            <input type="checkbox" class="checkbox" required>
                            <span>I have read and agreed to the <a href="#">terms and conditions</a>.</span>
                        </span>
                        <span>
                            <input type="submit">
                        </span>
                    </div>
                </form>
            </div>
            <!-- /wp:html -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->