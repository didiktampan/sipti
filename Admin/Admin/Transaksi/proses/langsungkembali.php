<?php 
include '../../../koneksi.php';
$id = $_POST['transid'];
$id_buku = $_POST['judul'];
$tgl_kembali = $_POST['tgl_kembali'];
$status = $_POST['status'];

$query = "UPDATE transaksi SET id_buku = '$id_buku',tgl_kembali = '$tgl_kembali',status = '$status' WHERE id = $id";

$exe = mysqli_query($conn,$query);

if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../data_pengembalian.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../kembali.php'</script>";
}
?>