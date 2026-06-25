<?php include('header.php')?>

  <main class="main">

    <!-- Slider Section -->
<?php //include('slider.php')?>
	<!-- /Slider Section -->

<section id="contact" class="contact section">

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

	
		  
		  
        </div><!-- End Google Maps -->

        <div class="row gy-">

          <div class="col-lg-6">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSponAI5OXt21FXoCQNJiSRoBsQyUJ9AbuaNNdlUPmk2LDXyaNjOEFh_8sv&s=10" />

          </div>

          <div class="col-lg-6">
            <form action="" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

				<h2>Insert Your Information</h2>
				
				<?php
				if(isset($_POST['LoginSubmit'])){
					 $phone = $_POST['phone'];
					 $Password = $_POST['Password'];
					
					
				 $sql = "SELECT * FROM users where u_phone ='$phone' AND u_password= '$Password' ";
				
				
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// Output data of each row
	while($row = $result->fetch_assoc()) {
echo 'Welcome '.$row['u_name'];  echo'<br>';
$_SESSION['ZenLogIN'] = true;
$_SESSION['ZenUserID'] = $row['u_id'];
$_SESSION['ZenUserName'] = $row['u_name'];
}
}else {
	echo 'Account Not Found!';
}	
					
					
				}
				?>
				
				
                <div class="col-md-12">
                  <input type="text" name="phone" class="form-control" placeholder="Your phone" required="">
                </div>

                <div class="col-md-12 ">
                  <input type="Password" class="form-control" name="Password" placeholder="Password" required="">
                </div>

               

                <div class="col-md-12 text-start">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button name="LoginSubmit" type="submit">Login</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>



  </main>
<?php include('footer.php')?>