<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">

  <title>Belajar Bootstrap</title>

</head>

<body>
  <div class="container">
    <?php
    $konek= mysqli_connect("localhost","root","","shop");
    if(!$konek)
    echo "Konek ke Data Base Gagal";
     ?>
  </div>

  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
