<?php 
include '../../../koneksi.php';
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap']; 
$password = $_POST['password']; 
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$level = $_POST['level'];
$gambar	= $_FILES['gambar']['name'];		
move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../../User/img/".$_FILES['gambar']['name']);

$query = "UPDATE user SET username = '$username', nama_lengkap = '$nama_lengkap', password = '$password', email = '$email', no_hp = '$no_hp', level = '$level', gambar = '$gambar' WHERE id_user = $id_user";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>