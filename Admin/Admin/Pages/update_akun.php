<?php 
	include '../../koneksi.php';
	$id_user = $_POST['id_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$level = $_POST['level'];
	$bio = $_POST['bio'];

	$query = "UPDATE user SET nama = '$nama', username = '$username', password = '$password', email = '$email', level = '$level', bio = '$bio' WHERE id_user = $id_user";
	$exe = mysqli_query($conn,$query);
	if ($exe) {
		echo "<script>alert('Ubah Data Berhasil');
			window.location.href='akun.php?id_user=$id_user'</script>";
	}else{
		echo "<script>alert('Ubah Data Gagal');
			window.location.href='akun.php'</script>";
	}
 ?>