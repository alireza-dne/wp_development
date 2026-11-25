<?php
$today = date('w', time());
$diffToStartDay = $today == 6 ? 0 : $today + 1;
$startWeek = strtotime("-$diffToStartDay days", time());
$endWeek = strtotime("+6 days", time());


$args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 4,
    'orderby'        => 'comment_count',
    'order'          => 'DESC',
    'date_query' => ['after' => date('Y-m-d', $startWeek), 'before' => date('Y-m-d', $endWeek), 'inclusive' => true]
];

$lastWeekPosts = new WP_Query($args);


// echo '<pre>';
// var_dump($lastWeekPosts);
// echo '</pre>';

?>


<section class="weekly-post-area-two pt-60 pb-30">
    <div class="container">
        <div class="weekly-post-inner-wrap">
            <div class="row justify-content-center">


                <div class="col-70">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <h2 class="title">هفتگی بهترین اخبار</h2>
                        </div>
                        <div class="view-all-btn">
                            <a href="blog.html" class="link-btn">مشاهده همه
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
                    <div class="weekly-post-item-wrap-two">


                        <?php if ($lastWeekPosts->have_posts()) : ?>

                            <?php while ($lastWeekPosts->have_posts()) :
                                $lastWeekPosts->the_post();

                                $categories = get_the_category();
                            ?>

                                <div class="weekly-post-item weekly-post-two">
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
                                            <a href="blog-details.html" class="link-btn">بیشتر بخوانید
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



                            <?php endwhile; ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>


                    </div>
                </div>

                <div class="col-30">
                    <div class="sidebar-wrap no-sticky">
                        <div class="sidebar-widget sidebar-widget-two">
                            <div class="sidebar-img">
                                <a href="index-3.html#"><img
                                        src="<?= ASSET . 'zaira/assets/img/images/sidebar_img02.jpg' ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-widget-two">
                            <div class="widget-title mb-30">
                                <h6 class="title">فناوری محبوب</h6>
                                <div class="section-title-line"></div>
                            </div>
                            <div class="sidebar-overlay-post">
                                <div class="so-post-thumb">
                                    <a href="blog-details.html"><img
                                            src="<?= ASSET . 'zaira/assets/img/blog/so_post01.jpg' ?>" alt=""></a>
                                </div>
                                <div class="so-post-content">
                                    <a href="blog.html" class="post-tag">فن آوری</a>
                                    <h4 class="post-title"><a href="blog-details.html">بازی های مسابقه Browned
                                            Ae
                                            صبحانه کوکی ها</a></h4>
                                    <div class="blog-post-meta white-blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-calendar"></i>2 شهریور 1402</li>
                                            <li><i class="flaticon-history"></i>20 دقیقه</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-post">
                                <div class="thumb">
                                    <a href="blog-details.html"><img
                                            src="<?= ASSET . 'zaira/assets/img/blog/t_popular_post04.jpg' ?>"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <a href="blog.html" class="post-tag-two">موبایل</a>
                                    <h2 class="post-title"><a href="blog-details.html">برای جلسات روزمره مؤثر
                                            است</a></h2>
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-calendar"></i>2 شهریور 1402</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-post">
                                <div class="thumb">
                                    <a href="blog-details.html"><img
                                            src="<?= ASSET . 'zaira/assets/img/blog/t_popular_post05.jpg' ?>"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <a href="blog.html" class="post-tag-two">اخبار</a>
                                    <h2 class="post-title"><a href="blog-details.html">بهترین ابزار های برنامه
                                            نویسی</a></h2>
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-calendar"></i>2 شهریور 1402</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-post">
                                <div class="thumb">
                                    <a href="blog-details.html"><img
                                            src="<?= ASSET . 'zaira/assets/img/blog/t_popular_post06.jpg' ?>"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <a href="blog.html" class="post-tag-two">اسباب</a>
                                    <h2 class="post-title"><a href="blog-details.html">آناتومی طراحی مضمون</a>
                                    </h2>
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-calendar"></i>2 شهریور 1402</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>