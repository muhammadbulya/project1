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
    height: 1000px;
    margin-top: 1em;

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
    font-size: 20px;
    margin-top: 5em;
  text-align: center;
    color: white;
    opacity: 0.7;
  }

  </style>

</head>

<body>

  <?php
	include 'script/e.php';

  $act=$_GET['act'];
if ($act=="1") {
	$judul="Tata Data Barang";
	$file="barang";
}
elseif ($act=="2") {
	$judul="Tata Kelola Transaksi";
	$file="transaksi_admin";
}

$split="<iframe name='I2' width='100%' height='1500' src='$file.php' scrolling='no'
				border='0' frameborder='0'> Maaf Browser Anda Tidak Mendukung InlineFrame coba
				instal browser terbaru</iframe> "
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
   <a class="nav-link" href="admin.php?act=1">Data Barang</a>
   </li>
   <li class="nav-item">
   <a class="nav-link " href="admin.php?act=2">Transaksi</a>
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
<div class="row">
  <div class="col-12">
    <div class="row no-gutters">
      <div class="col-12 col-lg-12 b"><h3><?php echo $judul; ?></h3></div>
      <div class="col-12 col-lg-10 offset-lg-1 bawah"><?php echo $split; ?></div>
    </div>
  </div>
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
