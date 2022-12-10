<!-- ***site footer html start form here*** -->
<footer id="colophon" class="site-footer footer-primary">
    <div class="top-footer">
        <div class="container">
            <div class="upper-footer">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <aside class="widget widget_text">
                            <div class="footer-logo">
                                <a href="index.php"><img src="assets/images/site-logo.png" alt=""></a>
                            </div>
                            <div class="textwidget widget-text">
                                Urna ratione ante harum provident, eleifend, vulputate molestiae proin fringilla, praesentium magna conubia at perferendis, pretium, aenean aut ultrices.
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- <aside class="widget widget_latest_post widget-post-thumb">
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
                        </aside> -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <aside class="widget widget_text">
                            <h3 class="widget-title">CONTACT US</h3>
                            <div class="textwidget widget-text">
                                <p>Feel free to contact and<br /> reach us !!</p>
                                <ul>
                                    <li>
                                        <a href="tel:+01988256203">
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
                                    <li>
                                        <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                        <?= $address ?>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <aside class="widget">
                            <h3 class="widget-title">Gallery</h3>
                            <div class="gallery gallery-colum-3">
                                <figure class="gallery-item">
                                    <a href="assets/images/img10.jpg" data-fancybox="gallery-1">
                                        <img src="assets/images/img21.jpg" alt="">
                                    </a>
                                </figure>
                                <figure class="gallery-item">
                                    <a href="assets/images/img28.jpg" data-fancybox="gallery-1">
                                        <img src="assets/images/img22.jpg" alt="">
                                    </a>
                                </figure>
                                <figure class="gallery-item">
                                    <a href="assets/images/img14.jpg" data-fancybox="gallery-1">
                                        <img src="assets/images/img23.jpg" alt="">
                                    </a>
                                </figure>
                                <figure class="gallery-item">
                                    <a href="assets/images/img15.jpg" data-fancybox="gallery-1">
                                        <img src="assets/images/img24.jpg" alt="">
                                    </a>
                                </figure>
                                <figure class="gallery-item">
                                    <a href="assets/images/img12.jpg" data-fancybox="gallery-1">
                                        <img src="assets/images/img25.jpg" alt="">
                                    </a>
                                </figure>
                                <figure class="gallery-item">
                                    <a href="assets/images/img13.jpg" data-fancybox="gallery-1">
                                        <img src="assets/images/img26.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- <div class="footer-newsletter">
                            <p>Subscribe our newsletter for more update & news !!</p>
                            <form class="newsletter">
                                <input type="email" name="email" placeholder="Enter Your Email">
                                <button type="submit" class="outline-btn outline-btn-white">Subscribe</button>
                            </form>
                        </div> -->
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
                                    <a href="<?= $youtube ?>" target="_blank">
                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $instagram ?>" target="_blank">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $linkedin ?>" target="_blank">
                                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li>
                                    <a href="policy.php">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="policy.php">Term & Condition</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="copy-right text-center">Copyright &copy; 2022 Traveler. All rights reserved.</div>
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
                <h3 class="widget-title">OUR PROPRIETOR</h3>
                <div class="widget-content text-center">
                    <div class="profile">
                        <figure class="avatar">
                            <img src="assets/images/img21.jpg" alt="">
                        </figure>
                        <div class="text-content">
                            <div class="name-title">
                                <h4> James Watson</h4>
                            </div>
                            <p>Accumsan? Aliquet nobis doloremque, aliqua? Inceptos voluptatem, duis tempore optio quae animi viverra distinctio cumque vivamus, earum congue, anim velit</p>
                        </div>
                        <div class="socialgroup">
                            <ul>
                                <li> <a target="_blank" href="<?= $facebook ?>"> <i class="fab fa-facebook"></i> </a> </li>
                                <li> <a target="_blank" href="<?= $twitter ?>"> <i class="fab fa-google"></i> </a> </li>
                                <li> <a target="_blank" href="<?= $facebook ?>"> <i class="fab fa-twitter"></i> </a> </li>
                                <li> <a target="_blank" href="<?= $facebook ?>"> <i class="fab fa-instagram"></i> </a> </li>
                                <li> <a target="_blank" href="<?= $facebook ?>"> <i class="fab fa-pinterest"></i> </a> </li>
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
                            <a href="tel:+91<?= $phone ?>">
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
</body>

<!-- Mirrored from demo.stairthemes.com/html/traveler/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Dec 2022 20:27:49 GMT -->

</html>