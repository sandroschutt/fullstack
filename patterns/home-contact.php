<?php

/**
 * Title: Home Contact
 * Slug: fullstack/home-contact
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|background"}},"textColor":"luminous-vivid-amber","className":"contact-element","layout":{"type":"constrained"}} -->
<div class="wp-block-group contact-element has-luminous-vivid-amber-color has-text-color has-background" style="background-color:var(--wp--preset--color--background);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","textColor":"luminous-vivid-amber","fontFamily":"michroma"} -->
    <h2 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color has-michroma-font-family">
        Contact
    </h2>
    <!-- /wp:heading -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"className":"contact-form"} -->
        <div class="wp-block-column contact-form"><!-- wp:html -->
            <form action="#">
                <p>
                    <label> <span class="contact-text">Name: *</span><br>
                        <span data-name="your-name">
                            <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="your-name">
                        </span>
                    </label>
                </p>
                <p>
                    <label> <span class="contact-text">E-mail: *</span><br>
                        <span data-name="your-email">
                            <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" value="" type="email" name="your-email">
                        </span>
                    </label>
                </p>
                <p>
                    <label> <span class="contact-text">Subject: *</span><br>
                        <span data-name="your-subject">
                            <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="text" name="your-subject">
                        </span>
                    </label>
                </p>
                <p>
                    <label> <span class="contact-text">Message: *</span><br>
                        <span data-name="your-message">
                            <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" name="your-message"></textarea>
                        </span>
                    </label>
                </p>
                <p>
                    <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Send">
                </p>
            </form>
            <!-- /wp:html -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"textColor":"base"} -->
            <p class="has-base-color has-text-color">The form beside is styled based on WP Contact Form 7 (WPCF7), with comprehensive documentation included for easy reproduction. Get the same sleek design and functionality hassle-free!</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->