<!doctype html>
<html class="no-js" lang="fa">

<head>

    <?php wp_head() ?>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= get_bloginfo('name') ?></title>
    <meta name="description" content=<?= get_bloginfo('description') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= ASSET . 'zaira/assets/img/favicon.png' ?>">
    <!-- Place favicon.ico in the root directory -->


    <!-- CSS here -->


</head>

<body>

    <!-- preloader -->
    <!-- <div id="preloader">
        <div class="loader-inner">
            <div id="loader">
                <h2 id="bg-loader">زایرا<span>.</span></h2>
                <h2 id="fg-loader">زایرا<span>.</span></h2>
            </div>
        </div>
    </div> -->
    <!-- preloader-end -->

    <!-- Dark/Light-toggle -->
    <div class="darkmode-trigger">
        <label class="modeSwitch">
            <input type="checkbox">
            <span class="icon"></span>
        </label>
    </div>
    <!-- Dark/Light-toggle-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="header-style-three">
        <div id="header-fixed-height"></div>
        <div class="header-top-wrap-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="header-top-left">
                            <div class="offcanvas-toggle">
                                <a href="javascript:void(0)" class="menu-tigger-two">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                            <div class="header-top-social">
                                <ul class="list-wrap">
                                    <li><a href="index-3.html#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-3.html#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-3.html#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-3.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="header-top-right">
                            <div class="header-search-wrap header-search-wrap-two">
                                <form action="index-3.html#">
                                    <input type="text" placeholder="اینجا جستجو کنید . . .">
                                    <button type="submit"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="menu-area menu-style-three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a href="index.html"><img src="<?= ASSET . 'zaira/assets/img/logo/logo.png' ?>"
                                            alt=""></a>
                                </div>
                                <div class="logo d-none">
                                    <a href="index.html"><img src="<?= ASSET . 'zaira/assets/img/logo/w_logo.png' ?>"
                                            alt=""></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="index-3.html#">خانه</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">خانه 01 - پیش فرض</a></li>
                                                <li><a href="index-2.html">خانه 02 - بازی</a></li>
                                                <li class="active"><a href="index-3.html">خانه 03 - فن آوری</a></li>
                                                <li><a href="index-4.html">خانه 04 - مسافرت رفتن</a></li>
                                                <li><a href="index-5.html">خانه 05 - کریپتو</a></li>
                                                <li><a href="index-6.html">خانه 06 - روزنامه</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">درباره ما</a></li>
                                        <li class="menu-item-has-children"><a href="index-3.html#">امکانات</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children"><a href="index-3.html#">مطلب چیدمان
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-details.html">مطلب 01</a></li>
                                                        <li><a href="blog-details-two.html">مطلب 02</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="author.html">جزئیات نویسنده</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="index-3.html#">دسته بندی ها</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">وبلاگ پیش فرض</a></li>
                                                <li><a href="blog-2.html">وبلاگ چیدمان 02</a></li>
                                                <li><a href="blog-3.html">وبلاگ چیدمان 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">تماس با ما</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul class="list-wrap">
                                        <li class="header-wishlist">
                                            <a href="index-3.html#"><i class="flaticon-heart"></i><span>0</span></a>
                                        </li>
                                        <li class="header-cart">
                                            <a href="index-3.html#"><i class="flaticon-basket"></i><span>0</span></a>
                                            <strong>تومان 0.00</strong>
                                        </li>
                                        <li class="header-sine-in">
                                            <a href="contact.html"><i class="flaticon-user"></i>ورود</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            </nav>
                        </div>

                        <!-- mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="index.html"><img src="<?= ASSET . 'zaira/assets/img/logo/logo.png' ?>"
                                            alt="لوگو"></a>
                                </div>
                                <div class="nav-logo d-none">
                                    <a href="index.html"><img src="<?= ASSET . 'zaira/assets/img/logo/w_logo.png' ?>"
                                            alt="لوگو"></a>
                                </div>
                                <div class="mobile-search">
                                    <form action="index-3.html#">
                                        <input type="text" placeholder="اینجا جستجو کنید...">
                                        <button><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix list-wrap">
                                        <li><a href="index-3.html#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index-3.html#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index-3.html#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="index-3.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="index-3.html#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End mobile Menu -->

                    </div>
                </div>
            </div>
        </div>

        <!-- offCanvas-area -->
        <div class="offCanvas-wrap">
            <div class="offCanvas-body">
                <div class="offCanvas-toggle">
                    <span></span>
                    <span></span>
                </div>
                <div class="offCanvas-content">
                    <div class="offCanvas-logo logo">
                        <a href="index.html" class="logo-dark"><img
                                src="<?= ASSET . 'zaira/assets/img/logo/logo.png' ?>" alt="لوگو"></a>
                        <a href="index.html" class="logo-light"><img
                                src="<?= ASSET . 'zaira/assets/img/logo/w_logo.png' ?>" alt="لوگو"></a>
                    </div>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط </p>
                    <ul class="offCanvas-instagram list-wrap">
                        <li><a href="<?= ASSET . 'zaira/assets/img/blog/hr_post01.jpg' ?>" class="popup-image"><img
                                    src="<?= ASSET . 'zaira/assets/img/blog/hr_post01.jpg' ?>" alt="تصویر"></a></li>
                        <li><a href="<?= ASSET . 'zaira/assets/img/blog/hr_post02.jpg' ?>" class="popup-image"><img
                                    src="<?= ASSET . 'zaira/assets/img/blog/hr_post02.jpg' ?>" alt="تصویر"></a></li>
                        <li><a href="<?= ASSET . 'zaira/assets/img/blog/hr_post03.jpg' ?>" class="popup-image"><img
                                    src="<?= ASSET . 'zaira/assets/img/blog/hr_post03.jpg' ?>" alt="تصویر"></a></li>
                        <li><a href="<?= ASSET . 'zaira/assets/img/blog/hr_post04.jpg' ?>" class="popup-image"><img
                                    src="<?= ASSET . 'zaira/assets/img/blog/hr_post04.jpg' ?>" alt="تصویر"></a></li>
                        <li><a href="<?= ASSET . 'zaira/assets/img/blog/hr_post05.jpg' ?>" class="popup-image"><img
                                    src="<?= ASSET . 'zaira/assets/img/blog/hr_post05.jpg' ?>" alt="تصویر"></a></li>
                        <li><a href="<?= ASSET . 'zaira/assets/img/blog/hr_post06.jpg' ?>" class="popup-image"><img
                                    src="<?= ASSET . 'zaira/assets/img/blog/hr_post06.jpg' ?>" alt="تصویر"></a></li>
                    </ul>
                </div>
                <div class="offCanvas-contact">
                    <h4 class="title">در تماس باشید</h4>
                    <ul class="offCanvas-contact-list list-wrap">
                        <li><i class="fas fa-envelope-open"></i><a href="mailto:info@webmail.com">info@webmail.com</a>
                        </li>
                        <li><i class="fas fa-phone"></i><a href="tel:88899988877">888 999 888 77</a></li>
                        <li><i class="fas fa-map-marker-alt"></i> 12/A, اخبار, ان وای سی</li>
                    </ul>
                    <ul class="offCanvas-social list-wrap">
                        <li><a href="index-3.html#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index-3.html#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index-3.html#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="index-3.html#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offCanvas-overlay"></div>
        <!-- offCanvas-area-end -->
    </header>
    <!-- header-area-end -->