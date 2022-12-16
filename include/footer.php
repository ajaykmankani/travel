<!-- ***site footer html start form here*** -->
<footer id="colophon" class="site-footer footer-primary">
    <div class="top-footer">
        <div class="container">
            <div class="upper-footer">
                <div class="row ">
                    <div class="col-lg-3 col-sm-6">
                        <aside class="widget widget_text">
                            <div class="footer-logo">
                                <a href="index.php"><img src="assets/images/site-logo.webp" alt=""></a>
                            </div>
                            <div class="textwidget widget-text">
                                Himanchal Travels is a subsidiary of Goinggly Travels India Pvt Ltd.
                                <?= $brandname ?> India Pvt Ltd Provides Customized Tour Packages For Travellers Across India As Per Their Convenience.
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-center">
                        <aside class="widget widget_text">
                            <h3 class="widget-title text-center">APPROVED BY</h3>
                            <img src="assets/images/footer_img.webp" alt="" srcset="" style="max-width:73%">
                        </aside>
                    </div>
                    <!-- <<div class="col-lg-3 col-sm-6">
                         <aside class="widget widget_latest_post widget-post-thumb">
                            <h3 class="widget-title">RECENT POST</h3>
                            <ul>
                                <li>
                                    <figure class="post-thumb">
                                        <a href="blog-archive.php"><img src="assets/images/img21.jpg" alt=""></a>
                                    </figure>
                                    <div class="post-content">
                                        <h6>
                                            <a href="blog-single.php">BEST JOURNEY TO PEACEFUL PLACES</a>
                                        </h6>
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <a href="blog-archive.php">February 17, 2022</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <figure class="post-thumb">
                                        <a href="blog-archive.php"><img src="assets/images/img22.jpg" alt=""></a>
                                    </figure>
                                    <div class="post-content">
                                        <h6>
                                            <a href="blog-single.php">TRAVEL WITH FRIENDS IS BEST</a>
                                        </h6>
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <a href="blog-archive.php">February 17, 2022</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </aside>
                    </div>-->
                    <div class="col-lg-3 col-sm-6">
                        <aside class="widget widget_text">
                            <h3 class="widget-title">CONTACT US</h3>
                            <div class="textwidget widget-text">
                                <p>Feel free to contact and<br /> reach us !!</p>
                                <ul>
                                    <li>
                                        <a href="tel:<?= $phone; ?>">
                                            <i aria-hidden="true" class="icon icon-phone1"></i>
                                            +91 <?= $phone; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailtop:info@domain.com">
                                            <i aria-hidden="true" class="icon icon-envelope1"></i>
                                            <?= $email ?>
                                        </a>
                                    </li>
                                    <?php if (!$address == null) { ?>
                                        <li>
                                            <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                            <?= $address ?>
                                        </li>
                                    <?php }; ?>
                                </ul>
                            </div>
                        </aside>
                    </div>

                </div>
            </div>
            <div class="lower-footer">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="footer-newsletter">
                            <div class="social-icon"><img src="assets/images/cards.png" alt="" srcset=""></div>
                            <!-- <p>Subscribe our newsletter for more update & news !!</p>
                            <form class="newsletter">
                                <input type="email" name="email" placeholder="Enter Your Email">
                                <button type="submit" class="outline-btn outline-btn-white">Subscribe</button>
                            </form>-->
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="social-icon">
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

                            </ul>
                        </div>
                        <div class="footer-menu">
                            <!-- <ul>
                                <li>
                                    <a href="policy.php">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="policy.php">Term & Condition</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="copy-right text-center">Copyright &copy; 2022 | Developed & Marketed by <a href="https://www.mindyourads.com" target="_blank">MindYourAds</a> | All rights reserved.</div>
        </div>
    </div>
</footer>
<!-- ***site footer html end*** -->
<a id="backTotop" href="#" class="to-top-icon">
    <i class="fas fa-chevron-up"></i>
</a>
<!-- ***custom search field html*** -->
<div class="header-search-form">
    <div class="container">
        <div class="header-search-container">
            <form class="search-form" role="search" method="get">
                <input type="text" name="s" placeholder="Enter your text...">
            </form>
            <a href="#" class="search-close">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>
</div>
<!-- ***custom search field html*** -->
<!-- ***custom top bar offcanvas html*** -->
<div id="offCanvas" class="offcanvas-container">
    <div class="offcanvas-inner">
        <div class="offcanvas-sidebar">
            <aside class="widget author_widget">
                <h3 class="widget-title"><?= $brandname ?></h3>
                <div class="widget-content text-center">
                    <div class="profile">
                        <figure class="avatar">
                            <img src="assets/images/img21.jpg" alt="">
                        </figure>
                        <div class="text-content">
                            <div class="name-title">
                                <h4> <?= $brandname ?> India Pvt Ltd </h4>
                            </div>
                            <p><?= $brandname ?> India Pvt Ltd Provides Customized Tour Packages For Travellers Across India As Per Their Convenience. Packages and Products Can be Customized as as Per Customer Pick and Drop City, Transport, Meal Plan and Budget Range</p>
                        </div>
                        <div class="socialgroup">
                            <ul>
                                <li> <a target="_blank" href="<?= $facebook ?>"> <i class="fab fa-facebook"></i> </a> </li>
                                <li> <a target="_blank" href="<?= $twitter ?>"> <i class="fab fa-twitter"></i> </a> </li>
                                <li> <a target="_blank" href="<?= $instagram ?>"> <i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="widget widget_text text-center">
                <h3 class="widget-title">CONTACT US</h3>
                <div class="textwidget widget-text">
                    <p>Feel free to contact and<br /> reach us !!</p>
                    <ul>
                        <li>
                            <a href="tel:<?= $phone ?>">
                                <i aria-hidden="true" class="icon icon-phone1"></i>
                                +91 <?= $phone; ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailtop:info@domain.com">
                                <i aria-hidden="true" class="icon icon-envelope1"></i>
                                <?= $email; ?>
                            </a>
                        </li>
                        <li>
                            <i aria-hidden="true" class="icon icon-map-marker1"></i>
                            <?= $address; ?>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
        <a href="#" class="offcanvas-close">
            <i class="fas fa-times"></i>
        </a>
    </div>
    <div class="overlay"></div>
</div>
<!-- ***custom top bar offcanvas html*** -->
</div>

<!-- JavaScript -->
<script src="assets/vendors/jquery/jquery.js"></script>
<script src="assets/vendors/waypoint/waypoints.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
<script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
<script src="../../../unpkg.com/imagesloaded%404.1.4/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="assets/vendors/slick-nav/jquery.slicknav.js"></script>
<script src="assets/js/custom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<?php include('include/floating.php'); ?>
<?php include('include/popup2.php'); ?>
</body>


</html>