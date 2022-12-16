<?php include('include/header.php'); ?>
<?php include('include/package_array.php'); ?>
<?php
$package = $data[$_GET["p"]]
?>
<main id="content" class="site-main">
   <section class="package-inner-page">
      <!-- ***Inner Banner html start form here*** -->
      <div class="inner-banner-wrap">
         <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
            <div class="container">
               <div class="inner-banner-content">
                  <h1 class="page-title">Package Deatil</h1>
               </div>
            </div>
         </div>
      </div>
      <!-- ***Inner Banner html end here*** -->
      <!-- ***career section html start form here*** -->
      <div class="inner-package-detail-wrap">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 primary right-sidebar">
                  <div class="single-packge-wrap">
                     <div class="single-package-head d-flex align-items-center">
                        <div class="package-title">
                           <h2><?= $package['name'] ?></h2>
                           <div class="rating-start-wrap">
                              <div class="rating-start">
                                 <span style="width: 80%"></span>
                              </div>
                           </div>
                        </div>
                        <div class="package-price">
                           <h6 class="price-list">
                              <span>₹<?= $package['price']; ?></span>
                              / per person
                           </h6>
                        </div>
                     </div>
                     <div class="package-meta">
                        <ul>
                           <li>
                              <i class="fas fa-clock"></i>
                              <?= $package['duration'] ?>
                           </li>
                           <!-- <li>
                              <i class="fas fa-user-friends"></i>
                              pax: 10
                           </li> -->
                           <li>
                              <i class="fas fa-swimmer"></i>
                              Category : Hangout
                           </li>

                           <li>
                              <i class="fas fa-map-marker-alt"></i>
                              <?= $package['place'] ?>
                           </li>
                        </ul>
                     </div>
                     <figure class="single-package-image">
                        <?php $img = preg_replace('/\s+/', '-', $package['place']); ?>
                        <img src="assets/images/<?= $img ?>.webp" alt="">
                     </figure>
                     <div class="package-content-detail">
                        <article class="package-overview">
                           <h3>OVERVIEW :</h3>
                           <p><?= $package['overview'] ?></p>
                        </article>
                        <article class="package-include bg-light-grey">
                           <h3>INCLUDE :</h3>
                           <ul>
                              <?php foreach ($package['stay'] as $row) { ?>
                                 <li><i class="fas fa-check"></i><?= $row ?></li>
                              <?php } ?>
                           </ul>
                        </article>
                        <article class="package-ininerary">
                           <h3>TRIP HIGHLIGHTS :</h3>
                           <p><?= $package['place'] ?> trip highlights.</p>
                           <ul>
                              <?php foreach ($package['Inclusions-'] as $row) { ?>
                                 <li>
                                    <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                    <span></span>
                                    <?= $row ?>
                                 </li>
                              <?php } ?>
                           </ul>
                        </article>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="sidebar">
                     <div class="booking-form-wrap">
                        <div class="booking-form-inner primary-bg">
                           <h3>GET FREE QUOTATION</h3>
                           <p>Contact us to book or customize your trip to <b><?= $package['place'] ?></b></p>
                           <form method="get" action="function.php" class="booking-form">
                              <p>
                                 <input type="text" name="name" placeholder="Your Name..." required>
                              </p>
                              <p>
                                 <input type="tel" name="phone" placeholder="Your Mobile..." required>
                              </p>
                              <p>
                                 <input type="email" name="email" placeholder="Your Email...">
                              </p>
                              <p class="width-5">
                                 <label>Journey Date</label>
                                 <input class="input-date-picker" type="text" name="journey date" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                              </p>
                              <p class="width-5">
                                 <label>No. of persons</label>
                                 <input class="" type="number" name="Number of Persons" placeholder="No. of Persons">
                              </p>
                              <p>
                                 <button type="submit" class="outline-btn outline-btn-white">INQUIRY NOW</button>
                              </p>
                           </form>
                        </div>
                     </div>
                     <div class="related-package">
                        <h3>Gallary</h3>
                        <p>Places Gallary</p>
                        <div class="related-package-slide">
                           <?php

                           foreach ($data as $row) {

                              $img2 = preg_replace('/\s+/', '-', $row['place']);
                           ?>
                              <div class="related-package-item">
                                 <img src="assets/images/<?= $img2 ?>.webp" alt="">
                              </div>
                           <?php } ?>
                        </div>
                     </div>
                     <div class="package-map">
                        <?= $package['maps'] ?>
                     </div>
                     <div class="package-list">
                        <div class="overlay"></div>
                        <h4>MORE PACKAGES</h4>
                        <ul>
                           <li>
                              <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>Vacation Packages</a>
                           </li>
                           <li>
                              <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>Homeymoon Packages</a>
                           </li>
                           <li>
                              <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>New Year Packages</a>
                           </li>
                           <li>
                              <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>Weekend Packages</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ***career section html start form here*** -->
   </section>
</main>
<?php include('include/footer.php'); ?>