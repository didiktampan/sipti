<?php 
include '../../../koneksi.php';
$id_penulis = $_POST['id_penulis'];
$nama_penulis = $_POST['nama_penulis'];
$pekerjaan = $_POST['pekerjaan']; 
$tentang = $_POST['tentang']; 
$gambar	= $_FILES['gambar']['name'];		
move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../../img/Penulis/".$_FILES['gambar']['name']);

$query = "UPDATE penulis SET nama_penulis = '$nama_penulis', pekerjaan = '$pekerjaan', tentang = '$tentang', gambar = '$gambar' WHERE id_penulis = $id_penulis";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>