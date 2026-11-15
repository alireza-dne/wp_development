<?php

add_action('wp_enqueue_scripts', 'cy_theme_register_style');


function cy_theme_register_style()
{
    wp_enqueue_style('cy_zaira_animate', ASSET . 'zaira/assets/css/animate.min.css');
    wp_enqueue_style('cy_zaira_bootstrap', ASSET . 'zaira/assets/css/bootstrap.min.css');
    wp_enqueue_style('cy_zaira_default', ASSET . 'zaira/assets/css/default.css');
    wp_enqueue_style('cy_zaira_flaticon', ASSET . 'zaira/assets/css/flaticon.css');
    wp_enqueue_style('cy_zaira_fontawesome', ASSET . 'zaira/assets/css/fontawesome-all.min.css');
    wp_enqueue_style('cy_zaira_magnific-popup', ASSET . 'zaira/assets/css/magnific-popup.css');
    wp_enqueue_style('cy_zaira_slick', ASSET . 'zaira/assets/css/slick.css');
    wp_enqueue_style('cy_zaira_swiper-bundle', ASSET . 'zaira/assets/css/swiper-bundle.css');
    wp_enqueue_style('cy_zaira_style', ASSET . 'zaira/assets/css/style.css');
    wp_enqueue_style('cy_zaira_responsive', ASSET . 'zaira/assets/css/responsive.css');

    wp_enqueue_style('cy_app_style', ASSET . 'css/style.css', [], '1.0.0');



    // wp_enqueue_script('cy_zaira_jquery', ASSET . 'zaira/assets/js/vendor/jquery-3.6.0.min.js', [], '1.0.0', true);
    wp_enqueue_script('cy_zaira_bootstrap_min', ASSET . 'zaira/assets/js/bootstrap.min.js', [], '1.0.0', true);
    wp_enqueue_script('cy_zaira_ajax_form', ASSET . 'zaira/assets/js/ajax-form.js', [], '1.0.0', true);
    wp_enqueue_script('cy_zaira_jquery_magnific_popup_min', ASSET . 'zaira/assets/js/jquery.magnific-popup.min.js', [], '1.0.0', true);
    wp_enqueue_script('cy_zaira_slick', ASSET . 'zaira/assets/js/slick.min.js', [], '1.0.0', true);
    wp_enqueue_script('cy_zaira_swiper_bundle', ASSET . 'zaira/assets/js/swiper-bundle.js', [], '1.0.0', true);
    wp_enqueue_script('cy_zaira_wow_min', ASSET . 'zaira/assets/js/wow.min.js', [], '1.0.0', true);
    wp_enqueue_script('cy_zaira_main', ASSET . 'zaira/assets/js/main.js', [], '1.0.0', true);

    wp_enqueue_script('cy-app-script', ASSET . 'js/app.js', ['jquery'], '1.0.0', true);
}
