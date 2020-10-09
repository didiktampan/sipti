<?php 
include '../../../koneksi.php';
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap']; 
$password = $_POST['password']; 
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$level = $_POST['level'];
$gambar	= $_FILES['gambar']['name'];		
move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../../User/img/".$_FILES['gambar']['name']);

$query = "INSERT INTO user (username, nama_lengkap, password, email, no_hp, level, gambar) VALUES ('$username', '$nama_lengkap','$password','$email','$no_hp', '$level', '$gambar')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../index.php'</script>";
}
?>