<?php include('include/header.php'); ?>
<!-- site header html end  -->
<main id="content" class="site-main">
   <!-- ***home banner html start form here*** -->
   <section class="home-banner-section home-banner-slider">
      <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url(assets/images/banner-img1.jpg);">
         <div class="overlay"></div>
         <div class="container">
            <div class="banner-content text-center">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                     <h2 class="banner-title">JOURNEY TO EXPLORE WORLD</h2>
                     <p>Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
                     <div class="banner-btn">
                        <a href="about.php" class="round-btn">LEARN MORE</a>
                        <a href="contact.php" class="outline-btn outline-btn-white">BOOK NOW</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url(assets/images/img7.jpg);">
         <div class="overlay"></div>
         <div class="container">
            <div class="banner-content text-center">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                     <h2 class="banner-title">BEAUTIFUL PLACE TO VISIT</h2>
                     <p>Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
                     <div class="banner-btn">
                        <a href="about.php" class="round-btn">LEARN MORE</a>
                        <a href="contact.php" class="outline-btn outline-btn-white">BOOK NOW</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ***home banner html end here*** -->
   <!-- ***Home search field html start from here*** -->
   <!-- <div class="home-trip-search primary-bg">
      <div class="container">
         <form method="get" class="trip-search-inner d-flex">
            <div class="group-input">
               <label> Search Destination* </label>
               <input type="text" name="s" placeholder="Enter Destination">
            </div>
            <div class="group-input">
               <label> Pax Number* </label>
               <input type="text" name="s" placeholder="No.of People">
            </div>
            <div class="group-input width-col-3">
               <label> Checkin Date* </label>
               <i class="far fa-calendar"></i>
               <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
            </div>
            <div class="group-input width-col-3">
               <label> Checkout Date* </label>
               <i class="far fa-calendar"></i>
               <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
            </div>
            <div class="group-input width-col-3">
               <input type="submit" name="travel-search" value="INQUIRE NOW">
            </div>
         </form>
      </div>
   </div> -->
   <!-- ***search search field html end here*** -->
   <!-- ***Home destination html start from here*** -->
   <section class="home-destination">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-sm-center">
               <div class="section-heading">
                  <h5 class="sub-title">UNCOVER PLACE</h5>
                  <h2 class="section-title">POPULAR DESTINATION</h2>
                  <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
               </div>
            </div>
         </div>


         <div class="destination-section">
            <div class="row">
               <?php for ($x = 0; $x <= 2; $x++) {
               ?>
                  <div class="col-lg-4 col-md-6">
                     <?php $img = preg_replace('/\s+/', '-', $data[$x]['place']); ?>
                     <article class="destination-item" style="background-image: url(assets/images/<?= $img ?>.webp);">
                        <div class="destination-content">
                           <div class="rating-start-wrap">
                              <div class="rating-start">
                                 <span style="width: 100%"></span>
                              </div>
                           </div>
                           <span class="cat-link">
                              <a href="package-offer.php"><?= $data[$x]['city']; ?></a>
                           </span>
                           <h3>
                              <a href="package-detail.php"><?= $data[$x]['name']; ?></a>
                           </h3>
                           <p><?php echo implode(' ', array_slice(explode(' ', $data[$x]['overview']), 0, 10)) . "\n"; ?>....</p>
                           <a style="padding:17px" href="package-detail.php?p=<?= $x  ?>" class="round-btn">Book Now</a>
                           <a style="padding:17px" href="package-offer.php" class="round-btn">Learn More</a>
                        </div>
                     </article>
                  </div>
               <?php }; ?>
            </div>
            <div class="section-btn-wrap text-center">
               <a href="package-offer.php" class="round-btn">More Destination</a>
            </div>
         </div>
      </div>
   </section>
   <!-- ***Home destination html end here*** -->
   <!-- ***Home package html start from here*** -->
   <section class="home-package">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-sm-center">
               <div class="section-heading">
                  <h5 class="sub-title">POPULAR PACKAGES</h5>
                  <h2 class="section-title">CHECKOUT OUR PACKAGES</h2>
                  <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
               </div>
            </div>
         </div>
         <div class="package-section">
            <?php include('include/package_array.php'); ?>


            <?php
            $x = 0;
            foreach ($data as $key => $value) {
               $x++;
            ?>
               <article class="package-item">
                  <?php $img = preg_replace('/\s+/', '-', $value['place']); ?>
                  <figure class="package-image" style="background-image: url(assets/images/<?= $img ?>.webp);"></figure>
                  <div class="package-content">
                     <h3>
                        <a href="package-detail.php?p=<?= $x - 1 ?>" target="_blank">
                           <?= $value['name'] ?>
                        </a>
                     </h3>
                     <?php foreach ($value['stay'] as $row) { ?>
                        <p><?= $row ?></p>
                     <?php } ?>
                     <div class="package-meta">
                        <ul>
                           <li>
                              <i class="fas fa-clock"></i>
                              <?= $value['duration'] ?>
                           </li>
                           <!-- <li>
                              <i class="fas fa-user-friends"></i>
                              pax: 10
                           </li> -->
                           <li>
                              <i class="fas fa-map-marker-alt"></i>
                              <?= $value['place'] ?>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="package-price">
                     <div class="review-area">
                        <span class="review-text">(25 reviews)</span>
                        <div class="rating-start-wrap d-inline-block">
                           <div class="rating-start">
                              <span style="width: 80%"></span>
                           </div>
                        </div>
                     </div>
                     <h6 class="price-list">
                        <span>₹ <?= $value['price']; ?></span>
                        / per person
                     </h6>
                     <a href="package-detail.php?p=<?= $x - 1 ?>" class="outline-btn outline-btn-white">Book now</a>
                  </div>
               </article>
            <?php } ?>





            <div class="section-btn-wrap text-center">
               <!-- <a href="package.php" class="round-btn">VIEW ALL PACKAGES</a> -->
            </div>
         </div>
      </div>
   </section>
   <!-- ***Home package html end here*** -->
   <!-- ***Home callback html start from here*** -->
   <section class="home-callback bg-img-fullcallback" style="background-image: url(assets/images/img7.jpg);">
      <div class="overlay"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
               <div class="callback-content">
                  <div class="video-button">
                     <a id="video-container" data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=2OYar8OHEOU">
                        <i class="fas fa-play"></i>
                     </a>
                  </div>
                  <h2 class="section-title">ARE YOU READY TO TRAVEL? REMEMBER US !!</h2>
                  <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                  <div class="callback-btn">
                     <a href="package.php" class="round-btn">View Packages</a>
                     <a href="about.php" class="outline-btn outline-btn-white">Learn More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ***Home callback html end here*** -->
   <!-- ***Home counter html start from here*** -->
   <div class="home-counter">
      <div class="container">
         <div class="counter-wrap">
            <div class="counter-item">
               <span class="counter-no">
                  <span class="counter">80</span>K+
               </span>
               <span class="counter-desc">
                  SATISFIED CUSTOMER
               </span>
            </div>
            <div class="counter-item">
               <span class="counter-no">
                  <span class="counter">18</span>+
               </span>
               <span class="counter-desc">
                  ACTIVE MEMBERS
               </span>
            </div>
            <div class="counter-item">
               <span class="counter-no">
                  <span class="counter">220</span>+
               </span>
               <span class="counter-desc">
                  TOUR DESTINATION
               </span>
            </div>
            <div class="counter-item">
               <span class="counter-no">
                  <span class="counter">75</span>+
               </span>
               <span class="counter-desc">
                  TRAVEL GUIDES
               </span>
            </div>
         </div>
      </div>
   </div>
   <!-- ***Home counter html end here*** -->
   <!-- ***Home offer html start from here*** -->
   <section class="home-offer">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-sm-center">
               <div class="section-heading">
                  <h5 class="sub-title">OFFER & DISCOUNT</h5>
                  <h2 class="section-title">OUR SPECIAL PACKAGES</h2>
                  <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
               </div>
            </div>
         </div>
         <div class="offer-section">
            <div class="row">
               <?php for ($x = 0; $x <= 1; $x++) {
               ?>
                  <div class="col-md-6">
                     <?php $img = preg_replace('/\s+/', '-', $data[$x]['place']); ?>
                     <article class="offer-item" style="background-image: url(assets/images/<?= $img ?>.webp);">
                        <div class="offer-badge">
                           UPTO <span>25%</span> off
                        </div>
                        <div class="offer-content">
                           <div class="package-meta">
                              <ul>
                                 <li>
                                    <i class="fas fa-clock"></i>
                                    <?= $data[$x]['duration']; ?>
                                 </li>

                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?= $data[$x]['city']; ?>
                                 </li>
                              </ul>
                           </div>
                           <h3>
                              <a href="package.php"><?= $data[$x]['name']; ?></a>
                           </h3>
                           <p>
                              <?php echo implode(' ', array_slice(explode(' ', $data[$x]['overview']), 0, 10)) . "\n"; ?>....
                           </p>
                           <div class="price-list">
                              price:
                              <del>$1300 </del>
                              <ins><?= $data[$x]['price']; ?>$</ins>
                           </div>
                           <a href="package-detail.php?p=<?= $x  ?>" class="round-btn">Book Now</a>
                        </div>
                     </article>
                  </div>
               <?php } ?>
            </div>
            <div class="section-btn-wrap text-center">
               <a href="package-offer.php" class="round-btn">VIEW ALL PACKAGES</a>
            </div>
         </div>
      </div>
   </section>
   <!-- ***Home offer html end here*** -->
   <!-- ***Home gallery html start from here*** -->
   <!-- <section class="home-gallery">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-sm-center">
               <div class="section-heading">
                  <h5 class="sub-title">PHOTO GALLERY</h5>
                  <h2 class="section-title">PHOTO'S FROM TRAVELLERS</h2>
                  <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
               </div>
            </div>
         </div>
         <div class="gallery-section">
            <div class="gallery-container grid">
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <a href="assets/images/img14.jpg" data-fancybox="gallery">
                        <img src="assets/images/img14.jpg" alt="">
                     </a>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <a href="assets/images/img11.jpg" data-fancybox="gallery">
                        <img src="assets/images/img11.jpg" alt="">
                     </a>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <a href="assets/images/img12.jpg" data-fancybox="gallery">
                        <img src="assets/images/img12.jpg" alt="">
                     </a>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <a href="assets/images/img13jpg.php" data-fancybox="gallery">
                        <img src="assets/images/img13.jpg" alt="">
                     </a>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <a href="assets/images/img10.jpg" data-fancybox="gallery">
                        <img src="assets/images/img10.jpg" alt="">
                     </a>
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- ***Home gallery html end here*** -->
   <!-- ***Home client html start from here*** -->
   <section class="home-client client-section" style="background-image: url(assets/images/banner-img1.jpg);">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="client-content">
                  <h5 class="sub-title">DISCOUNT OFFER</h5>
                  <h2 class="section-title">GET SPECIAL DISCOUNT ON SIGN UP !</h2>
                  <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantm sit.</p>
                  <a href="contact.php" class="round-btn">Sign Up Now</a>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="client-logo">
                  <ul>
                     <li>
                        <img src="assets/images/client-img1.png" alt="">
                     </li>
                     <li>
                        <img src="assets/images/client-img2.png" alt="">
                     </li>
                     <li>
                        <img src="assets/images/client-img3.png" alt="">
                     </li>
                     <li>
                        <img src="assets/images/client-img4.png" alt="">
                     </li>
                     <li>
                        <img src="assets/images/client-img5.png" alt="">
                     </li>
                     <li>
                        <img src="assets/images/client-img6.png" alt="">
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="overlay"></div>
   </section>
   <!-- ***Home client html end here*** -->
   <!-- ***Home blog html start from here*** -->
   <section class="home-blog">
      <div class="container">
         <div class="section-heading d-sm-flex align-items-center justify-content-between">
            <div class="heading-group">
               <h5 class="sub-title">LATEST BLOG</h5>
               <h2 class="section-title">OUR RECENT POSTS</h2>
               <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. <br />Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
            </div>
            <div class="heading-btn">
               <a href="blog-archive.php" class="round-btn">View All Blog</a>
            </div>
         </div>
         <div class="blog-section">
            <div class="row gx-4">
               <div class="col-lg-6">
                  <article class="post">
                     <figure class="featured-post" style="background-image: url(assets/images/img16.jpg);"></figure>
                     <div class="post-content">
                        <div class="cat-meta">
                           <a href="blog-archive.php">TOUR</a>
                        </div>
                        <h3><a href="blog-single.php">BEST JOURNEY TO PEACEFUL PLACES</a></h3>
                        <p>Laboris hac erat dolor, posuere volutpat fringilla gravida metus nonummy, blandit mi...</p>
                        <div class="post-footer d-flex justify-content-between align-items-center">
                           <div class="post-btn">
                              <a href="blog-single.php" class="round-btn">Read More</a>
                           </div>
                           <div class="meta-comment">
                              <a href="blog-archive.php">
                                 <i aria-hidden="true" class="fas fa-comment"></i>
                                 <span>0</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
               <div class="col-lg-6">
                  <article class="post">
                     <figure class="featured-post" style="background-image: url(assets/images/img17.jpg);"></figure>
                     <div class="post-content">
                        <div class="cat-meta">
                           <a href="blog-archive.php">TRAVEL</a>
                        </div>
                        <h3><a href="blog-single.php">BTRAVEL WITH FRIENDS IS BEST</a></h3>
                        <p>Laboris hac erat dolor, posuere volutpat fringilla gravida metus nonummy, blandit mi...</p>
                        <div class="post-footer d-flex justify-content-between align-items-center">
                           <div class="post-btn">
                              <a href="blog-single.php" class="round-btn">Read More</a>
                           </div>
                           <div class="meta-comment">
                              <a href="blog-archive.php">
                                 <i aria-hidden="true" class="fas fa-comment"></i>
                                 <span>0</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ***Home blog html end here*** -->
   <!-- ***Home testimonial html start from here*** -->
   <section class="home-testimonial">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
               <div class="section-heading">
                  <h5 class="sub-title">CLIENT'S REVIEWS</h5>
                  <h2 class="section-title">TRAVELLER'S TESTIMONIAL</h2>
                  <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
               </div>
            </div>
         </div>
         <div class="testimonial-section testimonial-slider">
            <div class="testimonial-item">
               <div class="testimonial-content">
                  <div class="rating-start-wrap">
                     <div class="rating-start">
                        <span style="width: 80%"></span>
                     </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="author-content">
                     <figure class="testimonial-img">
                        <img src="assets/images/img18.jpg" alt="">
                     </figure>
                     <div class="author-name">
                        <h5>WILLIAM WRIGHT</h5>
                        <span>TRAVELLERS</span>
                     </div>
                  </div>
                  <div class="testimonial-icon">
                     <i aria-hidden="true" class="fas fa-quote-left"></i>
                  </div>
               </div>
            </div>
            <div class="testimonial-item">
               <div class="testimonial-content">
                  <div class="rating-start-wrap">
                     <div class="rating-start">
                        <span style="width: 80%"></span>
                     </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="author-content">
                     <figure class="testimonial-img">
                        <img src="assets/images/img19.jpg" alt="">
                     </figure>
                     <div class="author-name">
                        <h5>ALISON WHITE</h5>
                        <span>TRAVELLERS</span>
                     </div>
                  </div>
                  <div class="testimonial-icon">
                     <i aria-hidden="true" class="fas fa-quote-left"></i>
                  </div>
               </div>
            </div>
            <div class="testimonial-item">
               <div class="testimonial-content">
                  <div class="rating-start-wrap">
                     <div class="rating-start">
                        <span style="width: 80%"></span>
                     </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="author-content">
                     <figure class="testimonial-img">
                        <img src="assets/images/img20.jpg" alt="">
                     </figure>
                     <div class="author-name">
                        <h5>GEORGE SMITH</h5>
                        <span>TRAVELLERS</span>
                     </div>
                  </div>
                  <div class="testimonial-icon">
                     <i aria-hidden="true" class="fas fa-quote-left"></i>
                  </div>
               </div>
            </div>
            <div class="testimonial-item">
               <div class="testimonial-content">
                  <div class="rating-start-wrap">
                     <div class="rating-start">
                        <span style="width: 80%"></span>
                     </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="author-content">
                     <figure class="testimonial-img">
                        <img src="assets/images/img19.jpg" alt="">
                     </figure>
                     <div class="author-name">
                        <h5>ALISON WHITE</h5>
                        <span>TRAVELLERS</span>
                     </div>
                  </div>
                  <div class="testimonial-icon">
                     <i aria-hidden="true" class="fas fa-quote-left"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ***Home testimonial html end here*** -->
   <!-- ***Home callback html start from here*** -->
   <section class="home-callback bg-color-callback primary-bg">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-8">
               <h5 class="sub-title">CALL TO ACTION</h5>
               <h2 class="section-title">READY FOR UNFORGATABLE TRAVEL. REMEMBER US!</h2>
               <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
            </div>
            <div class="col-md-4 text-md-end">
               <a href="contact.php" class="outline-btn outline-btn-white">Contact Us !</a>
            </div>
         </div>
      </div>
   </section>
   <!-- ***Home callback html end here*** -->
</main>
<?php include('include/footer.php'); ?>