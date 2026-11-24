<?php


add_action('cmb2_admin_init', 'cy_register_home_settings_page');

function cy_get_home_category_options($field)
{
    $terms = get_terms([
        'taxonomy'   => 'category',
        'hide_empty' => false,
    ]);

    $options = [];

    if (!is_wp_error($terms)) {
        foreach ($terms as $term) {
            $options[$term->term_id] = $term->name;
        }
    }

    return $options;
}

function cy_register_home_settings_page()
{
    $cmb = new_cmb2_box([
        'id'           => 'cy_home_settings_page',
        'title'        => 'تنظیمات صفحه اصلی',
        'object_types' => ['options-page'],
        'option_key'   => 'cy_home_settings',
        'parent_slug'  => 'themes.php',
    ]);

    $cmb->add_field([
        'name'       => 'انتخاب دسته بندی منتخب',
        'id'         => 'cy_home_category',
        'type'       => 'radio',
        'options_cb' => 'cy_get_home_category_options',
    ]);
}
