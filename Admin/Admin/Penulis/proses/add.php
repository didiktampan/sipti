<?php 
include '../../../koneksi.php';
$nama_penulis = $_POST['nama_penulis'];
$pekerjaan = $_POST['pekerjaan']; 
$tentang = $_POST['tentang']; 
$gambar	= $_FILES['gambar']['name'];		
move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../../img/Penulis/".$_FILES['gambar']['name']);

$query = "INSERT INTO penulis (nama_penulis, pekerjaan, tentang, gambar) VALUES ('$nama_penulis', '$pekerjaan','$tentang','$gambar')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../index.php'</script>";
}
?>