<?php


add_action('init', function () {

    $term = get_the_terms(33, 'genre');
    $terms = get_terms(['taxonomy' => 'genre',]);
    $term = get_term(6);
    $taxs = get_taxonomies(['object_type' => ['book']]);
    $tax = get_taxonomy('genre');


    // $args = [
    //     'post_type' => 'book',
    //     'author_not_in' => [1, 2],
    //     'tax_query' => [
    //         'relation' => 'or',
    //         [
    //             'taxonomy' => 'genre',
    //             'field'    => 'slug',
    //             'terms'    => 'lesson',
    //         ],
    //     ],
    // ];
    // $query = new WP_Query($args);


    // echo '<pre>';
    // foreach ($terms as $term) {
    //     var_dump($term);
    // }
    // echo '</pre>';

    echo '<pre>';
    var_dump($taxs);
    echo '</pre>';
});
