<?php
include '../../../koneksi.php';
$id = $_GET['id'];

$query = "DELETE FROM transaksi WHERE id = $id";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../data_pengembalian.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../data_pengembalian.php'</script>";
}
?>