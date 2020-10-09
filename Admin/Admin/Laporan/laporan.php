<?php
include "../Proses/hakadmin.php";
?>
<?php
include '../../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="../Stisla/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../Stisla/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../Stisla/assets/css/style.css">
  <link rel="stylesheet" href="../Stisla/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>          
        </form>
        <script type="text/javascript">
          var tampil = localStorage.getItem('id_user');
          var tampil2 = localStorage.getItem('username');
          console.log("Siapa nama orang yang login tadi : ", tampil2);
          console.log("Berapa id tersebut : ", tampil);
        </script>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../Stisla/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><script type="text/javascript">document.write(tampil2);</script></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="../Pages/akun.php" onclick="location.href=this.href+'?id_user='+tampil;return false;" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="../Pages/keamanan.php" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="../../proses/logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">St</a>
          </div>
          <center><div id="clock2"></div></center>
          <script type='text/javascript'>
            <!--
              var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
              var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
              var date = new Date();
              var day = date.getDate();
              var month = date.getMonth();
              var thisDay = date.getDay(),
              thisDay = myDays[thisDay];
              var yy = date.getYear();
              var year = (yy < 1000) ? yy + 1900 : yy;
              document.getElementById('clock2').innerHTML=thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
      //-->
    </script>          
    <center><div id="clock"></div></center>
    <script type="text/javascript">
      <!--
        function showTime() {
          var a_p = "";
          var today = new Date();
          var curr_hour = today.getHours();
          var curr_minute = today.getMinutes();
          var curr_second = today.getSeconds();
          if (curr_hour < 12) {
            a_p = "AM";
          } else {
            a_p = "PM";
          }
          if (curr_hour == 0) {
            curr_hour = 12;
          }
          if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
          }
          curr_hour = checkTime(curr_hour);
          curr_minute = checkTime(curr_minute);
          curr_second = checkTime(curr_second);
          document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }

        function checkTime(i) {
          if (i < 10) {
            i = "0" + i;
          }
          return i;
        }
        setInterval(showTime, 500);
    //-->
  </script>          
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown active">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      <ul class="dropdown-menu">
        <li class="active"><a class="nav-link" href="../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">General Dashboard</a></li>
      </ul>
    </li>
    <li class="menu-header">Pegawai</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Pegawai</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="../InfoBarang/index.php">Pegawai</a></li>
   
      </ul>
    </li>
    <li class="menu-header">Perangkat</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Perangkat</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="../InfoBarang/index.php">Perangkat</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_rusak.php">Perangkat Rusak</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_dipinjam.php">Perangkat Dipinjam</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_free.php">Perangkat Free</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_dipakai.php">Perangkat Dipakai</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_laptop.php">Perangkat Laptop</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_scanner.php">Perangkat Scanner</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_hdexternal.php">Perangkat HD Eksternal</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_lcd.php">Perangkat LCD</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_modem.php">Perangkat Modem</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_pc.php">Perangkat PC</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_lcd.php">Perangkat LCD</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_printer.php">Perangkat Printer</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_switchhub.php">Perangkat Switch Hub</a></li>
        <li><a class="nav-link" href="../InfoBarang/index_ups.php">Perangkat Ups</a></li>
      </ul>
    </li>  
    <li class="menu-header">Transaksi</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Transaksi</span></a>
      <ul class="dropdown-menu">
        <li><a href="../Pages/sosial.php">Peminjaman</a></li>
        <li><a href="../Pages/keamanan.php">Kerusakan</a></li>
        <li><a href="../Pages/akun.php">Penggantian</a></li>
      </ul>
    </li>                       
    <li class="menu-header">Rekap Laporan</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Laporan</span></a>
      <ul class="dropdown-menu">
        <li><a href="../Info/kebijakan.php">Kebijakan Privasi</a></li>
        <li><a href="../Info/bantuan.php">Pusat Bantuan</a></li>
        <li><a href="../Info/infoakun.php">Info Aplikasi</a></li>
      </ul>
    </li>  
    <li class="menu-header">Info</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a href="../Info/kebijakan.php">Kebijakan Privasi</a></li>
        <li><a href="../Info/bantuan.php">Pusat Bantuan</a></li>
        <li><a href="../Info/infoakun.php">Info Aplikasi</a></li>
      </ul>
    </li>
  </ul>
</aside>
</div>
<?php 

session_start();//mulai session
if(isset($_SESSION['username']) and isset($_SESSION['password']))
{
	$username = $_SESSION['username'] ;
	$password = $_SESSION['password'] ;
	$unitkerja = $_SESSION['id_unitkerja'] ;
}

