<html>
<head>
	<script src="../Admin/sweetalert2/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="../Admin/sweetalert2/dist/sweetalert2.min.css">

</head>
<body>
	<?php 
// mengaktifkan session php
	session_start();

// menghubungkan dengan koneksi
	include '../koneksi.php';

// menangkap data yang dikirim dari form
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION["last_login_time"] = time();

// menyeleksi data admin dengan username dan password yang sesuai
	$sql = mysqli_query($conn,"SELECT * FROM m_pegawai WHERE username ='$username' AND password ='$password'");
	$data = mysqli_fetch_array($sql);
	$level = $data['level'];
	$nama_pegawai = $data['nama_pegawai'];
	$id_user = $data['id_user'];
	$username1 = $data['username'];

	$cek = mysqli_num_rows($sql);
// menghitung jumlah data yang ditemukan
	if($cek > 0) {
		$_SESSION['nama_pegawai']=$nama_pegawai;
		$_SESSION['level']=$level;
		if ($level=='admin') {
			echo "<script type='text/javascript'>
			localStorage.setItem('id_user', $id_user);
			localStorage.setItem('username', '$username1'); 
			Swal.fire({
				type: 'success',
				title: 'Berhasil',
				text: 'Selamat datang '+'$nama_pegawai'
				});
				</script>";
				echo "<meta http-equiv='refresh' content='2; url=../Admin/Dashboard/dashboard.php?id_user=$id_user'>";
			}
			else {
				echo "<script type='text/javascript'>
				localStorage.setItem('id_user', $id_user);
				localStorage.setItem('username', '$username1'); 
				Swal.fire({
					type: 'success',
					title: 'Berhasil',
					text: 'Selamat datang '+'$nama_lengkap'
					});
					</script>";				
					echo "<meta http-equiv='refresh' content='2; url=../../User/index.php?id_user=$id_user'>";		
				}
			} else {
				echo "<script type='text/javascript'>
				Swal.fire({
					type: 'error',
					title: 'Maaf',
					text: 'Nama pengguna serta kata sandi yang anda masukkan tidak cocok euy!'
					});
					</script>";
					echo "<meta http-equiv='refresh' content='3; url=../index.php'>";
				}
				?>
			</body>
			</html>