<?php include('header.php')?>

  <main class="main">

    <!-- Slider Section -->
<?php //include('slider.php')?>
	<!-- /Slider Section -->




<section id="contact" class="contact section">

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

		  <iframe style="border:0; width: 100%; height: 270px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19448.353986537146!2d90.37838888213211!3d23.74642470929422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf97bcd1e88d%3A0xc83cd5c97da4b55d!2sDigital%20IT%20Institute!5e0!3m2!1sen!2sbd!4v1780579257650!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		  
		  
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>
     
          <div class="col-lg-8">
            <form action="" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

<?php
if(isset($_POST['submitBtn'])){
$username = $_POST['UserName'];
$UserPhone = $_POST['UserPhone'];
$UserPassword = $_POST['UserPassword'];
$UserEmail = $_POST['UserEmail'];
//$UserPassword = sha1($_POST['UserPassword']);
$sql = "INSERT INTO `users` (`u_id`, `u_name`, `u_phone`,`u_email`, `u_password`) 
VALUES (NULL, '$username', '$UserPhone','$UserEmail', '$UserPassword')";
if ($conn->query($sql) === TRUE) {
  echo '<div class="alert alert-primary" role="alert">
  Resitred Succesfully!
</div>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>


                <div class="col-md-6">
                  <input type="text" name="UserName" class="form-control" placeholder="Your Name" required="">
                </div>
				
				 <div class="col-md-6">
                  <input type="text" name="UserPhone" class="form-control" placeholder="Your Phone" required="">
                </div>
				
				 <div class="col-md-6">
                  <input type="password" name="UserPassword" class="form-control" placeholder="Your password" required="">
                </div>
				

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="UserEmail" placeholder="Your Email" required="">
                </div>

          

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <input type="submit" name="submitBtn" />
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>







 
  </main>
<?php include('footer.php')?>