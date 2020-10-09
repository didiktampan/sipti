<?php
include '../../../koneksi.php';
$id_video = $_GET['id_video'];

$query = "DELETE FROM video WHERE id_video = $id_video";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../detail.php'</script>";
}
?>