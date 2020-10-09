<?php
include '../../../koneksi.php';
$id_petugas = $_GET['id_petugas'];

$query = "DELETE FROM petugas WHERE id_petugas = $id_petugas";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../detail.php'</script>";
}
?>