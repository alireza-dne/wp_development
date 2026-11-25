<?php


$categories = get_the_category();


// echo '<pre>';
// var_dump($paged);
// echo '</pre>';



?>



<div class="col-70">
    <div class="blog-details-wrap">
        <div class="blog-details-content">
            <div class="blog-details-content-top">
                <div class="d-flex gap-1">
                    <?php foreach ($categories as $category) : ?>
                        <a href="<?= esc_url(get_category_link($category->term_id)) ?>" class="post-tag">
                            <?= esc_html($category->name) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <h2 class="post-title bold-underline"><?= esc_html(get_the_title()) ?></h2>
                <div class="bd-content-inner">
                    <div class="blog-post-meta">
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


                            <li><i class="flaticon-chat"></i><a href="blog-details.html"><?= get_comment_count() ?>
                                    نظر</a></li>
                        </ul>
                    </div>
                    <div class="blog-details-social">
                        <ul class="list-wrap">
                            <li><a href="blog-details.html#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="blog-details.html#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="blog-details.html#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="blog-details.html#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-details-thumb">
                <img src="assets/img/blog/blog_details01.jpg" alt="">
            </div>
            <p class="first-info">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                گرافیک است، چاپگرها و </p>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که </p>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده
            </p>
            <blockquote>
                <p>مال مال مال سودا با او روبرو می شود که او را به عنوان دولای سرنوشت الایتی برای هدایت و در آنجا به
                    نخبگان پیشرفته نخبه می کند.</p>
                <cite>توماس ادیسون</cite>
            </blockquote>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده
            </p>
            <div class="blog-details-inner">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="blog-details-inner-img">
                            <img src="assets/img/blog/blog_details02.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-details-inner-content">
                            <h3 class="title-two">بازاریابی درگیری مشتری استراتژی جدید برای اقتصاد</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی
                                در شصت و سه درصد گذشته حال و آینده.</p>
                            <ul class="list-wrap">
                                <li><i class="fas fa-check"></i>ادغام گوتنبرگ</li>
                                <li><i class="fas fa-check"></i>ادغام گوتنبرگ</li>
                                <li><i class="fas fa-check"></i>ادغام گوتنبرگ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده
            </p>
            <div class="blog-details-video">
                <img src="assets/img/blog/blog_details03.jpg" alt="">
                <a href="https://www.youtube.com/watch?v=G_AEL-Xo5l8" class="paly-btn popup-video"><i
                        class="fas fa-play"></i></a>
            </div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده
            </p>
            <div class="blog-details-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="post-tags">
                            <h5 class="title">برچسب ها:</h5>
                            <ul class="list-wrap">
                                <li><a href="blog.html">طراحی هنری</a></li>
                                <li><a href="blog.html">ویدئو</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="post-share">
                            <h5 class="title">اشتراک گذاری:</h5>
                            <ul class="list-wrap">
                                <li><a href="blog-details.html#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="blog-details.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="blog-details.html#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="blog-details.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="blog-details.html#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-avatar-wrap mb-50">
            <div class="blog-avatar-img">
                <a href="blog-details.html#"><img src="assets/img/images/avatar.png" alt="img"></a>
            </div>
            <div class="blog-avatar-info">
                <span class="designation">نویسنده</span>
                <h4 class="name"><a href="author.html">کامرون ویلیامسون</a></h4>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که </p>
            </div>
        </div>
        <div class="pev-next-post-wrap">
            <div class="row">
                <div class="col-md-6">
                    <div class="post-item">
                        <div class="thumb">
                            <a href="blog-details.html"><img src="assets/img/blog/bd_post01.jpg" alt=""></a>
                        </div>
                        <div class="content">
                            <span>پست قبلی</span>
                            <h5 class="post-title"><a href="blog-details.html">بهترین نسخه های پس زمینه</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="post-item next-post">
                        <div class="thumb">
                            <a href="blog-details.html"><img src="assets/img/blog/bd_post02.jpg" alt=""></a>
                        </div>
                        <div class="content">
                            <span>پست بعدی</span>
                            <h5 class="post-title"><a href="blog-details.html">سریع ترین روش تایپ کردن در ریکت </a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comments-wrap">
            <h3 class="comments-wrap-title">02 نظر</h3>
            <div class="latest-comments">
                <ul class="list-wrap">
                    <li>
                        <div class="comments-box">
                            <div class="comments-avatar">
                                <img src="assets/img/images/comment01.png" alt="img">
                            </div>
                            <div class="comments-text">
                                <div class="avatar-name">
                                    <h6 class="name">عباس ایرانی</h6>
                                    <span class="date">4 شهریور 1402</span>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که </p>
                                <a href="blog-details.html#" class="reply-btn">پاسخ</a>
                            </div>
                        </div>
                        <ul class="children">
                            <li>
                                <div class="comments-box">
                                    <div class="comments-avatar">
                                        <img src="assets/img/images/comment02.png" alt="img">
                                    </div>
                                    <div class="comments-text">
                                        <div class="avatar-name">
                                            <h6 class="name">جمید ایرانی</h6>
                                            <span class="date">4 شهریور 1402</span>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                            طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                        </p>
                                        <a href="blog-details.html#" class="reply-btn">پاسخ</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="comment-respond">
            <h3 class="comment-reply-title">ارسال نظر</h3>
            <form action="blog-details.html#" class="comment-form">
                <p class="comment-notes">آدرس ایمیل شما منتشر نخواهد شد.زمینه های مورد نیاز مشخص شده اند>
                <div class="form-grp">
                    <textarea name="comment" placeholder="اظهار نظر"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-grp">
                            <input type="text" placeholder="نام">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-grp">
                            <input type="email" placeholder="پست الکترونیک">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-grp">
                            <input type="url" placeholder="سایت اینترنتی">
                        </div>
                    </div>
                </div>
                <div class="form-grp checkbox-grp">
                    <input type="checkbox" id="checkbox_two">
                    <label for="checkbox_two">برای دفعه بعد که من نظر می دهم نام ، ایمیل و وب سایت من را ذخیره
                        کنید.</label>
                </div>
                <button type="submit" class="btn btn-two">ارسال نظر</button>
            </form>
        </div>
    </div>
</div>