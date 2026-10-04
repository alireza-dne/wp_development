<?php

global $wpdb;

// $users=$wpdb->get_results($wpdb->prepare("select * from $wpdb->users"));

// echo '<pre>';
// var_dump($users);
// echo '</pre>';

$args = [
    'include' => [1, 2],
    'orderby' => 'ID',
    'order' => 'desc',
    'fields' => ['ID', 'user_login', 'user_email'],

    'meta_query' => [
        'AND',
        [
            'key' => 'nickname',
            'value' => 'alireza_dne',
            'compare' => '=',
        ],
    ]
];

$users = new WP_User_Query($args);



echo '<pre>';
var_dump(wp_get_current_user());
echo '</pre>';
