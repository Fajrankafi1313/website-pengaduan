<!DOCTYPE html>
<html>
<body>
Welcome <?php echo $_POST["nama"]; ?><br>
Your email address is: <?php echo $_POST["no_hp"]; ?>



<?php
include("koneksi.php");

//proses penangkapan data form
$nama=$_POST["nama"];
$no_hp=$_POST["no_hp"];
$judul_laporan=$_POST["judul_laporan"];
$isi_laporan=$_POST["isi_laporan"];
$lampiran=$_POST["lampiran"];

$nama_file=$_FILES["lampiran"]["name"];
$file_upload=$_FILES["lampiran"]["tmp_name"];
$direktori="lampiran/";

move_uploaded_file($file_upload,$direktori.$nama_file);

//proses simpan ke database
$sql = "INSERT INTO aduan (nama, telp, judul, detil, lampiran)
VALUES ('$nama', '$no_hp', '$judul_laporan', '$isi_laporan', '$nama_file')";

if ($conn->query($sql) === TRUE) {
  echo "
  <script>
  alert('Pengaduan berhasil di kirim');
  window.location.href = 'daftar_pengaduan.php';
  </script>";
  
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




?>
</body>
</html>