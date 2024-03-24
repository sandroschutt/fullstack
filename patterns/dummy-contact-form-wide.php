<?php

/**
 * Title: dummy contact form wide
 * Slug: fullstack/dummy-contact-form-wide
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:html -->
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
<!-- wp:html /-->