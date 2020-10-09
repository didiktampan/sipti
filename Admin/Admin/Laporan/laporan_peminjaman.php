<?php
	//include "header_admin.php";
	include '../../koneksi.php';
?>
<style type="text/css">
				table.gridtable {
				font-family: verdana,arial,sans-serif;
				font-size:11px;
				color:#333333;
				border-width: 1px;
				border-color: #666666;
				border-collapse: collapse;
			}
			table.gridtable th {
				border-width: 1px;
				padding: 8px;
				border-style: solid;
				border-color: #666666;
				background-color: #006DCC;
				color:white;
			}
			table.gridtable td {
				border-width: 1px;
				padding: 8px;
				border-style: solid;
				border-color: #666666;
				background-color: #ffffff;
			}
</style>

<?php
if (isset($_POST['proses']))
 {
	$jenis_laporan=$_POST['pilihlaporan'];
	
	if($jenis_laporan=='pinjam')
	{
	echo "<br><center><h3>
				Rekap Laporan Peminjaman</h3></center><br>";
	echo '<table  class="gridtable" align="center">';
	echo '<tr>';
	echo '<th>No.</th>';
	echo '<th>Bulan</th>';
	echo '<th>Jenis Barang</th>';
	echo '<th>Jumlah Peminjaman</th>';
	echo '</tr>';
	
	$query = "select substring(p.tgl_pinjam,6,2) as bulan,m.nama_bulan, b.id_jenis, count(p.id_barang) as jumlah_peminjaman 
	from pinjam_kembali p inner join barang b on p.id_barang=b.id_barang
	inner join m_bulan m on substring(p.tgl_pinjam,6,2)=m.id_bulan
	group by substring(tgl_pinjam,6,2),b.id_jenis";
	$sql = mysqli_query($conn, $query);
	$no=1;
	while($data=mysqli_fetch_array($sql))
	{?>
		 <tr onmouseover="this.className='on'" onmouseout="this.className='out'">
		<td id="tbody"><?php echo $no;?></td>
		<td id="tbody"><?php 
		echo $data['nama_bulan'];
			
		?></td>
		<td id="tbody"><?php 
		if($data['id_jenis']=='LTP')
		{
			echo "Laptop";
		}
		else if($data['id_jenis']=='LCD')
		{
		echo "Viewer";
		}
		else if($data['id_jenis']=='HD_E')
		{
		echo "Eksternal Hardisk";
		}
		else if($data['id_jenis']=='PR')
		{
		echo "Printer";
		}
		else{
		echo "Lainnya";
		}
		
		?></td>
		<td id="tbody"><?php echo $data['jumlah_peminjaman']?></td>
	<?php	
		$no++;
		}
        ?>
   
	  </tr>	
	</table>
	<br>
	<?php
	$arrdatalaptop=array();
	$arrdataviewer=array();
	$arrdatahardisk=array();
	$arrdataprinter=array();
	$arrdatalainnya=array();
	$arrbulan = array (
			 0=>"01",
			 1=>"02",
			 2=>"03",
			 3=>"04",
			 4=>"05",
			 5=>"06",
			 6=>"07",
			 7=>"08",
			 8=>"09",
			 9=>"10",
			 10=>"11",
			 11=>"12",
			 );
		
	/*ambil data laptop*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_pinjam, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_peminjaman
		FROM pinjam_kembali p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_pinjam, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis = 'LTP'
		GROUP BY substring( p.tgl_pinjam, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{	/*echo $arrbulan[$kol];
			echo "<br>";
			echo $result['bulan'];
			echo "<br>";*/
			
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdatalaptop[$kol]=$result['jumlah_peminjaman'];
				break;
			}
			else
			{
				$arrdatalaptop[$kol]=0;
			//break;
			}
			
		}
		//echo $arrdatalaptop[$kol];
		//	echo "<br>";
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdatalaptop[$kol]=0;
		}
	}

	/*ambil data viewer*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_pinjam, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_peminjaman
		FROM pinjam_kembali p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_pinjam, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis = 'LCD'
		GROUP BY substring( p.tgl_pinjam, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{			
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdataviewer[$kol]=$result['jumlah_peminjaman'];
				break;
			}
			else
			{
				$arrdataviewer[$kol]=0;
			//break;
			}
			
		}
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdataviewer[$kol]=0;
		
		}
	}

	/*ambil data hardisk*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_pinjam, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_peminjaman
		FROM pinjam_kembali p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_pinjam, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis = 'HD_E'
		GROUP BY substring( p.tgl_pinjam, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{			
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdatahardisk[$kol]=$result['jumlah_peminjaman'];
				break;
			}
			else
			{
				$arrdatahardisk[$kol]=0;
			//break;
			}
			
		}
		
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdatahardisk[$kol]=0;
		
		}
	}

	/*ambil data printer*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_pinjam, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_peminjaman
		FROM pinjam_kembali p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_pinjam, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis = 'PR'
		GROUP BY substring( p.tgl_pinjam, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{			
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdataprinter[$kol]=$result['jumlah_peminjaman'];
				break;
			}
			else
			{
				$arrdataprinter[$kol]=0;
			//break;
			}
			
		}
		
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdataprinter[$kol]=0;
		
		}
	}

	/*ambil data lainnya*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_pinjam, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_peminjaman
		FROM pinjam_kembali p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_pinjam, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis <> 'HD_E' and b.id_jenis <> 'LTP' and b.id_jenis <> 'LCD' and b.id_jenis <> 'PR'
		GROUP BY substring( p.tgl_pinjam, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{			
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdatalainnya[$kol]=$result['jumlah_peminjaman'];
				break;
			}
			else
			{
				$arrdatalainnya[$kol]=0;
			//break;
			}
			
		}
		
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdatalainnya[$kol]=0;
		
		}
	}

	?>
	<script type="text/javascript" src="../../../js/jquery.min.js"></script>

			<script type="text/javascript">			
			$(function () {
						$('#container').highcharts({
							chart: {
								type: 'column'
							},
							title: {
								text: 'Rekap Jumlah Peminjaman Perangkat TI'
							},
							subtitle: {
								text: 'BPS Provinsi Jawa Tengah'
							},
							xAxis: {
								categories: [
									'Jan',
									'Feb',
									'Mar',
									'Apr',
									'May',
									'Jun',
									'Jul',
									'Aug',
									'Sep',
									'Oct',
									'Nov',
									'Dec'
								],
								crosshair: true
							},
							yAxis: {
								min: 0,
								title: {
									text: 'Jumlah Peminjaman'
								}
							},
							tooltip: {
								headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
								pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
									'<td style="padding:0"><b>{point.y:.0f} unit</b></td></tr>',
								footerFormat: '</table>',
								shared: true,
								useHTML: true
							},
							plotOptions: {
								column: {
									pointPadding: 0.2,
									borderWidth: 0
								}
							},
							series: [{
								name: 'Laptop',
								data: [<?php echo $arrdatalaptop[0].','.$arrdatalaptop[1].','.$arrdatalaptop[2].','.$arrdatalaptop[3].','.$arrdatalaptop[4].','.$arrdatalaptop[5].','.$arrdatalaptop[6].','.$arrdatalaptop[7].','.$arrdatalaptop[8].','.$arrdatalaptop[9].','.$arrdatalaptop[10].','.$arrdatalaptop[11]; ?>]
							}, {
								name: 'LCD Viewer',
								data: [<?php echo $arrdataviewer[0].','.$arrdataviewer[1].','.$arrdataviewer[2].','.$arrdataviewer[3].','.$arrdataviewer[4].','.$arrdataviewer[5].','.$arrdataviewer[6].','.$arrdataviewer[7].','.$arrdataviewer[8].','.$arrdataviewer[9].','.$arrdataviewer[10].','.$arrdataviewer[11]; ?>]

							}, {
								name: 'Harddisk',
								data: [<?php echo $arrdatahardisk[0].','.$arrdatahardisk[1].','.$arrdatahardisk[2].','.$arrdatahardisk[3].','.$arrdatahardisk[4].','.$arrdatahardisk[5].','.$arrdatahardisk[6].','.$arrdatahardisk[7].','.$arrdatahardisk[8].','.$arrdatahardisk[9].','.$arrdatahardisk[10].','.$arrdatahardisk[11]; ?>]

							}, {
								name: 'Printer',
								data: [<?php echo $arrdataprinter[0].','.$arrdataprinter[1].','.$arrdataprinter[2].','.$arrdataprinter[3].','.$arrdataprinter[4].','.$arrdataprinter[5].','.$arrdataprinter[6].','.$arrdataprinter[7].','.$arrdataprinter[8].','.$arrdataprinter[9].','.$arrdataprinter[10].','.$arrdataprinter[11]; ?>]

							}
							, {
								name: 'Lainnya',
								data: [<?php echo $arrdatalainnya[0].','.$arrdatalainnya[1].','.$arrdatalainnya[2].','.$arrdatalainnya[3].','.$arrdatalainnya[4].','.$arrdatalainnya[5].','.$arrdatalainnya[6].','.$arrdatalainnya[7].','.$arrdatalainnya[8].','.$arrdatalainnya[9].','.$arrdatalainnya[10].','.$arrdatalainnya[11]; ?>]

							}]
						});
					});
				

					</script>
					
				<script src="../../../js/highcharts.js"></script>
					<script src="../../../js/modules/exporting.js"></script>
				<div id="container">	
					
			</div>


	<?php 
	}
else if($jenis_laporan=='rusak')
	{
	echo "<br><center><h3>
				Rekap Laporan Kerusakan</h3></center><br>";
	echo '<table  class="gridtable" align="center">';
	echo '<tr>';
	echo '<th>No.</th>';
	echo '<th>Bulan</th>';
	echo '<th>Jenis Barang</th>';
	echo '<th>Jumlah Kerusakan</th>';
	echo '</tr>';
	
	$query = "select substring(p.tgl_lapor,6,2) as bulan,m.nama_bulan, b.id_jenis, count(p.id_barang) as jumlah_kerusakan 
	from rusak p inner join barang b on p.id_barang=b.id_barang
	inner join m_bulan m on substring(p.tgl_lapor,6,2)=m.id_bulan
	group by substring(tgl_lapor,6,2),b.id_jenis";
	$sql = mysqli_query($conn, $query);
	$no=1;
	while($data=mysqli_fetch_array($sql))
	{?>
		 <tr onmouseover="this.className='on'" onmouseout="this.className='out'">
		<td id="tbody"><?php echo $no;?></td>
		<td id="tbody"><?php 
		echo $data['nama_bulan'];
			
		?></td>
		<td id="tbody"><?php 
		if($data['id_jenis']=='LTP')
		{
			echo "Laptop";
		}
		else if($data['id_jenis']=='PC')
		{
		echo "Personal Komputer";
		}
		else if($data['id_jenis']=='PR')
		{
		echo "Printer";
		}
		else if($data['id_jenis']=='UPS')
		{
		echo "UPS";
		}
		else{
		echo "Lainnya";
		}
		
		?></td>
		<td id="tbody"><?php echo $data['jumlah_kerusakan']?></td>
	<?php	
		$no++;
		}
        ?>
   
	  </tr>	
	</table>
	<br>
	<?php
	$arrdatalaptop=array();
	$arrdatapc=array();
	$arrdataups=array();
	$arrdataprinter=array();
	$arrdatalainnya=array();
	$arrbulan = array (
			 0=>"01",
			 1=>"02",
			 2=>"03",
			 3=>"04",
			 4=>"05",
			 5=>"06",
			 6=>"07",
			 7=>"08",
			 8=>"09",
			 9=>"10",
			 10=>"11",
			 11=>"12",
			 );
		
	/*ambil data laptop*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_lapor, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_kerusakan
		FROM rusak p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_lapor, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis = 'LTP'
		GROUP BY substring( p.tgl_lapor, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{	
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdatalaptop[$kol]=$result['jumlah_kerusakan'];
				break;
			}
			else
			{
				$arrdatalaptop[$kol]=0;
			//break;
			}
			
		}
	
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdatalaptop[$kol]=0;
		}
	}

	/*ambil data PC*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_lapor, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_peminjaman
		FROM rusak p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_lapor, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis = 'PC'
		GROUP BY substring( p.tgl_lapor, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{			
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdatapc[$kol]=$result['jumlah_peminjaman'];
				break;
			}
			else
			{
				$arrdatapc[$kol]=0;
			//break;
			}
			
		}
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdatapc[$kol]=0;
		
		}
	}

	/*ambil data hardisk*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_lapor, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_kerusakan
		FROM rusak p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_lapor, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis = 'UPS'
		GROUP BY substring( p.tgl_lapor, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{			
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdataups[$kol]=$result['jumlah_kerusakan'];
				break;
			}
			else
			{
				$arrdataups[$kol]=0;
			//break;
			}
			
		}
		
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdataups[$kol]=0;
		
		}
	}

	/*ambil data printer*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_lapor, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_kerusakan
		FROM rusak p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_lapor, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis = 'PR'
		GROUP BY substring( p.tgl_lapor, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{			
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdataprinter[$kol]=$result['jumlah_kerusakan'];
				break;
			}
			else
			{
				$arrdataprinter[$kol]=0;
			//break;
			}
			
		}
		
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdataprinter[$kol]=0;
		
		}
	}

	/*ambil data lainnya*/	
	for($kol=0 ; $kol < 12 ; $kol++)
	{	
		//echo $kol;
		$query = mysqli_query($conn, "SELECT substring( p.tgl_lapor, 6, 2 ) AS bulan, count( p.id_barang ) AS jumlah_kerusakan
		FROM rusak p
		INNER JOIN barang b ON p.id_barang = b.id_barang
		INNER JOIN m_bulan m ON substring( p.tgl_lapor, 6, 2 ) = m.id_bulan
		WHERE b.id_jenis <> 'PC' and b.id_jenis <> 'LTP' and b.id_jenis <> 'PR' and b.id_jenis <> 'UPS'
		GROUP BY substring( p.tgl_lapor, 6, 2 ) , b.id_jenis");

		while($result=mysqli_fetch_array($query))
		{			
			if($result['bulan']== $arrbulan[$kol])
			{
				$arrdatalainnya[$kol]=$result['jumlah_kerusakan'];
				break;
			}
			else
			{
				$arrdatalainnya[$kol]=0;
			//break;
			}
			
		}
		
		$num_rows=mysqli_num_rows($query);
		if($num_rows=="0")
		{
		$arrdatalainnya[$kol]=0;
		
		}
	}

	?>
	<script type="text/javascript" src="../../../js/jquery.min.js"></script>

			<script type="text/javascript">			
			$(function () {
						$('#container').highcharts({
							chart: {
								type: 'column'
							},
							title: {
								text: 'Rekap Jumlah Kerusakan Perangkat TI'
							},
							subtitle: {
								text: 'BPS Provinsi Jawa Tengah'
							},
							xAxis: {
								categories: [
									'Jan',
									'Feb',
									'Mar',
									'Apr',
									'May',
									'Jun',
									'Jul',
									'Aug',
									'Sep',
									'Oct',
									'Nov',
									'Dec'
								],
								crosshair: true
							},
							yAxis: {
								min: 0,
								title: {
									text: 'Jumlah Kerusakan'
								}
							},
							tooltip: {
								headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
								pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
									'<td style="padding:0"><b>{point.y:.0f} unit</b></td></tr>',
								footerFormat: '</table>',
								shared: true,
								useHTML: true
							},
							plotOptions: {
								column: {
									pointPadding: 0.2,
									borderWidth: 0
								}
							},
							series: [{
								name: 'Laptop',
								data: [<?php echo $arrdatalaptop[0].','.$arrdatalaptop[1].','.$arrdatalaptop[2].','.$arrdatalaptop[3].','.$arrdatalaptop[4].','.$arrdatalaptop[5].','.$arrdatalaptop[6].','.$arrdatalaptop[7].','.$arrdatalaptop[8].','.$arrdatalaptop[9].','.$arrdatalaptop[10].','.$arrdatalaptop[11]; ?>]
							}, {
								name: 'PC',
								data: [<?php echo $arrdatapc[0].','.$arrdatapc[1].','.$arrdatapc[2].','.$arrdatapc[3].','.$arrdatapc[4].','.$arrdatapc[5].','.$arrdatapc[6].','.$arrdatapc[7].','.$arrdatapc[8].','.$arrdatapc[9].','.$arrdatapc[10].','.$arrdatapc[11]; ?>]

							}, {
								name: 'Printer',
								data: [<?php echo $arrdataprinter[0].','.$arrdataprinter[1].','.$arrdataprinter[2].','.$arrdataprinter[3].','.$arrdataprinter[4].','.$arrdataprinter[5].','.$arrdataprinter[6].','.$arrdataprinter[7].','.$arrdataprinter[8].','.$arrdataprinter[9].','.$arrdataprinter[10].','.$arrdataprinter[11]; ?>]

							}, {
								name: 'UPS',
								data: [<?php echo $arrdataups[0].','.$arrdataups[1].','.$arrdataups[2].','.$arrdataups[3].','.$arrdataups[4].','.$arrdataups[5].','.$arrdataups[6].','.$arrdataups[7].','.$arrdataups[8].','.$arrdataups[9].','.$arrdataups[10].','.$arrdataups[11]; ?>]

							}, {
								name: 'Lainnya',
								data: [<?php echo $arrdatalainnya[0].','.$arrdatalainnya[1].','.$arrdatalainnya[2].','.$arrdatalainnya[3].','.$arrdatalainnya[4].','.$arrdatalainnya[5].','.$arrdatalainnya[6].','.$arrdatalainnya[7].','.$arrdatalainnya[8].','.$arrdatalainnya[9].','.$arrdatalainnya[10].','.$arrdatalainnya[11]; ?>]

							}]
						});
					});
				

					</script>
					
				<script src="../../../js/highcharts.js"></script>
					<script src="../../../js/modules/exporting.js"></script>
				<div id="container">	
					
			</div>

	<?php 
	}
