<?php 
include '../../../koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat']; 
$tempat_lahir = $_POST['tempat_lahir']; 
$tgl_lahir = $_POST['tgl_lahir'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];

$query = "INSERT INTO petugas (nama, alamat, tempat_lahir, tgl_lahir, no_hp, jenis_kelamin, agama) VALUES ('$nama', '$alamat','$tempat_lahir','$tgl_lahir','$no_hp', '$jenis_kelamin', '$agama')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../index.php'</script>";
}
?>