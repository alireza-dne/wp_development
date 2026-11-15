<?php

add_action("after_setup_theme", "cy_init_them_setup");


function cy_init_them_setup()
{
    add_theme_support('post-thumbnails');
    add_filter("use_block_editor_for_post_type", '__return_false');
}
