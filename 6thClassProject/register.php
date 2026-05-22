<?php
    include ('connection.php');

    if(isset($_POST['SubmitBtn'])){
        $uname = $_POST['UserName'];
        $uphone = $_POST['UserPhone'];
        $umail = $_POST['UserEmail'];
        $upass = $_POST['UserPassword'];

        $sql = "INSERT INTO students(u_id,u_name,u_phone,u_email,u_password) VALUES(NULL,'$uname','$uphone','$umail','$upass')";

        if($conn->query($sql) === TRUE){
            echo "New user created successfully";
        }else{
            echo "Error: " . $sql. "<br>" .$conn->error;
        }
    }
?>

<html>
    <form method = "post">
        <input name = "UserName" type = "text" placeholder = "Write your name here"/>
        <br/>
        <input name = "UserPhone" type = "text" placeholder = "01**********"/>
        <br/>
        <input name = "UserEmail" type = "email" placeholder = "***@gmail.com"/>
        <br/>
        <input name = "UserPassword" type = "password" placeholder = "wdhcbwkc"/>
        <input name = "SubmitBtn" type = "Submit" value = "Register"/>
    </form>
</html>