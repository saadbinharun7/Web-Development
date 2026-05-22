<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aleefagro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = new mysqli("localhost","root", "","aleefagro" );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>