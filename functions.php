<?php

// WordPress helper functions
function b_the_content() {
    return apply_filters('the_content', get_the_content());
}

function b_get_the_post_thumbnail() {
    return wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '')[0];
}
