<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "class4";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO `datatable` (`u_id`, `u_name`, `u_phone`, `u_email`) VALUES (NULL, 'abc', '4', 'abc@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>


<html>




</html>


<?php



?>