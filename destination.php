<?php
include('include/header.php');
include('include/package_array.php');
?>
<main id="content" class="site-main">
   <section class="destination-inner-page">
      <!-- ***Inner Banner html start form here*** -->
      <div class="inner-banner-wrap">
         <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
            <div class="container">
               <div class="inner-banner-content">
                  <h1 class="page-title">Destination</h1>
               </div>
            </div>
         </div>
      </div>
      <!-- ***Inner Banner html end here*** -->
      <!-- ***destination section html start form here*** -->
      <div class="destination-item-wrap">
         <div class="container">
            <div class="row gx-5">
               <?php
               foreach ($destination as $row) { ?>
                  <div class="col-lg-4 col-md-6">
                     <?php $img = preg_replace('/\s+/', '-', $row['img']); ?>
                     <article class="destination-item" style="background-image: url(assets/images/<?= $img ?>.webp);">
                        <div class="destination-content">
                           <div class="rating-start-wrap">
                              <div class="rating-start">
                                 <span style="width: 100%"></span>
                              </div>
                           </div>
                           <span class="cat-link">
                              <a href="package.php">Himachal Pradesh</a>
                           </span>
                           <h3>
                              <a href="package-detail.html"><?= $row['name']; ?></a>
                           </h3>
                           <p>Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>
                        </div>
                     </article>
                  </div>
               <?php }; ?>
            </div>
         </div>
      </div>
      <!-- ***destination section html start form here*** -->
      <!-- ***counter section html start form here*** -->
      <div class="inner-counter">
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
      <!-- ***counter section html end here*** -->
      <!-- ***callback section html start form here*** -->
      <div class="bg-color-callback primary-bg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-8 offset-lg-2 text-center">
                  <h5 class="sub-title">CALL TO ACTION</h5>
                  <h2 class="section-title">READY FOR UNFORGATABLE TRAVEL. REMEMBER US!</h2>
                  <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                  <a href="contact.html" class="outline-btn outline-btn-white">Contact Us !</a>
               </div>
            </div>
         </div>
      </div>
      <!-- ***callback section html end here*** -->
   </section>
</main>
<?php include('include/footer.php'); ?>