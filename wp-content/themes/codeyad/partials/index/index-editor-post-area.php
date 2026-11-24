<?php

$args = [
    'role__in'           => ['editor', 'administrator'],
    'has_published_posts' => true,
    'number'             => 15,
    'orderby'            => 'registered',
    'order'              => 'DESC',
];

$editors = new WP_User_Query($args);

// echo '<pre>';
// var_dump($editors->get_results());
// echo '</pre>';

?>





<section class="editor-post-area pt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap mb-30">
                    <div class="section-title">
                        <h2 class="title">انتخاب ویراستاران</h2>
                    </div>
                    <div class="editor-nav"></div>
                    <div class="section-title-line"></div>
                </div>
            </div>
        </div>
        <div class="editor-post-wrap swprtl">
            <div class="row editor-post-active">


                <?php foreach ($editors->get_results() as $editor): ?>


                    <div class="col-lg-4">
                        <div class="editor-post-item">
                            <div class="editor-post-thumb">
                                <a href="<?= get_author_posts_url($editor->ID) ?>"><img
                                        src="<?= get_avatar_url($editor->ID) ?>" alt=""></a>
                            </div>
                            <div class="editor-post-content">
                                <a href="<?= get_author_posts_url($editor->ID) ?>"
                                    class="post-tag-two"><?= get_the_author_meta('display_name', $editor->ID) ?></a>
                                <h2 class="post-title"><a
                                        href="blog-details.html"><?= get_the_author_meta('description', $editor->ID) ?></a>
                                </h2>
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <i class="flaticon-calendar"></i>
                                            <?= parsidate('Y/m/d', strtotime($editor->user_registered)) ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php endforeach ?>

            </div>
        </div>
    </div>
</section>