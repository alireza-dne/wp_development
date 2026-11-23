<?php

$args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 4,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'meta_key'       => 'cy_cmb2_post_selective',
    'meta_value'     => 'on',
];

$homeBanners = new WP_Query($args)->posts;

?>

<section class="banner-post-area-two pt-50 pb-30">
    <div class="container">
        <div class="banner-post-inner">
            <div class="row">

                <?php if (!empty($homeBanners)) : ?>

                    <?php foreach ($homeBanners as $key => $homeBanner) :

                        $post_id = $homeBanner->ID;

                        $author_id = $homeBanner->post_author;
                        $author = get_the_author_meta('display_name', $author_id);
                        $author_link = get_author_posts_url($author_id);

                        $categories = get_the_category($post_id);

                        $title = get_the_title($post_id);
                        $permalink = get_permalink($post_id);
                        $thumbnail = get_the_post_thumbnail_url($post_id, 'full');
                        $date = get_the_date('', $post_id);

                        $content = get_post_field('post_content', $post_id);
                        $reading_time = calcReadingTime($content);

                    ?>

                        <?php if ($key == 0) : ?>

                            <div class="col-70">
                                <div class="banner-post-two big-post">

                                    <div class="banner-post-thumb-two">
                                        <a href="<?= esc_url($permalink) ?>">
                                            <img src="<?= esc_url($thumbnail ?: '') ?>" alt="<?= esc_attr($title) ?>">
                                        </a>
                                    </div>

                                    <div class="banner-post-content-two">

                                        <?php foreach ($categories as $category) : ?>
                                            <a href="<?= esc_url(get_category_link($category->term_id)) ?>" class="post-tag">
                                                <?= esc_html($category->name) ?>
                                            </a>
                                        <?php endforeach; ?>

                                        <h2 class="post-title bold-underline">
                                            <a href="<?= esc_url($permalink) ?>">
                                                <?= esc_html($title) ?>
                                            </a>
                                        </h2>

                                        <div class="blog-post-meta white-blog-meta">
                                            <ul class="list-wrap">

                                                <li>
                                                    <i class="flaticon-user"></i>
                                                    توسط
                                                    <a href="<?= esc_url($author_link) ?>">
                                                        <?= esc_html($author) ?>
                                                    </a>
                                                </li>

                                                <li>
                                                    <i class="flaticon-calendar"></i>
                                                    <?= esc_html($date) ?>
                                                </li>

                                                <li>
                                                    <i class="flaticon-history"></i>
                                                    <?= esc_html($reading_time) ?> دقیقه
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-30">

                            <?php else : ?>

                                <div class="banner-post-two small-post">

                                    <div class="banner-post-thumb-two">
                                        <a href="<?= esc_url($permalink) ?>">
                                            <img src="<?= esc_url($thumbnail ?: '') ?>" alt="<?= esc_attr($title) ?>">
                                        </a>
                                    </div>

                                    <div class="banner-post-content-two">

                                        <?php foreach ($categories as $category) : ?>
                                            <a href="<?= esc_url(get_category_link($category->term_id)) ?>" class="post-tag">
                                                <?= esc_html($category->name) ?>
                                            </a>
                                        <?php endforeach; ?>

                                        <h2 class="post-title">
                                            <a href="<?= esc_url($permalink) ?>">
                                                <?= esc_html($title) ?>
                                            </a>
                                        </h2>

                                        <div class="blog-post-meta white-blog-meta">
                                            <ul class="list-wrap">
                                                <li>
                                                    <i class="flaticon-calendar"></i>
                                                    <?= esc_html($date) ?>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            <?php endif; ?>

                        <?php endforeach; ?>

                            </div>

                        <?php endif; ?>

            </div>
        </div>
    </div>
</section>