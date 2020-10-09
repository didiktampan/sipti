<?php 
include '../../../koneksi.php';
$id_video = $_POST['id_video'];
$nama = $_POST['nama'];
$tanggal = date("Y-m-d H:i:s"); 
$deskripsi = $_POST['deskripsi']; 
$video 		= $_FILES['video']['name'];		
move_uploaded_file($_FILES['video']['tmp_name'],"../file/".$_FILES['video']['name']);	

$query = "UPDATE video SET nama = '$nama', tanggal = '$tanggal', deskripsi = '$deskripsi', video = '$video' WHERE id_video = $id_video";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>