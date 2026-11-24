<?php

// 1. اضافه کردن ستون به جدول نوشته‌ها
add_filter('manage_post_posts_columns', 'cy_add_post_selective_column');

function cy_add_post_selective_column($columns)
{
    $new_columns = [];

    foreach ($columns as $key => $value) {

        if ($key === 'date') {
            $new_columns['cy_post_selected'] = 'نوشته منتخب';
        }

        $new_columns[$key] = $value;
    }

    return $new_columns;
}


// 2. نمایش مقدار ستون
add_action('manage_post_posts_custom_column', 'cy_show_post_selective_column', 10, 2);

function cy_show_post_selective_column($column, $post_id)
{
    if ($column === 'cy_post_selected') {

        $value = get_post_meta($post_id, 'cy_cmb2_post_selective', true);

        if ($value === 'on') {
            echo '<span style="color:green;font-weight:bold;">بله</span>';
        } else {
            echo '<span style="color:red;">خیر</span>';
        }
    }
}


// 3. قابل مرتب‌سازی کردن ستون
add_filter('manage_edit-post_sortable_columns', 'cy_sortable_post_selective_column');

function cy_sortable_post_selective_column($columns)
{
    $columns['cy_post_selected'] = 'selected_meta';
    return $columns;
}


// 4. تنظیم Query برای مرتب‌سازی
add_action('pre_get_posts', 'cy_sort_post_selective_posts');

function cy_sort_post_selective_posts($query)
{
    if (
        !is_admin() ||
        !$query->is_main_query() ||
        $query->get('post_type') !== 'post' ||
        $query->get('orderby') !== 'selected_meta'
    ) {
        return;
    }

    $query->set('meta_query', [
        'relation' => 'OR',

        'selected_meta' => [
            'key'     => 'cy_cmb2_post_selective',
            'compare' => 'EXISTS',
        ],

        [
            'key'     => 'cy_cmb2_post_selective',
            'compare' => 'NOT EXISTS',
        ],
    ]);
}
