<?php
/*
Template Name: اخبار
*/ ?>






<?php get_header() ?>
<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= home_url() ?>">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?= get_the_author_meta('display_name', $author) ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="blog-area pt-60 pb-60">
        <div class="container">
            <div class="author-inner-wrap">
                <div class="row justify-content-center">

                    <?php get_template_part('partials/author/author', 'content') ?>


                    <?php get_template_part('partials/category/category', 'sidebar') ?>

                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

    <!-- newsletter-area -->
    <section class="newsletter-area-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-wrap-three">
                        <div class="newsletter-content">
                            <h2 class="title">آخرین اخبار و به روز رسانی ما را دریافت کنید</h2>
                        </div>
                        <div class="newsletter-form">
                            <form action="blog-3.html#">
                                <div class="form-grp">
                                    <input type="text" placeholder="نام">
                                </div>
                                <div class="form-grp">
                                    <input type="email" placeholder="پست الکترونیک">
                                </div>
                                <button type="submit" class="btn">اکنون ارسال کنید</button>
                            </form>
                        </div>
                        <div class="newsletter-social">
                            <h4 class="title">ما را دنبال کنید:</h4>
                            <ul class="list-wrap">
                                <li><a href="blog-3.html#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="blog-3.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="blog-3.html#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="blog-3.html#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->
<?php get_footer() ?>