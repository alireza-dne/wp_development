<?php

add_action('cmb2_admin_init', 'cy_cmb2_add_post_selective_metabox');
/**
 * Define the metabox and field configurations.
 */
function cy_cmb2_add_post_selective_metabox()
{

    $cmb = new_cmb2_box(array(
        'id'            => 'cy_cmb2_post_selective_metabox',
        'title'         => 'انتخاب نوشته برای نمایش در هدر',
        'object_types'  => array('post',), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'closed'     => true,
    ));

    $cmb->add_field([
        'name'       => 'آیا نوشته در هدر نمایش داده شود؟',
        'id'         => 'cy_cmb2_post_selective',
        'type'       => 'radio_inline', //این تغییر میکند
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        'sanitization_cb' => 'my_custom_sanitization',
        'options' => [
            'on' => 'بله',
            'off' => 'خیر',
        ],
        'default' => 'off',
    ]);
}
