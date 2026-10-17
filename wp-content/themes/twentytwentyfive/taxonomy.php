<?php

function wpdocs_create_book_taxonomies()
{
    // افزودن طبقه‌بندی جدید به‌صورت سلسله‌مراتبی (مانند دسته‌بندی‌ها)
    $labels = array(
        'name'              => _x('ژانرها', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('ژانر', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('جستجوی ژانرها', 'textdomain'),
        'all_items'         => __('همه ژانرها', 'textdomain'),
        'parent_item'       => __('ژانر والد', 'textdomain'),
        'parent_item_colon' => __('ژانر والد:', 'textdomain'),
        'edit_item'         => __('ویرایش ژانر', 'textdomain'),
        'update_item'       => __('به‌روزرسانی ژانر', 'textdomain'),
        'add_new_item'      => __('افزودن ژانر جدید', 'textdomain'),
        'new_item_name'     => __('نام ژانر جدید', 'textdomain'),
        'menu_name'         => __('ژانر', 'textdomain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'genre'),
    );

    register_taxonomy('genre', array('book'), $args);

    // unset($args);
    // unset($labels);

    // // Add new taxonomy, NOT hierarchical (like tags)
    // $labels = array(
    //     'name'                       => _x('Writers', 'taxonomy general name', 'textdomain'),
    //     'singular_name'              => _x('Writer', 'taxonomy singular name', 'textdomain'),
    //     'search_items'               => __('Search Writers', 'textdomain'),
    //     'popular_items'              => __('Popular Writers', 'textdomain'),
    //     'all_items'                  => __('All Writers', 'textdomain'),
    //     'parent_item'                => null,
    //     'parent_item_colon'          => null,
    //     'edit_item'                  => __('Edit Writer', 'textdomain'),
    //     'update_item'                => __('Update Writer', 'textdomain'),
    //     'add_new_item'               => __('Add New Writer', 'textdomain'),
    //     'new_item_name'              => __('New Writer Name', 'textdomain'),
    //     'separate_items_with_commas' => __('Separate writers with commas', 'textdomain'),
    //     'add_or_remove_items'        => __('Add or remove writers', 'textdomain'),
    //     'choose_from_most_used'      => __('Choose from the most used writers', 'textdomain'),
    //     'not_found'                  => __('No writers found.', 'textdomain'),
    //     'menu_name'                  => __('Writers', 'textdomain'),
    // );

    // $args = array(
    //     'hierarchical'          => false,
    //     'labels'                => $labels,
    //     'show_ui'               => true,
    //     'show_admin_column'     => true,
    //     'update_count_callback' => '_update_post_term_count',
    //     'query_var'             => true,
    //     'rewrite'               => array('slug' => 'writer'),
    // );

    // register_taxonomy('writer', 'book', $args);
}

add_action('init', 'wpdocs_create_book_taxonomies', 0);



// add_action('init', function () {
//     $genres = get_terms([
//         'taxonomy'   => 'genre',
//         'hide_empty' => false,
//     ]);

//     echo '<pre>';
//     var_dump('count($genres)');
//     echo '</pre>';
// });



$args = [
    'post_type' => 'book',
    'author_not_in' => [1, 2],
    // 'tax_query' => [
    //     // [
    //     //     'taxonomy' => 'genre',
    //     //     'field'    => 'slug',
    //     //     'terms'    => 'lesson',
    //     // ],
    // ],
];



$query = new WP_Query($args);

echo '<pre>';
foreach ($query->get_posts() as $post) {
    // var_dump($post);
}
echo '</pre>';
