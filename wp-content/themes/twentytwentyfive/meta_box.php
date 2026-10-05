<?php

add_action('add_meta_boxes', 'book_sample_meta_box');
add_action('save_post', 'store_book_sample_meta_value');

function book_sample_meta_box()
{
    add_meta_box('cy_book_sample_meta_box', 'متاباکس نمونه کتاب', 'book_sample_meta_box_html_view', 'book');
}

function book_sample_meta_box_html_view()
{
    $value = get_post_meta(get_the_ID(), 'book_sample_meta_date', true);
?>
    <input type="text" name="book_sample" value="<?= $value ?>">
<?php
}

function store_book_sample_meta_value($post_id)
{
    update_post_meta($post_id, 'book_sample_meta_date', $_POST['book_sample']);
}
