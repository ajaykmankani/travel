<?php
include('include/header.php');
include('include/package_array.php');
?>
<main id="content" class="site-main">
   <section class="inner-page-wrap">
      <!-- ***Inner Banner html start form here*** -->
      <div class="inner-banner-wrap">
         <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
            <div class="container">
               <div class="inner-banner-content">
                  <h1 class="page-title">Package Offer</h1>
               </div>
            </div>
         </div>
      </div>
      <!-- ***Inner Banner html end here*** -->
      <!-- ***offer package section html start form here*** -->
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
                           UPTO <span>25%</span> off
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
                              <?php echo implode(' ', array_slice(explode(' ', $row['overview']), 0, 10)) . "\n"; ?>....
                           </p>
                           <div class="price-list">
                              price:
                              <del>$1300 </del>
                              <ins>$1105</ins>
                           </div>
                           <a href="package-detail.php?p=<?= $x - 1 ?>" class="round-btn">Book Now</a>
                        </div>
                     </article>
                  </div>

               <?php }; ?>


            </div>
         </div>
      </div>
      <!-- ***offer package section html start form here*** -->
      <!-- ***callback section html start form here*** -->
      <div class="bg-img-fullcallback" style="background-image: url(assets/images/img16.jpg);">
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
      </div>
      <!-- ***callback section html end here*** -->
   </section>
</main>
<?php include('include/footer.php'); ?>