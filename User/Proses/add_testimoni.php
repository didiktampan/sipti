<?php 
include '../../koneksi.php';
$id_user = $_POST['id_user'];
$id_wisata = $_POST['id_wisata']; 
$nama_lengkap = $_POST['nama_lengkap']; 
$pekerjaan = $_POST['pekerjaan'];
$created = date("Y-m-d H:i:s");
$isi = $_POST['isi'];

$query = "INSERT INTO testimoni (id_user, id_wisata, nama_lengkap, pekerjaan, created, isi) VALUES ('$id_user', '$id_wisata','$nama_lengkap','$pekerjaan', '$created', '$isi')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../detail.php?id_wisata=$id_wisata&id_user=$id_user'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../detail.php?id_wisata=$id_wisata&id_user=$id_user'</script>";
}
?>