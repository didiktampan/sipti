<?php 
include '../../koneksi.php';
$id_berita = $_POST['id_berita'];
$id_user = $_POST['id_user']; 
$nama = $_POST['nama']; 
$isi = $_POST['isi'];
$tanggal = $_POST['tanggal'];
$gambar = $_POST['gambar'];

$query = "INSERT INTO komentar (id_berita, id_user, nama, isi, tanggal, gambar) VALUES ('$id_berita', '$id_user','$nama','$isi', '$tanggal', '$gambar')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../berita_detail.php?id_berita=$id_berita&id_user=$id_user'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../berita_detail.php?id_berita=$id_berita&id_user=$id_user'</script>";
}
?>