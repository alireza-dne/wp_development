<?php
$args = [
    'taxonomy'      => 'category',
    'hide_empty'    => true,
    'number' => 4,
    'orderby'        => 'count',
    'order'          => 'DESC',
];
$hotCategories = get_terms($args);



$args2 = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'orderby'        => 'comment_count',
    'order'          => 'DESC',
];

$popularPosts =  new WP_Query($args2);

// echo '<pre>';
// var_dump($hotCategories);
// echo '</pre>';
?>


<div class="col-30">
    <div class="sidebar-wrap">

        <div class="sidebar-widget sidebar-widget-two">
            <div class="widget-title mb-30">
                <h6 class="title">مشترک و پیروان</h6>
                <div class="section-title-line"></div>
            </div>
            <div class="sidebar-social-wrap">
                <ul class="list-wrap">
                    <li><a href="index-3.html#"><i class="fab fa-facebook-f"></i>فیس بوک</a>
                    </li>
                    <li><a href="index-3.html#"><i class="fab fa-twitter"></i>توییتر</a></li>
                    <li><a href="index-3.html#"><i class="fab fa-instagram"></i>اینستاگرام</a>
                    </li>
                    <li><a href="index-3.html#"><i class="fab fa-youtube"></i>یوتیوب</a></li>
                    <li><a href="index-3.html#"><i class="fab fa-linkedin-in"></i>لینکدین</a>
                    </li>
                    <li><a href="index-3.html#"><i class="fab fa-pinterest-p"></i>پانترست</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sidebar-widget sidebar-widget-two">
            <div class="sidebar-newsletter">
                <div class="icon"><i class="flaticon-envelope"></i></div>
                <h4 class="title">خبرنامه</h4>
                <p>برای پیگیری تمام داستانهای برتر از وبلاگ ها دریافت کنید.</p>
                <div class="sidebar-newsletter-form">
                    <form action="index-3.html#">
                        <input type="text" placeholder="ایمیل خود را وارد کنید">
                        <button type="submit">
                            <svg class="btn-submit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                    fill="currentcolor" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="sidebar-widget sidebar-widget-two">
            <div class="widget-title mb-30">
                <h6 class="title">دسته های داغ</h6>
                <div class="section-title-line"></div>
            </div>
            <div class="sidebar-categories">
                <ul class="list-wrap">

                    <?php foreach ($hotCategories as $category) {

                        $link = get_category_link($category->term_id);
                        $image = get_term_meta($category->term_id, 'cy_category_image', true);
                        $name = $category->name;

                    ?>
                        <li>
                            <a href="<?= esc_url($link) ?>" data-background="<?= esc_url($image) ?>">
                                <span class="post-tag post-tag-three"><?= esc_html($name) ?></span>
                                <span class="right-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                        <path
                                            d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                            fill="currentcolor"></path>
                                        <path
                                            d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                            fill="currentcolor"></path>
                                    </svg>
                                </span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>





        <div class="sidebar-widget sidebar-widget-two">
            <div class="widget-title mb-30">
                <h6 class="title">پست های محبوب</h6>
                <div class="section-title-line"></div>
            </div>



            <?php if ($popularPosts->have_posts()) : ?>

                <?php $key = 0; ?>

                <?php while ($popularPosts->have_posts()) :
                    $popularPosts->the_post();

                    $categories = get_the_category();
                ?>

                    <div class="popular-post">
                        <div class="thumb">
                            <a href="<?= esc_url(get_permalink()) ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>"
                                        alt="<?= esc_attr(get_the_title()) ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="content">
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
                                        <i class="flaticon-calendar"></i>
                                        <?= esc_html(get_the_date()) ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                <?php endwhile; ?>

            <?php endif; ?>


        </div>
    </div>
</div>