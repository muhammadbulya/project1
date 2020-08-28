<?php
$user=$_POST['usr_nm'];
$pass=$_POST['password'];
setcookie("admin",$user);
setcookie("pin",$pass);
header("location:login_customer.php")
 ?>
