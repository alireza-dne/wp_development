<?php

global $wpdb;


// $users = $wpdb->get_results($wpdb->prepare("select * from $wpdb->users"));
// $users = $wpdb->get_row($wpdb->prepare("select * from $wpdb->users where ID=%d", 1));

$args = [
    'post_type' => 'book',
    'author__in' => [1, 2],
    // 'p' => 1,// ای دی دقیقال همین باشد
    // 'post_status' => ['draft',],
    // 'category__in' => [1],
    'comment_count' => ['value' => 25, 'compare' => '<'],
    // 'search' => '*ali*',
    // 'search_columns' => ['user_email'],
    // 'number' => 1,
    // 'order' => 'desc',
    // 'fields' => ['ID', 'user_email'],
    // 'date_query' => ['after' => '7 days ago'],
    // 'meta_query' => [
    //     'relation' => 'or',
    //     ['key' => 'first_name', 'value' => 'alireza'],
    //     ['key' => 'nickname', 'value' => 'alireza_dne', 'compare' => '!=']

    // ]
];

$books = new WP_Query($args);

foreach ($books->posts as $post) {
    echo '<pre>';
    // var_dump($post);
    var_dump(get_the_post_thumbnail_url());
    var_dump(get_post_meta(get_the_ID(), 'age'));
    echo '</pre>';
}

exit;
