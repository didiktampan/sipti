<html>
<head>
	<script src="../Admin/sweetalert2/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="../Admin/sweetalert2/dist/sweetalert2.min.css">

</head>
<body>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "pendakian");

	session_start();
	unset($_SESSION["username"]);
	echo "<script type='text/javascript'>
	localStorage.removeItem('id_user');
	localStorage.removeItem('username');
	Swal.fire({
		type: 'success',
		title: 'Berhasil Keluar',
		text: 'Semoga harimu menyenangkan'
		});
		</script>";
		session_destroy();

		echo "<meta http-equiv='refresh' content='2; url=../../index.php'>";
		exit;

		?>
	</body>
	</html>