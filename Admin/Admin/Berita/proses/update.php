<?php 
include '../../../koneksi.php';
$id_user = $_POST['id_user'];
$id_berita = $_POST['id_berita'];
$penulis = $_POST['penulis']; 
$judul = $_POST['judul']; 
$ket_singkat = $_POST['ket_singkat'];
$ket_singkat2 = $_POST['ket_singkat2'];
$ket_lengkap = $_POST['ket_lengkap'];
$tanggal = $_POST['tanggal'];
$quotes = $_POST['quotes'];
$gambar	= $_FILES['gambar']['name'];		
move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../../img/Berita/".$_FILES['gambar']['name']);

$query = "UPDATE berita SET id_user = '$id_user', penulis = '$penulis', judul = '$judul', ket_singkat = '$ket_singkat', ket_singkat2 = '$ket_singkat2', ket_lengkap = '$ket_lengkap', tanggal = '$tanggal', quotes = '$quotes', gambar = '$gambar' WHERE id_berita = $id_berita";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>