<div class="col-70">
    <div class="weekly-post-item-wrap-three">
        <div class="row">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post();

                    $categories = get_the_category();
                ?>

                    <div class="col-md-6">
                        <div class="weekly-post-three">
                            <div class="weekly-post-thumb">
                                <a href="<?= esc_url(get_permalink()) ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>"
                                            alt="<?= esc_attr(get_the_title()) ?>">
                                    <?php endif; ?>
                                </a>

                                <div class="d-flex gap-1">
                                    <?php foreach ($categories as $category) : ?>
                                        <a href="<?= esc_url(get_category_link($category->term_id)) ?>" class="post-tag">
                                            <?= esc_html($category->name) ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="weekly-post-content">
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

                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>

        </div>
    </div>
    <div class="pagination-wrap mt-30">
        <nav aria-label="Page navigation example">
            <ul class="pagination list-wrap">

                <?= paginate_links() ?>
                <!-- <li class="page-item active"><a class="page-link" href="blog-3.html#">1</a></li>
                <li class="page-item"><a class="page-link" href="blog-3.html#">2</a></li>
                <li class="page-item"><a class="page-link" href="blog-3.html#">3</a></li>
                <li class="page-item"><a class="page-link" href="blog-3.html#">4</a></li>
                <li class="page-item"><a class="page-link" href="blog-3.html#">5</a></li> -->
            </ul>
        </nav>
    </div>
</div>