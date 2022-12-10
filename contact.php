<?php include('include/header.php'); ?>
<main id="content" class="site-main">
   <section class="contact-inner-page">
      <!-- ***Inner Banner html start form here*** -->
      <div class="inner-banner-wrap">
         <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
            <div class="container">
               <div class="inner-banner-content">
                  <h1 class="page-title">Contact US</h1>
               </div>
            </div>
         </div>
      </div>
      <!-- ***Inner Banner html end here*** -->
      <!-- ***contact section html start form here*** -->
      <div class="inner-contact-wrap">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="section-heading">
                     <h5 class="sub-title">GET IN TOUCH</h5>
                     <h2 class="section-title">REACH & CONTACT US!</h2>
                     <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent. Eget feugiat error necessitatibus taciti..</p>
                     <div class="social-icon">
                        <ul>
                           <li>
                              <a href="<?=$facebook?>" target="_blank">
                                 <i class="fab fa-facebook-f" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?=$twitter?>" target="_blank">
                                 <i class="fab fa-twitter" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?=$youtube?>" target="_blank">
                                 <i class="fab fa-youtube" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?=$instagram?>" target="_blank">
                                 <i class="fab fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?=$pinterest?>" target="_blank">
                                 <i class="fab fa-pinterest" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="contact-map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.540423056448!2d-0.12174238402827448!3d51.50330061882345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2snp!4v1646314586610!5m2!1sen!2snp" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="contact-from-wrap primary-bg">
                     <form method="get" class="contact-from">
                        <p>
                           <label>First Name..</label>
                           <input type="text" name="name" placeholder="Your Name*">
                        </p>
                        <p>
                           <label>Email Address</label>
                           <input type="email" name="email" placeholder="Your Email*">
                        </p>
                        <p>
                           <label>Comments / Questions</label>
                           <textarea rows="8" placeholder="Your Message*"></textarea>
                        </p>
                        <p>
                           <input type="submit" name="submit" value="SUBMIT MESSAGE">
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ***contact section html start form here*** -->
      <!-- ***iconbox section html start form here*** -->
      <div class="contact-details-section bg-light-grey">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4">
                  <div class="icon-box border-icon-box">
                     <div class="box-icon">
                        <i aria-hidden="true" class="fas fa-envelope-open-text"></i>
                     </div>
                     <div class="icon-box-content">
                        <h4>EMAIL ADDRESS</h4>
                        <ul>
                           <li>
                              <a href="mailto:support@gmail.com"><?= $email; ?></a>
                           </li>

                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="icon-box border-icon-box">
                     <div class="box-icon">
                        <i aria-hidden="true" class="fas fa-phone-alt"></i>
                     </div>
                     <div class="icon-box-content">
                        <h4>PHONE NUMBER</h4>
                        <ul>
                           <li>
                              <a href="tel:+91<?= $phone ?>">+91 <?= $phone; ?> </a>
                           </li>

                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="icon-box border-icon-box">
                     <div class="box-icon">
                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                     </div>
                     <div class="icon-box-content">
                        <h4>ADDRESS LOCATION</h4>
                        <ul>
                           <li>
                              <?= $address; ?>
                           </li>

                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ***iconbox section html end here*** -->
   </section>
</main>
<?php include('include/footer.php'); ?>