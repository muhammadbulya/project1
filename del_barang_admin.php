<?php
include 'script/e.php';
$kode=$_GET['kode'];
$query="select *from data_barang where kd_brg='$kode'";
$hsl=mysqli_query($konek,$query);
$ada=mysqli_num_rows($hsl);
  $qry="delete from data_barang where kd_brg='$kode'";
  $hasil=mysqli_query($konek,$qry);
  if ($hasil) {
    echo "<script language='Javascript'>
    (window.alert('Data Sudah Dihapus'))
    location.href='admin_barang.php'
    </script>";

  }else {
    echo "<script language='Javascript'>
    (window.alert('Data Tidak dapat dihapus'))
    location.href='admin.php'
    </script>";

  }
?>
