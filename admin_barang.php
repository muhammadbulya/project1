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
	 ?>









<!-- Content -->
<div class="container mar">
<div class="row">
  <div class="col-2 tab">Kode Barang</div>
  <div class="col-3 tab">Nama Barang</div>
  <div class="col-3 tab">Dekripsi</div>
  <div class="col-2 tab">Jumlah</div>
  <div class="col-2 tab">Action</div>
</div>


<?php
  $query="select * from data_barang ";
  $hsl=mysqli_query($konek,$query);
  while ($row=mysqli_fetch_row($hsl))
  {
  echo "<div class='row'>
      <div class='col-2 tab'>$row[0] </div>
      <div class='col-3 tab'>$row[1]</div>
      <div class='col-3 tab'>$row[3] </div>
      <div class='col-2 tab'>$row[5] </div>
      <div class='col-2 tab'><a href='del_barang_admin.php?kode=$row[0]'>Hapus</a>
      <a href='edit.php?kode=$row[0]'>Edit</a>
      </div>
      </div>
    ";
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
