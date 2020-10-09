<?php 
include '../../../koneksi.php';
$id_user = $_POST['id_user'];
$penulis = $_POST['penulis']; 
$judul = $_POST['judul']; 
$ket_singkat = $_POST['ket_singkat'];
$ket_singkat2 = $_POST['ket_singkat2'];
$ket_lengkap = $_POST['ket_lengkap'];
$tanggal = $_POST['tanggal'];
$quotes = $_POST['quotes'];
$gambar	= $_FILES['gambar']['name'];		
move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../../img/Berita/".$_FILES['gambar']['name']);

$query = "INSERT INTO berita (id_user, penulis, judul, ket_singkat, ket_singkat2, ket_lengkap, tanggal, quotes, gambar) VALUES ('$id_user', '$penulis','$judul','$ket_singkat','$ket_singkat2', '$ket_lengkap', '$tanggal', '$quotes', '$gambar')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../index.php'</script>";
}
?>