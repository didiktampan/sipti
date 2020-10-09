<?php
include '../../../koneksi.php';
$id_user = $_GET['id_user'];

$query = "DELETE FROM user WHERE id_user = $id_user";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../index.php'</script>";
}
?>