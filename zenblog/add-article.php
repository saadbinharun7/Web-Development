<?php include('header.php') ?>

  <main class="main">

<section id="article" class="article section">

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

       
        
     
          <div class="col-lg-12">
            <form  enctype="multipart/form-data" action="" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

<?php
//echo $cdate = date('d/m/Y');

if(isset($_POST['submitBtn'])){
$posttitle = $_POST['PostTitle'];
$postdiscription = htmlentities($_POST['PostDiscription']);
$postcatagory = $_POST['PostCatagory'];
$cdate = date('d-m-Y');

move_uploaded_file($_FILES["PostImg"]["tmp_name"],'upload/'.rand(00000,99999).'-'.rand(00000,99999).'.png');



$sql = "INSERT INTO `posts` (`p_id`, `p_title`,`p_desc`,`p_users`,`p_date`,`p_category`,`p_status`,`p_link`)
 VALUES (NULL, '$posttitle','$postdiscription',NULL,'$cdate','$postcatagory',0,NULL)";
if ($conn->query($sql) === TRUE) {
  echo '<div class="alert alert-primary" role="alert">
  Post Succesfully!
</div>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>


                
                
                  <input type="text" name="PostTitle" class="form-control" placeholder="title" required="">
                  <input type="file" name="PostImg" class="form-control" placeholder="" required="">
                
				
				 
                  <textarea name="PostDiscription" rows= '5' class="form-control"></textarea>
				  
				  <input type="text" name="PostCatagory" class="form-control" placeholder="catagory" required="">
              
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