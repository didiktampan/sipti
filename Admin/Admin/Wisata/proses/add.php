<?php 
include '../../../koneksi.php';
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

$query = "INSERT INTO wisata (id_kategori, provinsi, nama_wisata, alamat, ket_singkat, ket_lengkap, harga, stok, gambar) VALUES ('$id_kategori', '$provinsi','$nama_wisata','$alamat', '$ket_singkat', '$ket_lengkap', '$harga', ' $stok', '$gambar')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../detail.php'</script>";
}
?>