<!DOCTYPE html>
<html>
<body>

<?php
include("koneksi.php");

//proses penangkapan data form
$id=$_GET["id_aduan"];

//proses hapus ke database
$sql = "DELETE FROM aduan WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "
  <script>
  alert('Data berhasil dihapus');
  window.location.href = 'daftar_pengaduan.php';
  </script>";
  
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>