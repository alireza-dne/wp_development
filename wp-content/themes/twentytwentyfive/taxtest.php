<?php







add_action('init', function () {

    // $term = get_the_terms(33, 'genre');

    // $args = [
    //     'post_type' => 'book',
    //     'author_not_in' => [1, 2],
    //     'tax_query' => [
    //         [
    //             'taxonomy' => 'genre',
    //             'field'    => 'slug',
    //             'terms'    => 'lesson',
    //         ],
    //     ],
    // ];
    // $query = new WP_Query($args);

    $terms = get_terms(['taxonomy' => 'genre',]);

    echo '<pre>';
    foreach ($terms as $term) {
        var_dump($term);
    }
    echo '</pre>';

    // echo '<pre>';
    // var_dump($term);
    // echo '</pre>';
});
