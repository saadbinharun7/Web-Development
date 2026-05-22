<style>
.nav {background: antiquewhite;
    padding: 13px 15px;}
</style>


<div class="nav">
<a href="all-users.php">All Users</a>
<a href="register.php">Register Users</a>

<?php
if(isset($_SESSION['aleefLogin']) AND $_SESSION['aleefLogin'] == true){
echo '<a href="login.php">Dashboard</a>';	
echo '<a href="logout.php">Logout</a>';	
}else{
echo '<a href="login.php">Login</a>';
}
?>
</div>
<br>
<br>
<br>