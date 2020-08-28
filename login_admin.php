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

			<h1>Mac OS <span>Mac Online Shop</span></h1>
		</header>

		<!-- Dipakai -->

		<section class="col-12 col-lg-8 offset-lg-2 content bgcolor-6">
			<h2 class="black">Login</h2>
			<form class="" action="login_admin.php" method="post" >
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="text" name="usr_nm">
					<label class="input__label input__label--juro" for="input-30">
						<span class="input__label-content input__label-content--juro">Username</span>
					</label>
				</span>
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="password" name="password">
					<label class="input__label input__label--juro" for="input-30">
						<span class="input__label-content input__label-content--juro">Password</span>
					</label>
				</span>
				<span class="input input--juro">
					<button type="submit" name="btn" class="btn btn-success">Masuk</button>
				</span>
				<span class="input input--juro">
					<a href="registrasi_admin.php" class="black ">Buat akun</a>
				</span>

			</form>
		</section>
<?php
$btn=$_POST['btn'];
if (isset($btn)) {
	$usr_nm=$_POST['usr_nm'];
	$pass=$_POST['password'];
	$tampil="select * from admin where usr='$usr_nm' and pass='$pass'";

	////////////////	untuk bedakan salah password dan username		////////////////
	// $tampil1="select * from customer where pass='$pass'";
	// $hsl1=mysqli_query($konek,$tampil1);
	// $num1=mysqli_num_rows($hsl1);
	$hsl=mysqli_query($konek,$tampil);
	$num=mysqli_num_rows($hsl);
	if ($num>0) {
		// if ($num1>0) {
			echo "<script language='Javascript'>
			(window.alert('Login Berhasil'))
			location.href='admin.php'
			</script>";
		// }else {
		// 	echo "<script language='Javascript'>
		// 	(window.alert('Username atau Password Salah'))
		// 	location.href='login.php'
		// 	</script>";
		// }

	}else {
		echo "<script language='Javascript'>
		(window.alert('Username atau Password Salah'))
		location.href='login_admin.php'
		</script>";
	}
}
 ?>


		<!-- Related demos -->
		<section class="content ">

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
