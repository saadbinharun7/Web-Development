<?php
include('connection.php');


//INSERT INTO `users` (`u_id`, `u_name`, `u_phone`, `u_email`, `u_password`) VALUES (NULL, 'Azad', '435261879', 'azad@gmail.com', '123');

$sql = "INSERT INTO `users` (`u_id`, `u_name`, `u_phone`, `u_password`) 
VALUES (NULL, 'hsdghs', '4', '2232')";

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