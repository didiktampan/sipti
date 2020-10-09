<?php 
include '../../../koneksi.php';
$id_buku = $_POST['judul']; 
$id_peminjam = $_POST['nama']; 
$jumlah_buku = $_POST['jumlah_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$status = $_POST['status']; 

$query = "INSERT INTO transaksi (id, id_buku, id_peminjam, jumlah_buku, tgl_pinjam, status) VALUES (null,'$id_buku','$id_peminjam','$jumlah_buku','$tgl_pinjam','$status')";
	// echo $query;
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../data_peminjaman.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../data_peminjaman.php'</script>";
}
?>