<?php
$args2 = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 5,
    'orderby'        => 'rand',
];

$popularPosts =  new WP_Query($args2);

?>



<section class="overlay-post-area fix swprtl">
    <div class="container-fluid p-0">
        <div class="overlay-post-item-wrap">
            <div class="row overlay-post-active">


                <?php if ($popularPosts->have_posts()) : ?>

                    <?php while ($popularPosts->have_posts()) :
                        $popularPosts->the_post();

                        $categories = get_the_category();
                    ?>


                        <div class="col-lg-3">
                            <div class="overlay-post-three">
                                <div class="overlay-post-thumb-three">
                                    <a href="<?= esc_url(get_permalink()) ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>"
                                                alt="<?= esc_attr(get_the_title()) ?>">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="overlay-post-content-three">
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

                    <?php endwhile; ?>
                <?php endif; ?>


            </div>
        </div>
    </div>
</section>