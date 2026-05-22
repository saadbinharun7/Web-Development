<?php
include('connection.php');

if(isset($_POST['submitBtn'])){
$username = $_POST['UserName'];
$UserPhone = $_POST['UserPhone'];
$UserPassword = $_POST['UserPassword'];
$UserEmail = $_POST['UserEmail'];
//$UserPassword = sha1($_POST['UserPassword']);
$sql = "INSERT INTO `users` (`u_id`, `u_name`, `u_phone`,`u_email`, `u_password`) 
VALUES (NULL, '$username', '$UserPhone','$UserEmail', '$UserPassword')";
if ($conn->query($sql) === TRUE) {
  echo "New User created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
//echo "Welcome - ".$username; echo "<br>";
//echo "Your Phone no is  - ".$UserPhone;
?>

<html>
<form method="post">
<input name="UserName" type="text" placeholder="Name"/>
<br/>
<input name="UserPhone" type="text" placeholder="Phone"/>
<br/>

<input name="UserEmail" type="email" placeholder="Email"/>
<br/>


<input name="UserPassword" type="password" placeholder="Password"/>

<input type="Submit" name="submitBtn" value="Register" />

</form>
</html>