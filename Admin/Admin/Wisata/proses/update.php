<?php 
include '../../../koneksi.php';
$id_wisata = $_POST['id_wisata'];
$id_kategori = $_POST['id_kategori'];
$provinsi = $_POST['provinsi']; 
$nama_wisata = $_POST['nama_wisata']; 
$alamat = $_POST['alamat'];
$ket_singkat = $_POST['ket_singkat'];
$ket_lengkap = $_POST['ket_lengkap'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$gambar = $_FILES['gambar']['name'];		
move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../../img/Gunung/".$_FILES['gambar']['name']);

$query = "UPDATE wisata SET id_kategori = '$id_kategori', provinsi = '$provinsi', nama_wisata = '$nama_wisata', alamat = '$alamat', ket_singkat = '$ket_singkat', ket_lengkap = '$ket_lengkap', harga = '$harga', stok = '$stok', gambar = '$gambar' WHERE id_wisata = $id_wisata";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>