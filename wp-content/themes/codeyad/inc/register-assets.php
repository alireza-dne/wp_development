<?php

add_action('wp_enqueue_scripts', 'cy_theme_register_style');


function cy_theme_register_style()
{
    wp_enqueue_style('cy_app_style', ASSET . 'css/style.css', [], '1.0.0');
    wp_enqueue_script('cy-app-script', ASSET . 'js/app.js', ['jquery'], '1.0.0', true);
}
