<?php
add_filter('use_block_editor_for_post_type', '__return_false');

add_shortcode('cy_codeyad', function ($atts, $content, $tag) {

    return '<h1>' . $content . '</h1>';
});
