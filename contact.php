
    <?php
    session_start();
        $pageTitle = "Contact Us";
        $backgroundImage = "assets/images/header/contact-header.jpg";
        $pageDescription = "Reach out to us effortlessly, designed to facilitate seamless communication and provide swift assistance for any inquiries or feedback you may have.";
        include 'header.php';
    ?>
    <!-- Rest of the about.php content -->

	  <!-- end page-header -->
    <section class="content-section" data-background="#fffbf7">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-title text-center">
              <figure><img src="assets/images/title-shape.png" alt="Image"></figure>
              <h2>Help us to respond to <br>
you more quickly</h2>
            </div>
            <!-- end section-title --> 
          </div>
          <!-- end col-12 -->
			<div class="col-lg-5">
			<div class="contact-box">
				<h6>Our What's App Number</h6>
				<p>(+91) 890 366 7000</p>
				</div>
				<!-- end contact-box -->
				<div class="contact-box">
				<h6>General enquiries</h6>
				<p><a href="#">rubycardzindia@gmail.com</a>
          (+91) 890 366 7000</p>
				</div>
				<!-- end contact-box -->
				<div class="contact-box">
				<h6>Showroom :</h6>
				<p>
          Threspuram,
          Near Johnson School, 
          Boopalrayapuram main Road, 
          Tuticorin 628001.</p>
				</div>
				<!-- end contact-box -->
        <div class="contact-box">
          <h6>Design Studio :</h6>
          <p>
            T. Saveriarpuram,
                   Opp. TMB Bank, 
                   Sethupaathai Road,
                   Tuticorin 628002.</p>
          </div>
          <!-- end contact-box -->
			</div>
			<!-- end col-5 -->
			<div class="col-lg-5">
    <form action="sendMail.php" method="POST">
        <div class="contact-form">
            <div class="mb-3">
                <input type="text" name="name" placeholder="Complete Name" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" placeholder="E-mail Address" required>
            </div>
            <div class="mb-3">
                <input type="text" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="mb-3">
                <textarea name="message" placeholder="Your Message" required></textarea>
            </div>
            <div class="navbar-button">
                <button type="submit" name="submitcontact">Submit</button>
            </div>
        </div>
    </form>
</div>

			
      <!-- end container -->  
    </section>
    <!-- end content-section -->
<div class="google-maps">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4688.666908706439!2d78.15266220278788!3d8.815803187866072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b03ef0eff5c6617%3A0xf3b886579a2468c0!2sRuby%20Cardz!5e0!3m2!1sen!2sin!4v1716789419518!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	  </div>	  
	  <!-- end google-maps -->
    <section class="content-section no-spacing" data-background="#f7b92a">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="newsletter-box">
              <div class="form">
                <div class="titles">
                  <h6>Subscribe Newsletter</h6>
                  <h2>Sign up to get the
                    latest news</h2>
                </div>
                <!-- end titles -->
                <div class="inner">
                  <input type="email" placeholder="Enter your e-mail address">
                  <input type="submit" value="SIGN UP">
                </div>
                <!-- end inner --> 
                <small>Will be used in accordance with our <a href="#">Privacy Policy</a></small> </div>
              <!-- end form -->
              <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img src="assets/images/newsletter-image.png" alt="Image"></figure>
            </div>
            <!-- end newsletter-box --> 
          </div>
          <!-- end col-12 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end content-section -->
<?php include 'footer.php';?>
    <!-- end footer --> 
  </div>
</div>

<!-- JS FILES --> 

<!-- for Phpmail add the Link -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/gsap.min.js"></script> 
<script src="assets/js/locomotive-scroll.min.js"></script> 
<script src="assets/js/ScrollTrigger.min.js"></script> 
<script src="assets/js/kinetic-slider.js"></script> 
<script src="assets/js/fancybox.min.js"></script> 
<script src="assets/js/odometer.min.js"></script> 
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/scripts.js"></script>
<!-- for Phpmail add the Link -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  var message = "<?-$_SESSION['status']?? ''; ?>";
  if(messageText != '') {
    Swal.fire({
  title: "Thank you!",
  text: messageText,
  icon: "success",
});
<?php unset($_SESSION['status']); ?>
  }
  
</script>
<!-- WhatsApp Chat Button -->
<a href="https://wa.me/+918903667000" class="whatsapp-button" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Chat">
  <span class="whatsapp-tooltip">For enquiries</span>
</a>

</body>
</html>