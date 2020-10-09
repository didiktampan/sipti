<?php 
	include '../koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "UPDATE user SET password = '$password' WHERE username = '$username'";
	$exe = mysqli_query($conn,$query);
	if ($exe) {
		echo "<script>alert('Ubah Data Berhasil');
			window.location.href='../index.php'</script>";
	}else{
		echo "<script>alert('Ubah Data Gagal');
			window.location.href='reset_password.php'</script>";
	}
 ?>