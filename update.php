<!DOCTYPE html>
<html>
<body>

<?php
include("koneksi.php");

//proses penangkapan data form
$id=$_POST["id_aduan"];
$nama=$_POST["nama"];
$no_hp=$_POST["no_hp"];
$judul_laporan=$_POST["judul_laporan"];
$isi_laporan=$_POST["isi_laporan"];
$lampiran=$_FILES["lampiran"]["name"];

$nama_file=$_FILES["lampiran"]["name"];
$file_upload=$_FILES["lampiran"]["tmp_name"];
$direktori="lampiran/";

move_uploaded_file($file_upload,$direktori.$nama_file);

//proses update ke database
$sql = "UPDATE aduan set  nama='$nama', telp='$no_hp', judul='$judul_laporan', detil='$isi_laporan', lampiran='$lampiran' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "
  <script>
  alert('Data berhasil diupdate');
  window.location.href = 'daftar_pengaduan.php';
  </script>";
  
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>