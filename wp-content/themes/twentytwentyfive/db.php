<?php

global $wpdb;


// $users = $wpdb->get_results($wpdb->prepare("select * from $wpdb->users"));
// $users = $wpdb->get_row($wpdb->prepare("select * from $wpdb->users where ID=%d", 1));

$args = [
    'include' => [1, 2],
    // 'search' => '*ali*',
    // 'search_columns' => ['user_email'],
    // 'number' => 1,
    'order' => 'desc',
    'fields' => ['ID', 'user_email'],
    // 'date_query' => ['after' => '7 days ago'],
    'meta_query' => [
        'relation' => 'or',
        ['key' => 'first_name', 'value' => 'alireza'],
        ['key' => 'nickname', 'value' => 'alireza_dne', 'compare' => '!=']

    ]
];

$users = new WP_User_Query($args);
update_user_meta(get_current_user_id(), 'last_name', 'balooch dehnoei');

foreach ($users->get_results() as $user) {
    echo '<pre>';
    var_dump($user->id);
    echo '</pre>';
}


echo '<pre>';
var_dump($users->get_results());
echo '</pre>';


exit;
