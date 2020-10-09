<?php
include '../../../koneksi.php';
$id_penulis = $_GET['id_penulis'];

$query = "DELETE FROM penulis WHERE id_penulis = $id_penulis";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../detail.php'</script>";
}
?>