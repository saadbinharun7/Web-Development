<?php
include('connection.php');
echo $userID =  $_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
<!-- <h1> View User</h1> -->
<?php
$sql = "SELECT * FROM datasheet where u_id = '$userID' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	echo "<tr>
UserID _ ".$row['u_id']."<br>
User Name_ ".$row['u_name']."<br>
User Phone_ ".$row['u_phone']."<br>
User Email_ ".$row['u_email']."<br>
<a class='btn btn-info btn-sm' href='view-users.php?id=".$row['u_id']."'>View</a>
<a class='btn btn-success btn-sm' href='edit-users.php?id=".$row['u_id']."'>Edit</a>
<a class='btn btn-danger btn-sm' href='delete-users.php?DeleteUserID=".$row['u_id']."'>Delete</a>
";
	}
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>





