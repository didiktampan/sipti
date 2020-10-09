<?php
include '../../../koneksi.php';
$id_wisata = $_GET['id_wisata'];

$query = "DELETE FROM wisata WHERE id_wisata = $id_wisata";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../detail.php'</script>";
}
?>