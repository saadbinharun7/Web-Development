    <section id="trending-category" class="trending-category section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="container" data-aos="fade-up">
          <div class="row g-5">
		  
		  
		  
		  
		  
		  <?php
$sql = "SELECT * FROM posts limit 1";
// Execute the SQL query
$result = $conn->query($sql);


//Process the result set
if ($result->num_rows > 0) {
	// Output data of each row
	
	while($row = $result->fetch_assoc()) {
		
	echo '   <div class="col-lg-4">

              <div class="post-entry lg">
                <a href="blog-details.html"><img src="upload/'.$row['p_img'].'" alt="" class="img-fluid"></a>
	<div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>'.$row['p_date'].'</span></div>
                <h2><a href="blog-details.html"> '.$row['p_title'].' </a></h2>
                <p class="mb-4 d-block">'.$row['p_desc'].'</p>

                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                  <div class="name">
                    <h3 class="m-0 p-0">Cameron Williamson</h3>
                  </div>
                </div>
              </div>

            </div>';
		
	}
	
}
?>
		  
		  
         
			
			
			
			
			
			

            <div class="col-lg-8">
              <div class="row g-5">
                <div class="col-lg-6 border-start custom-border">
				
				
				
				
				
				
				
						  <?php
$sql = "SELECT * FROM posts limit 3";
// Execute the SQL query
$result = $conn->query($sql);


//Process the result set
if ($result->num_rows > 0) {
	// Output data of each row
	
	while($row = $result->fetch_assoc()) {
		
		echo ' <div class="post-entry">
                    <a href="blog-details.html"><img src="upload/'.$row['p_img'].'" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">•</span> <span>'.$row['p_date'].'</span></div>
                    <h2><a href="blog-details.html">'.$row['p_title'].'</a></h2>
                  </div>';
}}

?>
				

                
                </div>
            

                <!-- Trending Section -->
                <div class="col-lg-4">

                  <div class="trending">
                    <h3>Trending</h3>
                    <ul class="trending-post">
					
					
											  <?php
$sql = "SELECT * FROM posts limit 3";
// Execute the SQL query
$result = $conn->query($sql);


//Process the result set
if ($result->num_rows > 0) {
	// Output data of each row
	
	while($row = $result->fetch_assoc()) {
		echo ' <li>
                        <a href="blog-details.html">
                          <span class="number">1</span>
                          <h3>'.$row['p_title'].'</h3>
                          <span class="author">Admin</span>
                        </a>
                      </li>';
}}

?>
					
					
					
					
                     
                     
                    </ul>
                  </div>

                </div> <!-- End Trending Section -->
              </div>
            </div>

          </div> <!-- End .row -->
        </div>

      </div>

    </section>