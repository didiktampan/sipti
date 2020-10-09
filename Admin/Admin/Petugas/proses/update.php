<?php 
include '../../../koneksi.php';
$id_petugas = $_POST['id_petugas'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat']; 
$tempat_lahir = $_POST['tempat_lahir']; 
$tgl_lahir = $_POST['tgl_lahir'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];

$query = "UPDATE petugas SET nama = '$nama', alamat = '$alamat', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', no_hp = '$no_hp', jenis_kelamin = '$jenis_kelamin', agama = '$agama' WHERE id_petugas = $id_petugas";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>