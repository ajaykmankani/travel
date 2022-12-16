<?php include('include/header.php'); ?>

<!-- site header html end  -->
<main id="content" class="site-main">
   <!-- ***home banner html start form here*** -->
   <section class="home-banner-section home-banner-slider">
      <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url(assets/images/img7.jpg);">
         <div class="overlay"></div>
         <div class="container">
            <div class="banner-content text-center">
               <div class="row text-start">
                  <div class="col-lg-8">
                     <h2 class="banner-title">JOURNEY TO EXPLORE HIMALAYA'S</h2>
                     <p>Let's build your greatest journey with us.<br>
                        We will build personalized travel plan for you.</p>
                     <div class="banner-btn">
                        <a href="about.php" class="round-btn">LEARN MORE</a>
                        <a onclick="popupopen()" class="outline-btn outline-btn-white">BOOK NOW</a>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="contact-from-wrap primary-bg" style="background-color:rgb(255 255 255 / 37%)">
                        <form method="get" action="function.php" class="contact-from">
                           <div class="row">
                              <h3 class="text-center">GET UP-TO <?= $discount ?> OFF ON BOOKINGS NOW</h3>
                              <div class="col-12 pb-3">
                                 <p>
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Your Name*" required style="opacity: 1;color: #000;">
                                 </p>
                              </div>
                              <div class="col-12 pb-3">
                                 <p>
                                    <label>Mobile</label>
                                    <input type="tel" name="phone" placeholder="Your Mobile*" required style="opacity: 1;color: #000;">
                                 </p>
                              </div>

                              <div class="col-6 pb-3 text=center">
                                 <p class="width-5">
                                    <label>Journey Date</label>
                                    <input class="input-date-picker" type="text" name="journey date" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly" style="opacity: 1;color: #000;" required>
                                 </p>
                              </div>
                              <div class="col-6 pb-3 text=center">
                                 <p class="width-5">
                                    <label>No. of persons</label>
                                    <input class="" type="number" name="Number of Persons" placeholder="No. of Persons" style="opacity: 1;color: #000;" required>
                                 </p>
                              </div>
                              <div class="col-12 pb-3">
                                 <p>
                                    <input type="submit" name="submit" value="SUBMIT MESSAGE">
                                 </p>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url(assets/images/img7.jpg);">
         <div class="overlay"></div>
         <div class="container">
            <div class="banner-content text-center">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                     <h2 class="banner-title">BEAUTIFUL PLACE TO VISIT</h2>
                     <p>Many of us feel our money should be spent on experiences rather than things. Experiences enrich our lives, open our minds, and create wonderful, lasting memories.</p>
                     <div class="banner-btn">
                        <a href="about.php" class="round-btn">LEARN MORE</a>
                        <a onclick="popupopen()" class="outline-btn outline-btn-white">BOOK NOW</a>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->



   </section>

   <div style="background-color: #3A78C9; padding:10px" class="d-none d-lg-block">
      <div class="container">
         <div class="row text-center" style="color:#fff">
            <div class="col-lg-2"><i class="fas fa-hotel" style="font-size: 40px;"></i><br>Hotel</div>
            <div class="col-lg-2"><i class="fas fa-binoculars" style="font-size: 40px;"></i><br>Sightseeing</div>
            <div class="col-lg-2"><i class="fas fa-utensils" style="font-size: 40px;"></i><br>Food Veg & Non Veg</div>
            <div class="col-lg-2">
               <i class="fas fa-car" style="font-size: 40px;"></i><br>Transfer in Private Car
            </div>
            <div class="col-lg-2">
               <i class="fas fa-ticket-alt" style="font-size: 40px;"></i><br>Volvo Bus Tickets
            </div>
            <div class="col-lg-2"><i class="fas fa-tag" style="font-size: 40px;"></i><br>Lowest Price</div>
         </div>
      </div>
   </div>

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
                  <p>Located in the Himalayas, the northern Indian state of Himachal Pradesh is replete with snowy mountains, lush forests, hilly terrains, and numerous water bodies. From the surreal terrain of Manali to hill stations in Kullu, Himachal is like a cupboard full of boxes waiting to be explored. Shimla, Kullu and Manali are highly popular in North India because of the scenic beauty and pleasant climate of the state. The ‘Abode of Snow’ is known for its adventure activities, religious centers, colonial heritage, and romantic getaways. Hence, opting for Himanchal Travels is a true delight for every kind of tourist, whether they are adventure enthusiasts, explorers, nature lovers.</p>
               </div>
            </div>
         </div>


         <div class="offer-package-wrap">
            <div class="container">
               <div class="row gx-5">

                  <?php
                  $x = 0;
                  foreach ($data as $row) {
                     $x++;
                  ?>
                     <div class="col-md-6">
                        <?php $img = preg_replace('/\s+/', '-', $row['place']); ?>
                        <article class="offer-item" style="background-image: url(assets/images/<?= $img ?>.webp);">
                           <div class="offer-badge">
                              UPTO <span><?= $discount ?></span> off
                           </div>
                           <div class="offer-content">
                              <div class="package-meta">
                                 <ul>
                                    <li>
                                       <i class="fas fa-clock"></i>
                                       <?= $row['duration']; ?>
                                    </li>

                                    <li>
                                       <i class="fas fa-map-marker-alt"></i>
                                       <?= $row['city']; ?>
                                    </li>
                                 </ul>
                              </div>
                              <h3>
                                 <a href="package.php"><?= $row['place']; ?></a>
                              </h3>
                              <p>
                                 <?php echo $row['name']; ?>
                              </p>
                              <div class="">
                                 <div class="row text-center align pb-3" style="font-size: 10px; color:#3a78c9">
                                    <div class="col-lg-2 col-2" style="padding: 0px;"><i class="fas fa-hotel" style="font-size: 18px;"></i><br>Hotel</div>
                                    <div class="col-lg-3 col-3" style="padding: 0px;"><i class="fas fa-binoculars" style="font-size: 18px;"></i><br>Sightseeing</div>
                                    <div class="col-lg-2 col-2" style="padding: 0px;"><i class="fas fa-utensils" style="font-size: 18px;"></i><br>Meals</div>
                                    <div class="col-lg-2 col-2" style="padding: 0px;"><i class="fas fa-car" style="font-size: 18px;"></i><br>Transfers</div>
                                    <div class="col-lg-3 col-3" style="padding: 0px;"><i class="fas fa-bus" style="font-size: 18px;"></i><br>Volvo</div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 text-center"><a href="package-detail.php?p=<?= $x - 1 ?>" class="btn btn-primary btn-block">View Details</a>
                                       <h6 style="color:red">Lowest Price Guaranteed*</h6>
                                    </div>
                                 </div>
                              </div>
                        </article>
                     </div>

                  <?php }; ?>


               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ***Home destination html end here*** -->
   <!-- ***Home package html start from here*** -->

   <!-- ***Home package html end here*** -->
   <!-- ***Home callback html start from here*** -->
   <section class="home-callback bg-img-fullcallback" style="background-image: url(assets/images/img7.jpg);">
      <div class="overlay"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
               <div class="callback-content">
                  <!-- <div class="video-button">
                     <a id="video-container" data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=2OYar8OHEOU">
                        <i class="fas fa-play"></i>
                     </a>
                  </div> -->
                  <h2 class="section-title">ARE YOU READY TO TRAVEL? REMEMBER US !!</h2>
                  <p>Hurry!! Early Bird Offer. Save Up to <?= $discount ?> Off Till 31st December. Get Customized Quotes.</p>
                  <div class="callback-btn">
                     <a onclick="popupopen()" class="round-btn">Book Now</a>
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
                  <span class="counter">10</span>K+
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
   <!-- <section class="home-offer">
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
                           UPTO <span><?= $discount ?></span> off
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
                              <a href="package.php"><?= $data[$x]['place']; ?></a>
                           </h3>
                           <p>
                              <?php echo $data[$x]['name'] ?>
                           </p>

                           <div class="">
                              <div class="row text-center align pb-3" style="font-size: 10px; color:#3a78c9">
                                 <div class="col-lg-2 col-2" style="padding: 0px;"><i class="fas fa-hotel" style="font-size: 18px;"></i><br>Hotel</div>
                                 <div class="col-lg-3 col-3" style="padding: 0px;"><i class="fas fa-binoculars" style="font-size: 18px;"></i><br>Sightseeing</div>
                                 <div class="col-lg-2 col-2" style="padding: 0px;"><i class="fas fa-utensils" style="font-size: 18px;"></i><br>Meals</div>
                                 <div class="col-lg-2 col-2" style="padding: 0px;"><i class="fas fa-car" style="font-size: 18px;"></i><br>Transfers</div>
                                 <div class="col-lg-3 col-3" style="padding: 0px;"><i class="fas fa-bus" style="font-size: 18px;"></i><br>Volvo</div>
                              </div>
                              <div class="row">
                                 <div class="col-12 text-center"><a href="package-detail.php?p=<?= $x  ?>" class="btn btn-primary btn-block">View Details</a>
                                    <h6 style="color:red">Lowest Price Guaranteed*</h6>
                                 </div>
                              </div>
                           </div>


                     </article>
                  </div>
               <?php } ?>
            </div>
            <!-- <div class="section-btn-wrap text-center">
               <a href="package-offer.php" class="round-btn">VIEW ALL PACKAGES</a>
            </div> -->
   </div>
   </div>
   </section> -->
   <!-- ***Home offer html end here*** -->
   <!-- ***Home gallery html start from here*** -->
   <section class="home-gallery">
      <div class=" container-fluid">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-sm-center">
               <div class="section-heading">
                  <h5 class="sub-title">PHOTO GALLERY</h5>
                  <h2 class="section-title">PHOTO'S FROM TRAVELLERS</h2>
               </div>
            </div>
         </div>

         <?php
         $gallery = array(
            'img1',
            'img2',
            'img3',
            'img9',
            'img5',
            'img6',
            'img7',
            'img4',
            'img10',
            'img12',
            'img13',
            'img16'
         )
         ?>
         <div class="container-fluid" style="background-image: url('assets/images/traveller.webp'); padding:15px;">
            <div class="row gallery-section" style="height: 400px">
               <marquee scrollamount=15>
                  <?php
                  for ($x = 0; $x <= 5; $x++) {
                     foreach ($gallery as $img) { ?>


                        <a href="assets/images/<?= $img ?>.jpg" data-fancybox="gallery" style="height: 100px">
                           <img src="assets/images/<?= $img ?>.jpg" alt="" style="height: 490px">
                        </a>


                  <?php }
                  } ?>
               </marquee>

            </div>
         </div>

      </div>
   </section>
   <!-- ***Home gallery html end here*** -->
   <!-- ***Home client html start from here*** -->
   <section class="home-client client-section" style="background-image: url(assets/images/banner-img1.jpg);">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="client-content">
                  <h5 class="sub-title">DISCOUNT OFFER</h5>
                  <h2 class="section-title">GET SPECIAL DISCOUNT ON SIGN UP !</h2>
                  <p>Hurry!! Early Bird Offer. Sign Up and Save Up to <?= $discount ?> Off Till 31st December. Get Customized Quotes.</p>
                  <a onclick="popupopen()" class="round-btn">Sign Up Now</a>
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
   <!-- <section class="home-blog">
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
   </section> -->
   <!-- ***Home blog html end here*** -->
   <!-- ***Home testimonial html start from here*** -->
   <section class="home-testimonial mt-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
               <div class="section-heading">
                  <h5 class="sub-title">CLIENT'S REVIEWS</h5>
                  <h2 class="section-title">TRAVELLER'S TESTIMONIAL</h2>

               </div>
            </div>
         </div>
         <div class="testimonial-section testimonial-slider">



            <?php include('include/review.php');
            foreach ($review as $rev) {
            ?>

               <div class="testimonial-item">
                  <div class="testimonial-content">
                     <div class="rating-start-wrap">
                        <div class="rating-start">
                           <span style="width: 80%"></span>
                        </div>
                     </div>
                     <p><?= $rev['content'] ?></p>
                     <div class="author-content">
                        <!-- <figure class="testimonial-img">
                           <img src="assets/images/<?= $rev['img'] ?>.jpg" alt="">
                        </figure> -->
                        <div class="author-name" style="padding: 0px;">
                           <h5><?= $rev['name'] ?></h5>
                           <span>TRAVELLERS</span>
                        </div>
                     </div>
                     <div class="testimonial-icon">
                        <i aria-hidden="true" class="fas fa-quote-left"></i>
                     </div>
                  </div>
               </div>

            <?php }; ?>






         </div>
      </div>
   </section>
   <!-- ***Home testimonial html end here*** -->
   <!-- ***Home callback html start from here*** -->
   <section class="home-client client-section" style="background-image: url(assets/images/img16.jpg); color:#fff">

      <div class="container " style="color: #fff;">
         <h2 class="text-center pb-5" style="color: #fff;">STILL CONFUSED TO CHOOSE HIMACHAL PACKAGE ?</h2>
         <div class="row align-items-top text-center ">
            <div class="col-md-3 border-right">
               <h5 class="sub-title"><i class="fas fa-clock " style="font-size:45px;color: #fff;"></i></h5>
               <h3 class="section-title" style="color: #fff;">Save time</h2>
                  <p>No need to surf Multiple Sites for packages, quotes, travel plans</p>
            </div>
            <div class="col-md-3 border-right">
               <h5 class="sub-title"><i class="fas fa-map-marked-alt" style="font-size:45px;color: #fff;"></i></h5>
               <h3 class="section-title" style="color: #fff;">Multiple Options</h2>
                  <p> Multiple Itineraries & Personalised Suggestions from our Travel agents</p>
            </div>
            <div class="col-md-3 border-right">
               <h5 class="sub-title"><i class="fas fa-money-bill-wave" style="font-size:45px;color: #fff;"></i></h5>
               <h3 class="section-title" style="color: #fff;">Save Money</h2>
                  <p>Compare, Negotiate & Choose teh best from multiple options</p>
            </div>
            <div class="col-md-3">
               <h5 class="sub-title"><i class="fas fa-hotel" style="font-size:45px;color: #fff;"></i></h5>
               <h3 class="section-title" style="color: #fff;">Trusted Network</h2>
                  <p>of 2000+ Hotels Reliable & Authentic Travel Guides in Himalaya</p>
            </div>
            <div class="col-md-12 text-md-center mt-3">
               <a onclick="popupopen()" class="outline-btn outline-btn-white mt-5">Call Now for customized package !</a>
            </div>
         </div>
      </div>
      <div class="overlay"></div>
   </section>
   <!-- ***Home callback html end here*** -->
</main>
<?php include('include/footer.php'); ?>
<?php include('include/popup.php'); ?>