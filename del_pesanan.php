<?php
include 'script/e.php';
$id=$_GET['id'];
$kode=$_GET['kode'];
$query1="select * from transaksi where id='$id' ";
$hsl1=mysqli_query($konek,$query1);
$brs=mysqli_fetch_row($hsl1);
$usr_nm=$brs[1];
$query="select *from transaksi where kd_brg='$kode'";
$hsl=mysqli_query($konek,$query);
$ada=mysqli_num_rows($hsl);
  $qry="delete from transaksi where kd_brg='$kode'";
  $hasil=mysqli_query($konek,$qry);
  if ($hasil) {
    echo "<script language='Javascript'>
    (window.alert('Data Sudah Dihapus'))
    location.href='transaksi.php?kode2=$kode&nama2=$usr_nm'
    </script>";

  }else {
    echo "<script language='Javascript'>
    (window.alert('Data Tidak dapat dihapus'))
    location.href='transaksi.php?kode2=$kode&nama2=$usr_nm'
    </script>";

  }
?>
