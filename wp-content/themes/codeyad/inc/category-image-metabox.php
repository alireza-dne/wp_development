<?php


add_action('cmb2_admin_init', 'cy_cmb2_add_category_image_metabox');

function cy_cmb2_add_category_image_metabox()
{
    $cmb = new_cmb2_box([
        'id'           => 'cy_category_image_metabox',
        'title'        => 'تصویر دسته‌بندی',
        'object_types' => ['term'],
        'taxonomies'   => ['category'],
    ]);

    $cmb->add_field([
        'name'         => 'تصویر دسته‌بندی',
        'id'           => 'cy_category_image',
        'type'         => 'file',
        'options'      => [
            'url' => false,
        ],
        'text'         => [
            'add_upload_file_text' => 'انتخاب تصویر',
        ],
        'query_args'   => [
            'type' => 'image',
        ],
        'preview_size' => 'medium',
    ]);
}
