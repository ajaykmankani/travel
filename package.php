<?php include('include/header.php'); ?>
<?php include('include/package_array.php'); ?>

<main id="content" class="site-main">
   <section class="inner-page-wrap">
      <!-- ***Inner Banner html start form here*** -->
      <div class="inner-banner-wrap">
         <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
            <div class="container">
               <div class="inner-banner-content">
                  <h1 class="page-title">Tour Packages</h1>
               </div>
            </div>
         </div>
      </div>
      <!-- ***Inner Banner html end here*** -->
      <!-- ***package section html start form here*** -->
      <div class="package-item-wrap">
         <div class="container">
            <?php
            $x = 0;
            foreach ($data as $key => $value) {
               $x++;
               $img = preg_replace('/\s+/', '-', $value['place']);
            ?>
               <article class="package-item">
                  <figure class="package-image" style="background-image: url(assets/images/<?= $img ?>.webp);"></figure>
                  <div class="package-content">
                     <h3>
                        <a href="package-detail.php?p=<?= $x - 1 ?>">
                           <?php echo $value['name']; ?>
                        </a>
                     </h3>

                     <p>
                        <?php echo implode(' ', array_slice(explode(' ', $value['overview']), 0, 20)) . "\n"; ?>....
                     </p>
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
                        <span>₹<?= $value['price']; ?></span>
                        / per person
                     </h6>
                     <a href="package-detail.php?p=<?= $x - 1 ?>" class="outline-btn outline-btn-white">Book now</a>
                  </div>
               </article>
            <?php } ?>
         </div>
      </div>
      <!-- ***package section html start form here*** -->
      <!-- ***client section html start form here*** -->
      <div class="client-section" style="background-image: url(assets/images/banner-img1.jpg);">
         <div class="overlay"></div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <article class="client-content">
                     <h5 class="sub-title">DISCOUNT OFFER</h5>
                     <h2 class="section-title">GET SPECIAL DISCOUNT ON SIGN UP !</h2>
                     <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantm sit.</p>
                     <a href="contact.php" class="round-btn">Sign Up Now</a>
                  </article>
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
      </div>
      <!-- ***clinet section html end here*** -->
   </section>
</main>
<?php include('include/footer.php'); ?>