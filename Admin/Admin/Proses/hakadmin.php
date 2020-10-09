<html>

<head>
	<script src="../sweetalert2/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="../sweetalert2/dist/sweetalert2.min.css">

</head>

<body>
	<?php
	session_start();

	//cek apakah user sudah login
	if (!isset($_SESSION['nama_pegawai'])) {
		echo "<script type='text/javascript'>
			Swal.fire({
				type: 'error',
				title: 'Maaf',
				text: 'Anda belum login, jadi jangan dipaksain masuk asuu!'
				});
				</script>";
		echo "<meta http-equiv='refresh' content='2; url=../../index.php'>"; //jika bukan admin jangan lanjut
		exit();
	}

	//cek level user
	if ($_SESSION['level'] != "admin") {
		echo "<script type='text/javascript'>
	Swal.fire({
		type: 'error',
		title: 'Maaf',
		text: 'Mohon maaf, silahkan login sebagai Admin terlebih dahulu!'
		});
		</script>";
		echo "<meta http-equiv='refresh' content='2; url=../../index.php'>"; //jika bukan admin jangan lanjut
		exit();
	}
	?>
</body>

</html>