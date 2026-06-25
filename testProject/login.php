<?php
include('connection.php');
if(isset($_POST['submitBtn'])){
$UserPhone = $_POST['UserPhone'];
$UserPassword = $_POST['UserPassword'];
$sql = "SELECT * FROM users where u_phone ='$UserPhone' AND u_password= '$UserPassword' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// Output data of each row
	while($row = $result->fetch_assoc()) {
echo 'Welcome '.$row['u_name'];  echo'<br>';
$_SESSION['aleefLogin'] = true;
$_SESSION['aleefUserID'] = $row['u_id'];
$_SESSION['aleefUserName'] = $row['u_name'];
}
}else {
	echo 'Account Not Found!';
}
}
//echo "Welcome - ".$username; echo "<br>";
//echo "Your Phone no is  - ".$UserPhone;
?>

<html>
<form method="post">
<h1>Login to Account</h1>
<input name="UserPhone" type="text" placeholder="Phone"/>
<br/>
<input name="UserPassword" type="password" placeholder="Password"/>
<input type="Submit" name="submitBtn" value="Login" />
</form>
</html>