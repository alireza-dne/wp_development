<?php get_header(args: ['name' => 'alireza']) ?>


<!-- main-area -->
<main>

    <!-- banner-post-area -->
    <?php get_template_part('partials/index/index', 'banner-post-area') ?>
    <!-- banner-post-area-end -->

    <!-- ad-banner-area -->
    <?php get_template_part('partials/index/index', 'ad-banner-area') ?>
    <!-- ad-banner-area-end -->

    <!-- editor-post-area -->
    <?php get_template_part('partials/index/index', 'editor-post-area') ?>
    <!-- editor-post-area-end -->

    <!-- trending-post-area -->
    <?php get_template_part('partials/index/index', 'trending-post-area') ?>

    <!-- trending-post-area-end -->

    <!-- ad-banner-area -->
    <?php get_template_part('partials/index/index', 'ad-banner-area-2') ?>
    <!-- ad-banner-area-end -->

    <!-- overlay-post-area -->
    <?php get_template_part('partials/index/index', 'overlay-post-area') ?>
    <!-- overlay-post-area-end -->

    <!-- weekly-post-area -->
    <?php get_template_part('partials/index/index', 'weekly-post-area-two') ?>
    <!-- weekly-post-area-end -->

    <!-- newsletter-area -->
    <?php get_template_part('partials/index/index', 'newsletter-area') ?>
    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->


<?php get_footer() ?>