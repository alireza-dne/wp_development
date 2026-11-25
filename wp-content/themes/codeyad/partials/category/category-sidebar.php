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

$homeBanners = new WP_Query($args);

?>

<div class="col-30">
    <div class="sidebar-wrap">
        <div class="sidebar-widget">
            <div class="sidebar-search">
                <form action="blog-3.html#">
                    <input type="text" placeholder="جستجو کردن . . .">
                    <button type="submit"><i class="flaticon-search"></i></button>
                </form>
            </div>
        </div>
        <div class="sidebar-widget sidebar-widget-two">
            <div class="widget-title mb-30">
                <h6 class="title">دسته های داغ</h6>
                <div class="section-title-line"></div>
            </div>
            <div class="sidebar-categories">
                <ul class="list-wrap">
                    <li>
                        <a href="blog.html" data-background="assets/img/images/t_cat_img01.jpg">
                            <span class="post-tag post-tag-three">فن آوری</span>
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
                    <li>
                        <a href="blog.html" data-background="assets/img/images/t_cat_img02.jpg">
                            <span class="post-tag post-tag-three">سیار</span>
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
                    <li>
                        <a href="blog.html" data-background="assets/img/images/t_cat_img03.jpg">
                            <span class="post-tag post-tag-three">اسباب</span>
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
                    <li>
                        <a href="blog.html" data-background="assets/img/images/t_cat_img04.jpg">
                            <span class="post-tag post-tag-three">اخبار</span>
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
                </ul>
            </div>
        </div>
        <div class="sidebar-widget sidebar-widget-two">
            <div class="widget-title mb-25">
                <h2 class="title">مشترک و پیروان</h2>
                <div class="section-title-line"></div>
            </div>
            <div class="sidebar-social-wrap">
                <ul class="list-wrap">
                    <li><a href="blog-3.html#"><i class="fab fa-facebook-f"></i>فیس بوک</a></li>
                    <li><a href="blog-3.html#"><i class="fab fa-twitter"></i>توییتر</a></li>
                    <li><a href="blog-3.html#"><i class="fab fa-instagram"></i>اینستاگرام</a></li>
                    <li><a href="blog-3.html#"><i class="fab fa-youtube"></i>یوتیوب</a></li>
                    <li><a href="blog-3.html#"><i class="fab fa-linkedin-in"></i>لینکدین</a></li>
                    <li><a href="blog-3.html#"><i class="fab fa-pinterest-p"></i>پانترست</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar-widget sidebar-widget-two">
            <div class="widget-title mb-30">
                <h6 class="title">اخبار اخیر</h6>
                <div class="section-title-line"></div>
            </div>
            <div class="hot-post-wrap">
                <div class="hot-post-item">
                    <div class="hot-post-thumb">
                        <a href="blog-details.html"><img src="assets/img/blog/blog_rc_post.jpg" alt=""></a>
                    </div>
                    <div class="hot-post-content">
                        <a href="blog.html" class="post-tag">ماجرا</a>
                        <h4 class="post-title"><a href="blog-details.html">عواقب اسختدام نکردن طراح
                                رابط کاربری چیه ؟</a></h4>
                        <div class="blog-post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>4 شهریور 1402</li>
                                <li><i class="flaticon-history"></i>20 دقیقه</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hot-post-item">
                    <div class="hot-post-content">
                        <a href="blog.html" class="post-tag">فرهنگ</a>
                        <h4 class="post-title"><a href="blog-details.html">ورود به دنیای موسیقی و
                                ریمیکس با ما</a></h4>
                        <div class="blog-post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>4 شهریور 1402</li>
                                <li><i class="flaticon-history"></i>20 دقیقه</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hot-post-item">
                    <div class="hot-post-content">
                        <a href="blog.html" class="post-tag">مسافرت رفتن</a>
                        <h4 class="post-title"><a href="blog-details.html">راهنمای گام به گام برای
                                ساخت چرخ فلک های قابل دسترسی</a></h4>
                        <div class="blog-post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>4 شهریور 1402</li>
                                <li><i class="flaticon-history"></i>20 دقیقه</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-widget sidebar-widget-two">
            <div class="sidebar-newsletter">
                <div class="icon"><i class="flaticon-envelope"></i></div>
                <h4 class="title">خبرنامه</h4>
                <p>برای پیگیری تمام داستانهای برتر از وبلاگ ها دریافت کنید.</p>
                <div class="sidebar-newsletter-form-two">
                    <form action="blog-3.html#">
                        <div class="form-grp">
                            <input type="text" placeholder="ایمیل خود را وارد کنید">
                            <button type="submit" class="btn">هم اکنون مشترک شوید</button>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox">
                            <label for="checkbox">من با شرایط و قوانین موافق هستم</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>