<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" type="text/css" href="css/demo.css">
  <link rel="stylesheet" type="text/css" href="css/landing.css">


  <title>Mac OS</title>
  <style media="screen">

  .bawah{
    background-color: white;
    height: 50px;
  }
  .bawah1{
    background-color: white;
    height: 50px;
    opacity: 0.4;
  }

  .gambar{
    margin-top: 3em;
    text-align: justify;
    color: white;
  }
  .pad{
margin-left: 7em;
  }
  .b{
    font-size: 16px;
  }

  </style>

</head>

<body>

  <?php
	include 'script/e.php';
  include 'cek_login.php';
  $id=$_GET['id'];
  $kode=$_GET['kode'];
  $query="select * from transaksi where id='$id' ";
  $hsl=mysqli_query($konek,$query);
  $brs=mysqli_fetch_row($hsl);
  $jumlah=$brs[4];
  $usr_nm=$brs[1];

  $query1="select * from data_barang where kd_brg='$kode'";
  $hsl1=mysqli_query($konek,$query1);
  $brs1=mysqli_fetch_row($hsl1);
  $kd_brg=$brs1[0];
  $nm_brg=$brs1[1];
  $image=$brs1[2];
  $deksripsi=$brs1[3];
  $hrg=$brs1[4];
	 ?>
   <!-- Nav -->

   </nav> -->
   <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
   <a class="navbar-brand icon-lemon-o" href="#"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse"
   data-target="#navbarNav">
   <span class="navbar-toggler-icon"></span>
   </button>
   <a class="navbar-brand" href="#"> Mac OS
   </a>
   <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
   <a class="nav-link" href="#">Home</a>
   </li>
   <li class="nav-item">
   <a class="nav-link " href="transaksi.php">Pemesanan</a>
   </li>
   <li class="nav-item">
   <a class="nav-link" href="registrasi.php">Registrasi</a>
   </li>
   <li class="nav-item">
   <a class="nav-link" href="login.php">Login</a>
   </li>
   </ul>
   <form class="form-inline">
   <input class="form-control mr-sm-2 col-md-7 col-lg-7 " type="search" placeholder="Search">
   <button class="btn btn-outline-success my-2 my-sm-0  col-md-4" type="submit">Search</button>
   </form>
   </div>
   </nav>

   <!-- Nav -->







<div class="col-12 bawah1"></div>
<!-- Content -->
<?php
echo "<div class='container'>
<div class='row'>
  <div class='col-11 col-md-11 col-lg-6 gambar'><img src='barang/image/$image' ></div>
  <div class='col-11 gambar col-md-11 col-lg-6'><h2>$deksripsi</h2><p>Buat kamu yang punya budget lebih dan menginginkan laptop dengan spesifikasi tinggi,Lenovo IdeaPad IP110-1CID mungkin layak untuk kamu pertimbangkan.
Dibanderol dengan harga 5,2 jutaan, laptop berlayar 14 inci beresolusi HD ini sudah mengusung prosesor Intel Core i3-6100U yang menawarkan performa gesit,
baik untuk multitasking ataupun gaming. Apalagi Lenovo juga menyandingkannya dengan tipe grafis AMD R5 M430 2GB. Cocok deh buat kamu yang suka nge-game!
</p></div>
<div class='col-lg-12 pad'>
<form  action='edit.php?kode1=$kd_brg&nama1=$usr_nm' method='post'>
    <button type='button' id='sub' class='sub btn btn-outline-danger b'><b>-</b></button>
     <input type='number' id='1' value='$jumlah' min='1' max='10' name='jumlah'>
     <button type='button' id='add' class='add btn btn-outline-success b'><b>+</b></button>
     </div>
<div class='col-lg-6 offset-lg-6'><button type='submit' name='btn' class='btn btn-outline-light'>Beli</button></div>
</div>
</div>
</form>";
$status='dipesan';
echo $jumlah;
 ?>


<?php
  $kd_brg1=$_GET['kode1'];
  $user_nm1=$_GET['nama1'];
$btn=$_POST['btn'];
if (isset($btn)) {
  $jmlh=$_POST['jumlah'];
  $sql="update transaksi set jumlah='$jmlh' where kd_brg='$kd_brg1' and usr_nm='$user_nm1'";
  $hasil=mysqli_query($konek,$sql);
  if ($hasil) {
    echo "<script language='Javascript'>
    (window.alert('Pemesanan Berhasil'))
    location.href='transaksi.php?kode2=$kd_brg1&nama2=$user_nm1'
    </script>";

  }else {
    echo "<script language='Javascript'>
    (window.alert('Pemesanan Tidak Berhasil'))
    location.href='beli.php'
    </script>";
  }

}
 ?>



<!-- <footer class="bawah">

</footer> -->


<script>
$('.add').click(function () {
  if ($(this).prev().val() < 10) {
    $(this).prev().val(+$(this).prev().val() + 1);
  }
});
$('.sub').click(function () {
  if ($(this).next().val() > 1) {
    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
  }
});
</script>


  <script src="js/fontawesome.min.js"></script>
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/classie.js"></script>
</body>

</html>
