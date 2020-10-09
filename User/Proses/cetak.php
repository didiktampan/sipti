<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
<body>
	<p style="text-align: justify;"><img src="../../img/LogoG.png" style="width: 60px; float: left;">
	&nbsp;<b>Perusahaan Peonpegu</b>
	<br>&nbsp;Telepon: 0895395333224
	<br>&nbsp;Jalan Kalijaga No.17</p>
	<hr>
	<b><hr></b>
	<center><h1>Laporan Transaksi</h1></center>
	<?php
	include "../../koneksi.php";
	?>
	<table border="1" align="center">
		<thead>
			<tr role="row">
				<th>No</th>
				<th>Nama Lengkap</th>
				<th>Email</th>
				<th>Nomor Telepon</th>
				<th>Nama Wisata</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Tanggal Pesan</th>
				<th>Total Harga</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$query="SELECT * FROM transaksi WHERE status = 2";
			$exe = mysqli_query($conn,$query);
			while ($row = mysqli_fetch_array($exe)) {

				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row['nama_lengkap']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['no_hp']; ?></td>
					<td><?php echo $row['nama_wisata']; ?></td>
					<td><?php echo $row['harga']; ?></td>
					<td><?php echo $row['jumlah_pesan']; ?></td>
					<td><?php echo $row['tanggal_pesan']; ?></td>
					<td><?php echo $row['total_harga']; ?></td>
					<td>
						<?php 
						if ($row['status'] == 1) {
							echo "<span>Belum Lunas</span>";
						}else{
							echo "<span>Lunas</span>";
						}
						?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
<script type="text/javascript">
	window.print();
</script>  
</html>