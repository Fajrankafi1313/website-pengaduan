<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PENGADUAN MASYARAKAT SLAWI KULON</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="">PENGADUAN MASYARAKAT SLAWI KULON</a></h1>
			<ul>
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="service.php">PENGADUAN</a></li>
				<li><a href="daftar_pengaduan.php">DAFTAR PENGADUAN</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>SELAMAT DATANG DI WEBSITE PENGADUAN MASYARAKAT</h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Website pengaduan masyarakat merupakan sebuah website dimana masyarakat Slawi Kulon dapat melakukan berbagai pengaduan. Kami memberikan fasilitas bagi warga desa Slawi Kulon untuk melakukan pengaduan di lingkungan desa Slawi Kulon. </p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			
			
		</div>
	</section>

	<!-- footer -->
	<footer>
	<?php
		include("koneksi.php");
		$sql="select * from kritik";
            $data=$conn->query($sql);
		?>

		<div class="title">
		<h1>Kritik dan saran</h1>
		</div>
		<div class="form">
		<form action="kritik.php" id="form-contact" method="POST">
		<input type="text" placeholder="Masukkan nama anda" id="nama"
		name="nama"/>
		<br />
		<input type="email" placeholder="Masukkan no hp anda" id="no" name="no_hp"/>
		<br />
		<input type="text" placeholder="Apa kritik dan saran anda" id=
		"pesan" name="pesan"/><br />
		<input type="submit" id="kirim" value="KIRIM" name="kirim" />
		</form>
		</div>

		<div class="form">
		<div class="container">
		<h3>Cookie</h3>
		<form action="" method="POST">
		<input type="text" name="cokinama"><br>
		<input type="submit" name="submit" value="kirim"><br>
		</form>
		</div>
		</div>
		
		</div>
		</div>
		</div>
		<div class="container">
			<small>21090115_Fajran Al Kafi</small>
		
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</html>