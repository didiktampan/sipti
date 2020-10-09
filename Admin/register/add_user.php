<?php 
include '../koneksi.php';
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$level = "user";
$email = $_POST['email'];
$ulang_password = $_POST['ulang_password'];
if($password==$ulang_password) {
	$query = "INSERT INTO user (nama_lengkap, username, password, no_hp, level, email) VALUES ('$nama_lengkap','$username','$ulang_password', '$no_hp', '$level', '$email')";
	//echo $query
	$exe = mysqli_query($conn,$query);
	if ($exe) {
		echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
	}else{
		echo "<script>alert('Tambah Data Gagal');window.location.href='registrasi.php'</script>";
	}
}else {
	echo "<script>alert('Password tidak sama');window.location.href='registrasi.php'</script>";
}
?>