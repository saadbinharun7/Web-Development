<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archivex";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo $_SESSION['aleefUserName'];
echo $_SESSION['aleefUserID'];


include_once('nav.php');
?>

