<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" type="text/css" href="css/demo.css">
  <link rel="stylesheet" type="text/css" href="css/landing.css">


  <title>Mac OS</title>
  <style media="screen">

  .kotak {
  	background-color: white;
  	border: 1px solid rgba(86, 61, 124, 0.2);
  	height: 350px;
    margin-top: 3em;
    margin-bottom: 3em;
    margin-left: 5.2em;
    font-size: 14px;
  }
  .bawah{
    background-color: white;
    height: 50px;
    padding: 0;
    margin: 0;
  }
  .foto{
      height: 200px;
    width: 250px;

  }
  .putih{
    color: white;
  }


  </style>

</head>

<body>

  <?php
	include 'script/e.php';
  $usr_nm=$_GET['user'];
  $query="select * from customer where usr_nm='$usr_nm'";
  $hsl=mysqli_query($konek,$query);
  $brs=mysqli_fetch_row($hsl);
  $user=$brs[0];
  $nama=$brs[1];
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
<?php
if ($user=="") {
  // code...
}
else {
  echo "  <li class='nav-item'>
    <a class='nav-link ' href='transaksi.php?nama2=$user'  >Pemesanan</a>
    </li>";

}
 ?>

<li class="nav-item">
<a class="nav-link" href="registrasi.php">Registrasi</a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="logout.php">LogOut</a>
</li>
</ul>
<!-- <form class="form-inline">
<input class="form-control mr-sm-2 col-md-7 col-lg-7 " type="search" placeholder="Search">
<button class="btn btn-outline-success my-2 my-sm-0  col-md-4" type="submit">Search</button>
</form> -->
<h4 class="putih"><?php echo "Hallo! ".$nama; ?></h4>
</div>
</nav>

<!-- Nav -->

<!-- Wallpapaer -->
    <div class="col-12 wall" >
      <div class="row no-gutters">
        <div class="col-4 offset-1 motto" >
          <h1>Temukan Laptop
          <br>Impian Anda</h1>
        </div>
      </div>
    </div>
<!-- Wallpapaer -->


<div class="col-12" >
  <div class="row no-gutters slogan">
    <div class="col-lg-4 col-md-12"><div class="row no-gutters ">
      <div class="col-md-3 col-lg-2"><span class="icon-truck"></span></div><div class="col-md-10"><h5>FREE SHIPPING</h5><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p></div></div>
      </div>

      <div class="col-lg-4 col-md-12"><div class="row no-gutters ">
        <div class="col-md-3 col-lg-2"><span class="icon-shopping-cart"></span></div><div class="col-md-10"><h5>FREE RETURNS</h5><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p></div></div>
        </div>

        <div class="col-lg-4 col-md-12"><div class="row no-gutters ">
          <div class="col-md-3 col-lg-2"><span class="icon-shopping-cart"></span></div><div class="col-md-10"><h5>CUSTOMER SUPPORT</h5><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p></div></div>
          </div>

  </div>

</div>
  <hr color="white">
<!-- Content -->
<div class="container">
  <div class="row">
    <?php
    $sql="select * from data_barang";
    $hsl=mysqli_query($konek,$sql);
    $row=mysqli_fetch_row($hsl);
    while ($row=mysqli_fetch_row($hsl))
    {
      echo "    <div class='col-lg-3 col-sm-9 col-md-4 col-9 kotak figure-img img-fluid img-thumbnail shadow'>
          <div class='row no-gutters '>
            <div class='col-12'><img src='barang/image/$row[2]' class='foto ' ></div>
            <div class='col-12'><h3>$row[1]</h3></div>
            <div class='col-12'><p>$row[3]</p></div>
            <div class='col-12'><a href='beli.php?kode=$row[0]&user=$user' class='btn btn-outline-dark'><b>Pesan</b></a></div>
          </div>
            </div>";
    }
     ?>




</div>
</div>

<footer class="bawah">

</footer>





  <script src="js/fontawesome.min.js"></script>
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/classie.js"></script>
</body>

</html>
