<?php
include('connection.php');
$userID =  $_GET['id'];
?>
<?php
echo $_SESSION['DIT'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
<h1> Edit User</h1>
<?php
$sql = "SELECT * FROM users where u_id = '$userID' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	$getOldUserName = $row['u_name'];
	$getOldUserPhone = $row['u_phone'];
	}
}
if(isset($_POST['UserPhone'])){
	$phone = $_POST['UserPhone'];
	$name = $_POST['UserName'];
	$sql = "UPDATE `users` SET `u_phone` = '$phone',`u_name`= '$name' WHERE `users`.`u_id` = $userID ";
	if ($conn->query($sql) === TRUE) {
		echo " User Data Updated successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>
<form method="post">
<!--<?php if(isset($_POST['UserPhone'])){ }else{?><span>Enter Your Phone</span><?php } ?>-->
<span>Enter Your Name</span>
<input name="UserName" value="<?php echo $getOldUserName?>" type="text" placeholder="Name"/>
<br/>
<span>Enter Your Phone</span>
<input name="UserPhone" value="<?php echo $getOldUserPhone?>" type="text" placeholder="Phone"/>
<br/>
<input type="Submit" name="submitBtn" value="Edit" />
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>





