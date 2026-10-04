<?php

function add_text_to_footer()
{
    echo "<p class='text-center'>test text</p>";
}

add_action('wp_footer', 'add_text_to_footer');



// function add_text_to_title($post_title){
//     return $post_title.' test text';
// }

// add_filter( 'the_title', 'add_text_to_title' );