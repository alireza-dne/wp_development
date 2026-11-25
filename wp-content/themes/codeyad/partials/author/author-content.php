<?php




// echo '<pre>';
// var_dump($paged);
// echo '</pre>';



?>



<div class="col-70">
    <div class="author-wrap">
        <div class="author-thumb">
            <img src="<?= esc_url(get_avatar_url($author)) ?>"
                alt="<?= esc_html(get_the_author_meta('display_name', $author)) ?>">
        </div>
        <div class="author-content">
            <h4 class="name"><?= esc_html(get_the_author_meta('display_name', $author)) ?></h4>
            <p><?= esc_html(get_the_author_meta('description', $author)) ?></p>
            <div class="author-social">
                <ul class="list-wrap">
                    <li><a href="author.html#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="author.html#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="author.html#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="author.html#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="weekly-post-item-wrap">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post();

                $categories = get_the_category();
            ?>
                <div class="weekly-post-item weekly-post-four">
                    <div class="weekly-post-thumb">
                        <a href="<?= esc_url(get_permalink()) ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>"
                                    alt="<?= esc_attr(get_the_title()) ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="weekly-post-content">
                        <div class="d-flex gap-1">
                            <?php foreach ($categories as $category) : ?>
                                <a href="<?= esc_url(get_category_link($category->term_id)) ?>" class="post-tag">
                                    <?= esc_html($category->name) ?>
                                </a>
                            <?php endforeach; ?>
                        </div>

                        <h2 class="post-title bold-underline">
                            <a href="<?= esc_url(get_permalink()) ?>">
                                <?= esc_html(get_the_title()) ?>
                            </a>
                        </h2>

                        <div class="blog-post-meta white-blog-meta">
                            <ul class="list-wrap">

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
                        <p style="font-size: 1rem !important;">
                            <?= substr(get_the_excerpt(), 0, 200) . ' ...'; ?>
                        </p>
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

        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="pagination-wrap mt-60">
        <nav aria-label="Page navigation example">
            <ul class="pagination list-wrap">

                <?= paginate_links() ?>

            </ul>
        </nav>
    </div>
</div>