else if($jenis_laporan=='history')
	{
	$nip=$_POST['nip'];
	$id_barang=$_POST['pilihperangkat'];
	if ($id_barang == 'all')
	{
		$query = "select r.*,b.* from rusak r left join barang b on r.id_barang=b.id_barang where r.nip='$nip'";
		$sql = mysqli_query($conn, $query);
		$no=1;
		
		$querypegawai = mysqli_query($conn, "select * from m_pegawai where nipbaru='$nip'");
		$datapegawai = mysqli_fetch_array($querypegawai);
		$nama = $datapegawai['nama_pegawai'];
		
		?>
				<table class="gridtable" align="center">
			<tr>
				<td><b>History Kerusakan Perangkat</b><td>
			</tr>
			<tr>
				<td> Nama Pemegang : </td>
				<td> <?php echo $nama;?></td>
			</tr>
			<tr>
			<table>
				<thead>
					<th>No.</th>
					<th>Jenis Perangkat</th>
					<th>Nama Perangkat</th>
					<th>Tanggal Perbaikan</th>
					<th>Deskripsi Perbaikan </th>
					<th>Penanganan Perbaikan</th>
				</thead>
				<tbody>
				<?php
				while($data=mysqli_fetch_array($sql))
				{?>
					 <tr onmouseover="this.className='on'" onmouseout="this.className='out'">
						<td id="tbody"><?php echo $no;?></td>
						<td id="tbody"><?php echo $data['id_jenis'];?></td>
						<td id="tbody"><?php echo $data['merk'];?></td>
						<td id="tbody"><?php echo $data['tgl_lapor'];?></td>
						<td id="tbody"><?php echo $data['deskripsi_rusak'];?></td>
						<td id="tbody"><?php echo $data['penanganan'];?></td>
						</tr>
					<?php
					$no++;
				}
				?>
				</tbody>
			</table>
			</tr>
		</table>
		
		
		<?php
		
	}
	else
	{
		$query = "select * from rusak where nip='$nip' and id_barang='$id_barang'";
		$sql = mysqli_query($conn, $query);
		
		$querypegawai = mysqli_query($conn, "select * from m_pegawai where nipbaru='$nip'");
		$datapegawai = mysqli_fetch_array($querypegawai);
		$nama = $datapegawai['nama_pegawai'];
		
		$querybarang = mysqli_query($conn, "select * from barang where id_barang='$id_barang'");
		$databarang = mysqli_fetch_array($querybarang);
		$merk = $databarang['merk'];
		$jenis_barang=$databarang['id_jenis'];
		
		$no=1;
		?>
		<table class="gridtable" align="center">
			<tr>
				<td><b>History Kerusakan Perangkat</b><td>
			</tr>
			<tr>
				<td> Nama Pemegang : </td>
				<td> <?php echo $nama;?></td>
			</tr>
			<tr>
				<td> Nama Perangkat : </td>
				<td> <?php echo $jenis_barang .' - '.$merk ;?></td>
			</tr>
			<tr>
			<table>
				<thead>
					<th>No.</th>
					<th>Tanggal Perbaikan</th>
					<th>Deskripsi Perbaikan </th>
					<th>Penanganan Perbaikan</th>
				</thead>
				<tbody>
				<?php
				while($data=mysqli_fetch_array($sql))
				{?>
					 <tr onmouseover="this.className='on'" onmouseout="this.className='out'">
						<td id="tbody"><?php echo $no;?></td>
						<td id="tbody"><?php echo $data['tgl_lapor'];?></td>
						<td id="tbody"><?php echo $data['deskripsi_rusak'];?></td>
						<td id="tbody"><?php echo $data['penanganan'];?></td>
						</tr>
					<?php
					$no++;
				}
				?>
				</tbody>
			</table>
			</tr>
		</table>
		
	<?php
	}
	
	?>
		
	<?php	
	}
}
//include "footer.php";
?>			