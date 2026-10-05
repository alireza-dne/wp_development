<?php



/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_book_init()
{
    $labels = array(
        'name'                  => 'کتاب‌ها',
        'singular_name'         => 'کتاب',
        'menu_name'             => 'کتاب‌ها',
        'name_admin_bar'        => 'کتاب',
        'add_new'               => 'افزودن',
        'add_new_item'          => 'افزودن کتاب جدید',
        'new_item'              => 'کتاب جدید',
        'edit_item'             => 'ویرایش کتاب',
        'view_item'             => 'مشاهده کتاب',
        'all_items'             => 'همه کتاب‌ها',
        'menu_icon'             => 'dashicons-book',
        'search_items'          => 'جستجوی کتاب‌ها',
        'parent_item_colon'     => 'کتاب مادر:',
        'not_found'             => 'کتابی پیدا نشد.',
        'not_found_in_trash'    => 'کتابی در زباله‌دان پیدا نشد.',
        'featured_image'        => 'تصویر جلد کتاب',
        'set_featured_image'    => 'انتخاب تصویر جلد کتاب',
        'remove_featured_image' => 'حذف تصویر جلد کتاب',
        'use_featured_image'    => 'استفاده به عنوان تصویر جلد کتاب',
        'archives'              => 'آرشیو کتاب‌ها',
        'insert_into_item'      => 'درج در کتاب',
        'uploaded_to_this_item' => 'آپلود شده در این کتاب',
        'filter_items_list'     => 'فیلتر لیست کتاب‌ها',
        'items_list_navigation' => 'ناوبری لیست کتاب‌ها',
        'items_list'            => 'لیست کتاب‌ها',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'book'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-book',
        'supports'           => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            '  ',
            'comments'
        ),
    );

    register_post_type('book', $args);
}


add_action('init', 'wpdocs_codex_book_init');


// $update = update_post_meta(11, 'age', 30);