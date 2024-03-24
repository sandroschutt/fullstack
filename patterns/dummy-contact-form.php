<?php

/**
 * Title: dummy contact form
 * Slug: fullstack/dummy-contact-form
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:html -->
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
<!-- wp:html /-->