?>
<html>
	<?php
  include '../../koneksi.php';

	$tampil_peminjaman = "Select distinct p.nama,b.merk from pinjam_kembali t
	inner join pegawai p on t.nip=p.nip
	inner join barang b on t.id_barang=b.id_barang
	order by t.nip asc";
	$sql_peminjaman = mysqli_query($conn, $tampil_peminjaman);
	
	$tampil_kerusakan = "Select distinct p.nama,b.merk from rusak t
	inner join pegawai p on t.nip=p.nip
	inner join barang b on t.id_barang=b.id_barang
	order by t.nip asc";
	$sql_kerusakan = mysqli_query($conn, $tampil_kerusakan);
	
	$querypegawai = mysqli_query($conn, "select p.*,u.unitkerja as unitkerja from m_pegawai as p left join m_unitkerja as u on p.id_unitkerja=u.id where p.username='$username'");
	$datapegawai = mysqli_fetch_array($querypegawai);
	$id_unitkerja = $datapegawai['id_unitkerja'];
	$bidang = substr($id_unitkerja,0,3);
	$nip=$datapegawai['nipbaru'];
	
	?>
<head>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script  type="text/javascript">
	function ViewPegawai()  
		{  
			if(document.getElementById("pilihlaporan").value=='history')
			{
			document.getElementById("pegawai").style.display="";
			}
			else
			{
			document.getElementById("pegawai").style.display="none";
			}		 
		}
	</script>
	
    <script type="text/javascript">
		*var htmlobjek;
		$(document).ready(function(){
		  //apabila terjadi event onchange terhadap object <select id_jenis>
		  $("#pilihlaporan").change(function(){
			var id_jenis = $("#pilihlaporan").val();
			$.ajax({
				url: "tampil_laporan.php",
				data: "id_laporan="+id_jenis,
				cache: false,
				success: function(msg){
					$("#hasillaporan").html(msg);
				}
			});
		  });
		});
   */
    </script>
<link rel="stylesheet" type="text/css" href="css/button.css" />
</head>
<body>
	<div id="content">
   	  <form name="postform" action="laporan.php" method="post">
          <table width="880" height="124" cellpadding="5" cellspacing="5">
          	<tr  style="align:center">
            	<td bgcolor="e1e1e1" colspan="4"><strong>Laporan Kerusakan dan Peminjaman Peralatan IT</strong></td>
            </tr>
            <tr>
            	<td width="233" height="32">Pilih Jenis Laporan</td>
                <td width="3">:</td>
                <td width="330">
                	<select name="pilihlaporan" id="pilihlaporan"  class="form-control" onchange="ViewPegawai();" required>
                    <option value="kosong">--Pilih--</option>
					<option value="pinjam">Rekap Laporan Peminjaman</option> 
                    <option value="rusak">Rekap Laporan Kerusakan</option>
					<option value="history">Rekap History Kerusakan Perangkat</option>
                    </select>
                </td>
           </tr>
		   <tr name="rowpegawai" id="rowpegawai" style="visibility:hidden;">
			   <table name = "pegawai" id="pegawai" style="display:none;">
			   <tr>
				  <td width="271">NIP</td>
				  <td width="3">:</td>
				  <td width="330"><input id="nip" type="text" name="nip" size="35" value="<?php echo $datapegawai['nipbaru'];?>" readonly="readonly"  />
			   </tr>
			   <tr>
				  <td>Nama</td>
				  <td>:</td>
				  <td><input id="nama" type="text" name="nama" size="35" value="<?php echo $datapegawai['nama_pegawai'];?>"  readonly="readonly"/></td>
				</tr>
			   <tr>
				<td width="233" height="32">Pilih Jenis Perangkat</td>
					<td width="3">:</td>
					<td width="330">
						<select name="pilihperangkat" id="pilihperangkat">
						<option value="all">--Semua--</option>
                        <?php
						//mengambil nama-nama jenis yang ada di database
                        $barang_bidang = mysqli_query($conn, "select * from barang as b left join m_pegawai p on b.pemegang=p.nipbaru where p.nipbaru='$nip'");
                        while($p=mysqli_fetch_array($barang_bidang)){
                        echo "<option value=\"$p[id_barang]\">$p[merk]</option>\n";
                        }
                        ?>
       					</select>
					</td>
				</tr>
			   </table>
		   </tr>
		   <tr>
			<td>
				<input type="submit" name="proses" value="Submit">
			</td>
			</tr>
		
		<tr>
			<td colspan="4" align="center">
			  <?php require "laporan_peminjaman.php"; ?>
		</td>

		</tr>
		          
  	</table>
            <p></p>
       </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="../Stisla/assets/js/stisla.js"></script>

<!-- JS Libraies -->

<script src="../Stisla/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../Stisla/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../Stisla/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
<!-- Template JS File -->
<script src="../Stisla/assets/js/scripts.js"></script>
<script src="../Stisla/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="../Stisla/assets/js/page/modules-datatables.js"></script>  
</body>
</html>

