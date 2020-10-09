<?php
include '../../../koneksi.php';
$id_berita = $_GET['id_berita'];

$query = "DELETE FROM berita WHERE id_berita = $id_berita";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../detail.php'</script>";
}
?>