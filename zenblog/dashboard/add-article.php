<?php include('header.php')?>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

  <?php include('sidebar.php')?>
    <div class="admin-main">
  <?php include('navbar.php')?>
  
   
      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">Write A article</h1>
                <p class="text-muted mb-0">Write and Publish a new article.</p>
              </div>
            </div>
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>
		  
		    <section class="row g-3">
            <div class="col-12 col-xl-7">
              <form class="panel needs-validation" novalidate>
                <div class="panel-header"><div><h2 class="h5 mb-1 section-title"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i><span>Validation Form</span></h2><p class="text-muted mb-0">Bootstrap-ready fields with custom validation feedback.</p></div></div>
                <div class="row g-3">
				<div class="col-md-6">
				
				
   <?php
	 
	 if(isset($_POST['submitBtn'])){
		  $PostTitle = $_POST['PostTitle'];
		 
		 $PostCatagory = $_POST['PostCatagory'];
		 $PostDiscription= $_POST['PostDiscription'];
		 $cdate = date('d-m-Y');
		 $Puser = $_SESSION['ZenUserID'];
		 $pimg = ''.rand(00000,99999).'.png';
		 
		 
		 move_uploaded_file($_FILES["PostImg"]["tmp_name"],'upload/'.$pimg.'');

		 
		 
		 $sql = "INSERT INTO `posts`( `p_title`, `p_desc`, `p_users`, `p_date`, `p_category`, `p_status`, `p_link`,`p_img`) VALUES ('$PostTitle','$PostDiscription','$Puser','$cdate','$PostCatagory','0','','$pimg')";
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
		  


				
				<label class="form-label" for="formName">Post Title</label><input type="text" name="PostTitle" class="form-control" placeholder="Post Title" required="">
				<div class="invalid-feedback">Full name is required.</div>
				</div><div class="col-md-6">
				<div class="invalid-feedback">Valid email is required.</div></div>
				<div class="col-md-6"><select class="form-select" id="formPlan" required><option value="">tech</option><option></option><option>BD</option><option>Health</option></select><div class="invalid-feedback">Choose a plan.</div></div><div class="col-md-6"></div><div class="col-12"><label class="form-label" for="formMessage">Message</label><textarea class="form-control" id="formMessage" rows="5" required></textarea><div class="invalid-feedback">Message is required.</div></div></div>
                <div class="d-flex justify-content-end mt-4"><button class="btn btn-primary" type="submit"><i class="bi bi-send" aria-hidden="true"></i> Submit Form</button></div>
              </form>
            </div>
            <div class="col-12 col-xl-5"><div class="panel h-100"><h2 class="h5 mb-3 section-title"><i class="bi bi-input-cursor-text" aria-hidden="true"></i><span>Input States</span></h2><input class="form-control mb-3" value="Default input"><input class="form-control is-valid mb-3" value="Valid input"><input class="form-control is-invalid mb-3" value="Invalid input"><div class="form-check"><input class="form-check-input" type="checkbox" id="sampleCheck" checked><label class="form-check-label" for="sampleCheck">Sample checkbox</label></div></div></div>
          </section>
        

<?php
//echo $_SESSION['ZenUserName'];

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
      </main>
	  
	  
	  <?php include('footer.php') ?>

     