<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PENGADUAN MASYARAKAT SLAWI KULON</title>
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
			<h1><a href="index.php">PENGADUAN MASYARAKAT SLAWI KULON</a></h1>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="service.php">PENGADUAN</a></li>
				<li class="active"><a href="daftar_pengaduan.php">DAFTAR PENGADUAN</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Daftar Pengaduan</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>DAFTAR PENGADUAN</h3>
			<div class="row">
				<div class="col-md-12">
					<form action="" method="GET">
					Cari data :<input type="text" name="cari"><input type="submit" value="Cari">
					</form>
					<table border=1>
						<thead>
							<tr>
								<th>No</th>
                                <th>Nama</th>
								<th>No_HP</th>
                                <th>Judul Laporan</th>
                                <th>Isi Laporan</th>
                                <th>Lampiran</th>
								<th>Aksi</th>
							</tr>
                            <?php
                            include("koneksi.php");
							if(isset($_GET["cari"]))
							{
								$sql="select * from aduan where nama like '%$_GET[cari]%'";
							}
							else
							{
                            	$sql="select * from aduan";
							}
                            $data=$conn->query($sql);
                            $no=0;
                            while($row = $data->fetch_assoc()) 
                            {
                                $no++;
								
                            ?>
                            <tr>
								<td><?php echo $no;?></td>
                                <td><?php echo $row['nama'];?></td>
								<td><?php echo $row['telp'];?></td>
                                <td><?php echo $row['judul'];?></td>
                                <td><?php echo $row['detil'];?></td>
                                <td><?php echo "<a href='lampiran/$row[lampiran]' target='_blank'>".$row['lampiran']."</a>";?></a></td>
								<td><a href="form_edit.php?id_aduan=<?php echo $row['id'];?>">edit</a> | <a href="hapus.php?id_aduan=<?php echo $row['id'];?>">hapus</a></td>
							</tr>
                            <?php
                            }
                            ?>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
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
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>