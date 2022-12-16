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
                     <p><?= $brandname ?> India Pvt Ltd Provides Customized Tour Packages For Travellers Across India As Per Their Convenience. Packages and Products Can be Customized as as Per Customer Pick and Drop City, Transport, Meal Plan and Budget Range</p>
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
                  </div>
                  <div class="contact-map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14003.916046835566!2d77.36552818754029!3d28.660347097218903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfaa1c1508c11%3A0xdd43351e11bdc374!2sVasundhara%2C%20Ghaziabad%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1670684975666!5m2!1sen!2sin" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56957.53239169804!2d80.9744585558754!3d26.844857220121757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd49fc60a843%3A0x92fc72e19b623f6a!2sGomti%20Nagar%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1670685015881!5m2!1sen!2sin" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="contact-from-wrap primary-bg">
                     <form method="get" action="function.php" class="contact-from">
                        <p>
                           <label>First Name..</label>
                           <input type="text" name="name" placeholder="Your Name*" required>
                        </p>
                        <p>
                           <label>Email Address</label>
                           <input type="tel" name="phone" placeholder="Your Mobile*" required>
                        </p>
                        <p>
                           <label>Email Address</label>
                           <input type="email" name="email" placeholder="Your Email*">
                        </p>
                        <p>
                           <label>Comments / Questions</label>
                           <textarea name="message" rows="8" placeholder="Your Message*"></textarea>
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
            <div class="row align-items-center text-center">
               <div class="col-lg-4">
                  <div class="icon-box border-icon-box">
                     <div class="box-icon">
                        <i aria-hidden="true" class="fas fa-envelope-open-text"></i>
                     </div>
                     <div class="icon-box-content">
                        <h4>EMAIL ADDRESS</h4>
                        <ul>
                           <li>
                              <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
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
                              <a href="tel:<?= $phone ?>">+91 <?= $phone; ?> </a>
                           </li>

                        </ul>
                     </div>
                  </div>
               </div>
               <?php if (!$address == null) { ?>
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
               <?php }; ?>
            </div>
         </div>
      </div>
      <!-- ***iconbox section html end here*** -->
   </section>
</main>
<?php include('include/footer.php'); ?>