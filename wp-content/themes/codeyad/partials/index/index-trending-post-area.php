<section class="trending-post-area pt-60 pb-60">
    <div class="container">
        <div class="trending-post-inner">
            <div class="row justify-content-center">
                <div class="col-70">


                    <?php get_template_part('partials/index/index', 'latest-posts') ?>




                    <div class="ad-banner-img ad-banner-img-two text-center">
                        <a href="index-3.html#">
                            <img src="<?= ASSET . 'zaira/assets/img/images/advertisement06.jpg' ?>" alt="">
                        </a>
                    </div>


                    <?php get_template_part('partials/index/index', 'selected-category-posts') ?>

                </div>

                <?php get_template_part('partials/index/index', 'first-sidebar') ?>



            </div>
        </div>
    </div>
</section>