<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Shop</title>
	<link rel="shortcut icon" href="../favicon.ico">
	<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" /> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />

</head>

<body>
	<?php
	include 'script/e.php';
	 ?>
	<div class="container">
		<header class="codrops-header">

			<h1>Mac Online Shop<span>Beli Laptop Murah Dan Berkualitas Di Mac OS AJA!!!</span></h1>
		</header>

		<!-- Dipakai -->
		<section class="col-12 col-lg-8 offset-lg-2 content bgcolor-6">

				<h2 class="black">Register Your Account</h2>

			<form class="" action="registrasi.php" method="post" autocomplete="off">
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="text" name="nama" required>
					<label class="input__label input__label--juro">
						<span class="input__label-content input__label-content--juro">Nama Lengkap</span>
					</label>
				</span>
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="text" name="usr_nm" required>
					<label class="input__label input__label--juro">
						<span class="input__label-content input__label-content--juro">Username</span>
					</label>
				</span>
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="password" name="password" required>
					<label class="input__label input__label--juro">
						<span class="input__label-content input__label-content--juro">Password</span>
					</label>
				</span>
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="text" name="alamat" required>
					<label class="input__label input__label--juro">
						<span class="input__label-content input__label-content--juro">Alamat</span>
					</label>
				</span>
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="text" name="no_hp" required>
					<label class="input__label input__label--juro">
						<span class="input__label-content input__label-content--juro">No Hp</span>
					</label>
				</span>

				<span class="input input--juro">
					<button type="submit" name="btn" class="btn btn-success">Registrasi</button>
				</span>
			</form>
		</section>
		<?php
	  $btn=$_POST['btn'];
	  if (isset($btn)) {
	    $nm=$_POST['nama'];
			$usr_nm=$_POST['usr_nm'];
			$pass=$_POST['password'];
			$alamat=$_POST['alamat'];
	    $no_hp=$_POST['no_hp'];

			$cek="select * from customer where usr_nm='$usr_nm'";
			$hsl=mysqli_query($konek,$tampil);
			$num=mysqli_num_rows($hsl);
			if ($num==0) {
						$sql="insert into customer (nm,usr_nm,pass,alamat,no_hp) values ('$nm','$usr_nm','$pass','$alamat','$no_hp')";
				    $hasil=mysqli_query($konek,$sql);
				    if ($hasil) {
				      echo "<script language='Javascript'>
				      (window.alert('Registrasi Berhasil'))
				      location.href='login.php'
				      </script>";

				    }else {
				      echo "<script language='Javascript'>
				      (window.alert('Registrasi Tidak Berhasil'))
				      location.href='registrasi.php'
				      </script>";
				    }
			}else {
			echo "<script language='Javascript'>
			(window.alert('Data Sudah ada maka Tidak Disimpan'))
			location.href='registrasi.php'
			</script>";
			}

	  } ?>



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

			[].slice.call(document.querySelectorAll('input.input__field')).forEach(function(inputEl) {
				// in case the input is already filled..
				if (inputEl.value.trim() !== '') {
					classie.add(inputEl.parentNode, 'input--filled');
				}

				// events:
				inputEl.addEventListener('focus', onInputFocus);
				inputEl.addEventListener('blur', onInputBlur);
			});

			function onInputFocus(ev) {
				classie.add(ev.target.parentNode, 'input--filled');
			}

			function onInputBlur(ev) {
				if (ev.target.value.trim() === '') {
					classie.remove(ev.target.parentNode, 'input--filled');
				}
			}
		})();
	</script>
</body>

</html>
