<?php 
include '../../../koneksi.php';
$nama = $_POST['nama'];
$tanggal = date("Y-m-d H:i:s");
$deskripsi = $_POST['deskripsi']; 
$video 		= $_FILES['video']['name'];		
move_uploaded_file($_FILES['video']['tmp_name'],"../file/".$_FILES['video']['name']);

$query = "INSERT INTO video (nama, tanggal, deskripsi, video) VALUES ('$nama', '$tanggal','$deskripsi','$video')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../detail.php'</script>";
}
?>