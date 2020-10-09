<?php 
include '../../../koneksi.php';
$id = $_POST['transid'];
$id_buku = $_POST['judul'];
$id_peminjam = $_POST['nama'];
$jumlah_buku = $_POST['jumlah_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$status = $_POST['status'];

$query = "UPDATE transaksi SET id_buku = '$id_buku',id_peminjam = '$id_peminjam',jumlah_buku = '$jumlah_buku',tgl_pinjam = '$tgl_pinjam',tgl_kembali = '$tgl_kembali',status = '$status' WHERE id = $id";
echo $id;

$exe = mysqli_query($conn,$query);

if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../data_pengembalian.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../update_pengembalian.php'</script>";
}
?>