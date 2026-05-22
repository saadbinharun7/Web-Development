<?php 
    include('connection.php');
    $stdID = $_GET['id'];
?>

<!doctype html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Student</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    </head>
    <body>
        <h1> View Student </h1>
        <div class="container">
        <table class="table table-dark table-hover">
        <?php 
            $sql = "SELECT * FROM students where u_id = '$stdID'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {

                    echo "<tr><td>Student ID : ".$row['u_id']."</td></tr>
                    <tr><td>Student Name : ".$row['u_name']."</td><tr>
                    <tr><td>Student Phone : ".$row['u_phone']."</td><tr>
                    <tr><td>Student Email : ".$row['u_email']."</td><tr>
                    <tr><td>
                    <a class = 'btn btn-info btn-sm' href = 'http://localhost/6thClassProject/allStudents.php'>Go Back</a>
                    <a class = 'btn btn-success btn-sm' href = 'view-students.php?id=".$row['u_id']."'>Edit</a>
                    <a class = 'btn btn-danger btn-sm' href = 'view-students.php?id=".$row['u_id']."'>Delete</a>
                    </td></tr>";
                }
            }
        ?>
        </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>