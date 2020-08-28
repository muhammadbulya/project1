<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Text Input Effects | Set 1</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	</head>
	<body>
		<?php
		include 'script/e.php';
		 ?>
		<div class="container">
			<header class="codrops-header">
				<h1>Text Input Effects <span>Simple ideas for enhancing text input interactions</span></h1>
				<nav class="codrops-demos">
				</nav>
			</header>

			<section class="content bgcolor-3 col-12">
				<h2>Isi Data Barang</h2>
				<form class="" action="isi_brng.php" method="post" autocomplete="off">
					<div class="col-lg-6 offset-lg-3 col-12">
						<span class="input input--kyo">
							<input class="input__field input__field--kyo" type="text" name="kd_brg" required>
							<label class="input__label input__label--kyo">
								<span class="input__label-content input__label-content--kyo">Masukkan Kode Barang</span>
							</label>
						</span>
					</div>
					<div class="col-lg-6 offset-lg-3 col-12">
						<span class="input input--kyo">
							<input class="input__field input__field--kyo" type="text" name="nm_brg" required>
							<label class="input__label input__label--kyo" >
								<span class="input__label-content input__label-content--kyo">Masukkan Nama Barang</span>
							</label>
						</span>
					</div>
					<div class="col-lg-6 offset-lg-3 col-12">
						<span class="input input--kyo">
							<input class="input__field input__field--kyo" type="text" name="hrg" required>
							<label class="input__label input__label--kyo">
								<span class="input__label-content input__label-content--kyo">Masukkan Harga Barang</span>
							</label>
						</span>
					</div>
					<div class="col-lg-6 offset-lg-3 col-12">
						<span class="input input--kyo">
							<input class="input__field input__field--kyo" type="text" name="image" required>
							<label class="input__label input__label--kyo">
								<span class="input__label-content input__label-content--kyo">URL Image</span>
							</label>
						</span>
					</div>
					<div class="col-lg-6 offset-lg-3 col-12">
						<span class="input input--kyo">
							<input class="input__field input__field--kyo" type="text" name="jumlah" required>
							<label class="input__label input__label--kyo">
								<span class="input__label-content input__label-content--kyo">Jumlah</span>
							</label>
						</span>
					</div>
					<span class="input input--juro">
						<button type="submit" name="btn" class="btn btn-outline-primary btn-lg">Simpan</button>
					</span>
				</form>


			</section>

					<?php
					$btn=$_POST['btn'];
				 if (isset($btn)) {
					 $kd_brg=$_POST['kd_brg'];
					 $nm_brg=$_POST['nm_brg'];
					 $hrg=$_POST['hrg'];
					 $image=$_POST['image'];
					 $jumlah=$_POST['jumlah'];

					 $cek="select * from data_barang where kd_brg='$kd_brg'";
					 $hsl=mysqli_query($konek,$tampil);
					 $num=mysqli_num_rows($hsl);
					 if ($num==0) {
								 $sql="insert into data_barang (kd_brg,nm_brg,hrg,image,jumlah) values ('$kd_brg','$nm_brg','$hrg','$image','$jumlah')";
								 $hasil=mysqli_query($konek,$sql);
								 if ($hasil) {
									 echo "<script language='Javascript'>
									 (window.alert('Berhasil Disimpan'))
									 location.href='page/index.php'
									 </script>";

								 }else {
									 echo "<script language='Javascript'>
									 (window.alert('Tidak Berhasil Disimpan'))
									 location.href='isi_brng.php'
									 </script>";
								 }
					 }else {
					 echo "<script language='Javascript'>
					 (window.alert('Kode Barang Sudah ada maka Tidak Disimpan'))
					 location.href='isi_brng.php'
					 </script>";
					 }

				 }



					 ?>
			<!-- Related demos -->
			<section class="content content--related">
				<p>If you enjoyed this demo you might also like:</p>

					<img class="media-item__img" src="img/related/MinimalForm.png" />
					<h3 class="media-item__title">Minimal Form Interface</h3>
				</a>

					<img class="media-item__img" src="img/related/SelectInspiration.png" />
					<h3 class="media-item__title">Custom Select Elements</h3>
				</a>
			</section>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
	</body>
</html>
