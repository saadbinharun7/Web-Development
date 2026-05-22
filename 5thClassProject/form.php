<html>


<?php
    $username = $_POST['UserName'];
    $userphone = $_POST['UserPhone'];
    echo $username;
?>
    <from method = "post">
        <input name = "UserName" type = "text" placeholder = "User Name"/>
        <br/>
        <input name = "UserPhone" type = "text" placeholder = "User Phone"/>
        <input type = "Submit" value = "login"/>
    </form>
</html>