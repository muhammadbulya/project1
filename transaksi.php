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

  .mar{
    margin-top: 3em;
    color:white;
  }
  .pad{
    margin-top: 0;
margin-left: 7em;
  }
.tab{
        border: 1px solid white;
        height:50px;
        text-align: center;
        padding-top: 10px;
}
  </style>

</head>

<body>

  <?php
	include 'script/e.php';
  include 'cek_login.php';
  $kd_brg2=$_GET['kode2'];
  $user_nm2=$_GET['nama2'];
  // $query="select * from data_barang where kd_brg='$kd_brg2'";
  // $hsl=mysqli_query($konek,$query);
  // $brs=mysqli_fetch_row($hsl);
  // $kd_brg=$brs[0];
  // $nm_brg=$brs[1];
  // $image=$brs[2];
  // $deksripsi=$brs[3];
  // $hrg=$brs[4];


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
   <a class="nav-link" href="<?php echo "index.php?user=$user_nm2"; ?>">Home</a>
   </li>
   <li class="nav-item">
   <a class="nav-link " href="<?php echo"transaksi.php?nama2=$user_nm2"; ?>">Pemesanan</a>
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
<div class="container mar">
<div class="row">
  <div class="col-3 tab">Kode Barang</div>
  <div class="col-3 tab">Status</div>
  <div class="col-3 tab">Jumlah</div>
  <div class="col-3 tab">Action</div>
</div>


<?php
  $query="select * from transaksi where usr_nm='$user_nm2'";
if (!$query) {
  echo "Belum Ada Pesanan";
}
else{

  $hsl=mysqli_query($konek,$query);
  while ($row=mysqli_fetch_row($hsl))
  {
  echo "<div class='row'>
      <div class='col-3 tab'>$row[2] </div>
      <div class='col-3 tab'>$row[3]</div>
      <div class='col-3 tab'>$row[4] </div>
      <div class='col-3 tab'><a href='del_pesanan.php?kode=$row[2]&id=$row[0]'>Hapus</a>
      <a href='edit.php?kode=$row[2]&id=$row[0]'>Edit</a>
      </div>
      </div>
    ";
  }

}

 ?>




</div>

<!-- <footer class="bawah">

</footer> -->





  <script src="js/fontawesome.min.js"></script>
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/classie.js"></script>
</body>

</html>
