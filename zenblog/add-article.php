<?php include('header.php') ?>

  <main class="main">

<section id="article" class="article section">

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

       
        
     <?php
	 
	 if(isset($_POST['submitBtn'])){
		 $PostTitle = $_POST['PostTitle'];
		 $PostCatagory = $_POST['PostCatagory'];
		 $PostDiscription= $_POST['PostDiscription'];
		 $cdate = date('d-m-Y');
		 
		 $pimg = ''.rand(00000,99999).'.png';
		 
		 
		 move_uploaded_file($_FILES["PostImg"]["tmp_name"],'upload/'.$pimg.'');

		 
		 
		  $sql = "INSERT INTO `posts`( `p_title`, `p_desc`, `p_users`, `p_date`, `p_category`, `p_status`, `p_link`,`p_img`) VALUES ('$PostTitle','$PostDiscription','0','$cdate','$PostCatagory','0','','$pimg')";
		if ($conn->query($sql) === TRUE) {
		  echo '<div class="alert alert-primary" role="alert">
		  Post Succesfully!
		</div>';
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		 
	 }
	 
	 
	 ?>




		  <form  enctype="multipart/form-data" method="post">
		  <h1>Add Article </h1>
<input type="text" name="PostTitle" class="form-control m-2" placeholder="Post Title" required="">

<?php
$sql = "SELECT * FROM category ";
// Execute the SQL query
$result = $conn->query($sql);


//Process the result set
if ($result->num_rows > 0) {
	// Output data of each row
	echo "<select name='PostCatagory' class='form-control  m-2' >";
	while($row = $result->fetch_assoc()) {
		
		echo "<option value='".$row['c_id']."'  >".$row['c_name']."</option>";
		
	}
	echo "</select>";
}
?>





<textarea name="PostDiscription" rows= '5' class="form-control  m-2"></textarea>
  <input type="file" name="PostImg" class="form-control   m-2" placeholder="" >
    <input type="submit" class="btn btn-info   m-2" name="submitBtn" />             				  
		  
		  
		  </form>
		  
		  
		  

        </div>

      </div>

    </section>







 
  </main>
<?php include('footer.php')?>