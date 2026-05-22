<?php 
    include('connection.php');
    $userID = $_GET['id'];
    echo $_SESSION['DIT']
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Student</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    </head>
    <body>
        <h1>Edit Student</h1>

        <?php 
            $sql = "SELECT * FROM students where u_id = '$userID'";
            $result = $conn -> query($sql);

            if($result-> num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $getOldStudentName = $row['u_name'];
                    $getOldStudentPhone = $row['u_phone'];
                }
            }

            if(isset($_POST['StudentPhone'])){
                $phone = $_POST['StudentPhone'];
                $name = $_POST['StudentPhone'];
                $sql = "UPDATE students SET u_phone = '$phone', u_name = '$name' WHERE users.u_id = $userID";
                if($conn->query($sql) === TRUE){
                    echo "Student Data Updated successfully";
                }else{
                    echo "Error: ".$sql."<br>".$conn->error;
                }
            }
        ?>

        <form method="post">
        <span>Enter your name</span>
        <input name="StudentName" value="<?php echo $getOldStudentName ?>" type="text" placeholder="Name"/>
        <br/>

        <span>Enter your phone</span>
        <input name="StudentPhone" value="<?php echo $getOldStudentPhone ?>" type="text" placeholder="Phone"/>
        <br/>

        <input type="submit" name="submitBtn" value="Edit"/>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>