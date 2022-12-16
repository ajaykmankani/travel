<!doctype html>
<html lang="en">
<?php include('include/variables.php'); ?>
<!-- Mirrored from demo.stairthemes.com/html/traveler/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Dec 2022 20:25:55 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- fancybox box css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fancybox/dist/jquery.fancybox.min.css">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Traveler – Travel & Trip Business HTML5 Template</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader">
        <div class="preloader-content">
            <img src="assets/images/loader.webp" alt="">
        </div>
    </div>
    <div id="page" class="page">
        <!-- site header html start  -->
        <header id="masthead" class="site-header">
            <!-- header html start -->
            <div class="top-header">
                <div class="container">
                    <div class="top-header-inner">
                        <div class="header-contact text-left">
                            <a href="tel:<?= $phone; ?>">
                                <i aria-hidden="true" class="icon icon-phone-call2"></i>
                                <div class="header-contact-details d-none d-sm-block">
                                    <span class="contact-label">For Further Inquires :</span>
                                    <h5 class="header-contact-no">+91 <?= $phone; ?></h5>
                                </div>
                            </a>
                        </div>
                        <div class="site-logo text-center">
                            <h1 class="site-title">
                                <a href="index.php">
                                    <img src="assets/images/site-logo.webp" alt="Logo">
                                </a>
                            </h1>
                        </div>
                        <div class="header-icon text-right">
                            <div class="header-search-icon d-inline-block">
                                <!-- <a href="#">
                                    <i aria-hidden="true" class="fas fa-search"></i>
                                </a> -->
                            </div>
                            <div class="offcanvas-menu d-inline-block">
                                <a href="#">
                                    <i aria-hidden="true" class="icon icon-burger-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <div class="bottom-header-inner d-flex justify-content-between align-items-center">
                        <div class="header-social social-icon">
                            <ul>
                                <li>
                                    <a href="<?= $facebook ?>" target="_blank">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $twitter ?>" target="_blank">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $instagram ?>" target="_blank">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <div class="d-none d-xs-block">
                                    <a href="tel:<?= $phone; ?>">
                                        <h5 class="header-contact-no">+91 <?= $phone; ?></h5>
                                    </a>
                                    </divi>


                            </ul>
                        </div>
                        <div class="navigation-container d-none d-lg-block">
                            <nav id="navigation" class="navigation">
                                <ul>
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.php">about us</a>
                                    </li>
                                    <!-- <li>
                                        <a href="destination.php">destination</a>
                                    </li> -->
                                    <!-- <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">packages</a>
                                        <ul>
                                            <?php
                                            include('include/package_array.php');
                                            $x = 0;
                                            foreach ($data as $value) {
                                                $x++;
                                            ?>
                                                <li>
                                                    <a href="package-detail.php?p=<?= $x - 1 ?>"><?= $value['place'] ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li> -->
                                    <!-- <li class="menu-item-has-children">
                                        <a href="index.php">Pages</a>
                                        <ul>
                                            <li>
                                                <a href="home-banner.php">Home Banner</a>
                                            </li>
                                            <li>
                                                <a href="service.php">Service</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Career</a>
                                                <ul>
                                                    <li>
                                                        <a href="career.php">Career</a>
                                                    </li>
                                                    <li>
                                                        <a href="career-detail.php">Career detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="team.php">Tour guide</a>
                                            </li>
                                            <li>
                                                <a href="gallery.php">Gallery page</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Blog</a>
                                                <ul>
                                                    <li>
                                                        <a href="blog-archive.php">Blog archive</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-single.php">blog single</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="single-page.php">Single Page</a>
                                            </li>
                                            <li>
                                                <a href="testimonial.php">Testimonial</a>
                                            </li>
                                            <li>
                                                <a href="faq.php">Faq Page</a>
                                            </li>
                                            <li>
                                                <a href="search-page.php">Search Page</a>
                                            </li>
                                            <li>
                                                <a href="404.php">404 Page</a>
                                            </li>
                                            <li>
                                                <a href="comming-soon.php">Comming Soon Page</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a href="contact.php">contact us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-btn">
                            <a onclick="popupopen()" class="round-btn">Book Now</a>
                        </div>

                    </div>

                </div>
                <marquee class=" " style="background-color: #0d9b4d;color: #fff; top: 92px;z-index: 80;">

                    <div>Holidays Offer - Get Upto 50% Off on All Packages</div>

                </marquee>
            </div>


    </div>

    </header>