<?php
include 'script/e.php';
$userid=$_COOKIE['admin'];
$passid=$_COOKIE['pin'];
$query="select usr_nm,pass from customer WHERE usr_nm='$userid' and pass='$passid'";
$hasil_mysql=mysqli_query($konek,$query);
$baris=mysqli_fetch_row($hasil_mysql);
if ($baris[0] <> "") {
  echo "<script language='Javascript'>
  (window.alert('Login Berhasil'))
  location.href='index.php?user=$userid'
  </script>";
}else {
  echo "<script language='Javascript'>
  (window.alert('Username atau Password Salah'))
  location.href='login.php'
  </script>";
}
 ?>
