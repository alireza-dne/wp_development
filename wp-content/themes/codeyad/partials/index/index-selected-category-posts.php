<?php

$categoryId = get_option('cy_home_settings')['cy_home_category'] ?? 0;
// $categoryId = 12;
$category = get_category($categoryId);

$args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 4,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'category__in' => [$categoryId,]
];

$selectedCategoryPosts = new WP_Query($args);


echo '<pre>';
var_dump($categoryId);
echo '</pre>';
?>

<?php if ($categoryId && $selectedCategoryPosts->have_posts()) { ?>
    <div class="trending-post-wrap">
        <div class="section-title-wrap mb-30">
            <div class="section-title">
                <h2 class="title">اخبار <?= $category->name ?></h2>
            </div>
            <div class="view-all-btn">
                <a href="<?= get_category_link($category) ?>" class="link-btn">مشاهده همه
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
        <div class="row justify-content-center">

            <?php if ($selectedCategoryPosts->have_posts()) : ?>

                <?php $key = 0; ?>

                <?php while ($selectedCategoryPosts->have_posts()) :
                    $selectedCategoryPosts->the_post();

                    $categories = get_the_category();
                ?>

                    <?php if ($key == 0) : ?>


                        <div class="col-lg-12">
                            <div class="trending-post">
                                <div class="trending-post-thumb">
                                    <a href="<?= esc_url(get_permalink()) ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>"
                                                alt="<?= esc_attr(get_the_title()) ?>">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="trending-post-content">


                                    <h2 class="post-title bold-underline">
                                        <a href="<?= esc_url(get_permalink()) ?>">
                                            <?= esc_html(get_the_title()) ?>
                                        </a>
                                    </h2>

                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li>
                                                <i class="flaticon-user"></i>
                                                توسط
                                                <a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>">
                                                    <?= esc_html(get_the_author()) ?>
                                                </a>
                                            </li>


                                            <li>
                                                <i class="flaticon-history"></i>
                                                <?= esc_html(calcReadingTime(get_the_content())) ?> دقیقه
                                            </li>
                                        </ul>
                                    </div>
                                    <p><?= substr(get_the_content(), 0, 100) . ' ...'; ?></p>
                                    <div class="view-all-btn">
                                        <a href="<?= esc_url(get_permalink()) ?>" class="link-btn">بیشتر بخوانید
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
                                </div>
                            </div>
                        </div>

                    <?php else : ?>


                        <div class="col-lg-4 col-md-6">
                            <div class="trending-post-two">
                                <div class="trending-post-thumb-two">
                                    <a href="<?= esc_url(get_permalink()) ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>"
                                                alt="<?= esc_attr(get_the_title()) ?>">
                                        <?php endif; ?>
                                    </a>


                                </div>
                                <div class="trending-post-content-two">
                                    <h2 class="post-title bold-underline">
                                        <a href="<?= esc_url(get_permalink()) ?>">
                                            <?= esc_html(get_the_title()) ?>
                                        </a>
                                    </h2>
                                    <div class="blog-post-meta">
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


                                        </ul>
                                    </div>
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
<?php } ?>