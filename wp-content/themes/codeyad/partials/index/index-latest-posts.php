<?php

$args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 4,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

$latestPosts = new WP_Query($args);


// echo '<pre>';
// var_dump($post);
// echo '</pre>';
?>


<div class="recent-post-wrap">
    <div class="section-title-wrap mb-30">
        <div class="section-title">
            <h2 class="title">پستهای اخیر</h2>
        </div>
        <div class="view-all-btn">
            <a href="<?= home_url('blogs') ?>" class="link-btn">مشاهده همه
                <span class="svg-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                        <path
                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                            fill="currentColor" />
                        <path
                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                            fill="currentColor" />
                    </svg>
                </span>
            </a>
        </div>
        <div class="section-title-line"></div>
    </div>
    <div class="row">

        <?php if ($latestPosts->have_posts()) : ?>

            <?php $key = 0; ?>

            <?php while ($latestPosts->have_posts()) :
                $latestPosts->the_post();

                $categories = get_the_category();
            ?>

                <?php if ($key == 0) : ?>


                    <div class="col-54">
                        <div class="overlay-post-two">
                            <div class="overlay-post-thumb">
                                <a href="<?= esc_url(get_permalink()) ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>"
                                            alt="<?= esc_attr(get_the_title()) ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="overlay-post-content">
                                <?php foreach ($categories as $category) : ?>
                                    <a href="<?= esc_url(get_category_link($category->term_id)) ?>" class="post-tag">
                                        <?= esc_html($category->name) ?>
                                    </a>
                                <?php endforeach; ?>

                                <h2 class="post-title bold-underline">
                                    <a href="<?= esc_url(get_permalink()) ?>">
                                        <?= esc_html(get_the_title()) ?>
                                    </a>
                                </h2>


                                <div class="blog-post-meta white-blog-meta">
                                    <ul class="list-wrap">

                                        <li>
                                            <i class="flaticon-user"></i>
                                            توسط
                                            <a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>">
                                                <?= esc_html(get_the_author()) ?>
                                            </a>
                                        </li>

                                        <li>
                                            <i class="flaticon-calendar"></i>
                                            <?= esc_html(get_the_date()) ?>
                                        </li>

                                        <li>
                                            <i class="flaticon-history"></i>
                                            <?= esc_html(calcReadingTime(get_the_content())) ?> دقیقه
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-46">

                    <?php else : ?>

                        <div class="horizontal-post-two">
                            <div class="horizontal-post-thumb">
                                <a href="<?= esc_url(get_permalink()) ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>"
                                            alt="<?= esc_attr(get_the_title()) ?>">
                                    <?php endif; ?>
                                </a>


                            </div>
                            <div class="horizontal-post-content">
                                <?php foreach ($categories as $category) : ?>
                                    <a href="<?= esc_url(get_category_link($category->term_id)) ?>" class="post-tag">
                                        <?= esc_html($category->name) ?>
                                    </a>
                                <?php endforeach; ?>

                                <h2 class="post-title bold-underline">
                                    <a href="<?= esc_url(get_permalink()) ?>">
                                        <?= esc_html(get_the_title()) ?>
                                    </a>
                                </h2>



                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <i class="flaticon-calendar"></i>
                                            <?= esc_html(get_the_date()) ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>
                <?php
                $key++;
            endwhile;
                ?>


            <?php endif; ?>

            <?php wp_reset_postdata(); ?>


                    </div>


    </div>
</div>