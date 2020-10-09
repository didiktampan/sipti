<?php
include '../../../koneksi.php';
$id_barang = $_GET['id_barang'];


$perintah = "DELETE from barang where id_barang = '$id_barang'";

$result = mysqli_query($conn, $perintah);

	if ($result) {
			echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../index.php'</script>";
}

?>