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
  <title>General Dashboard &mdash; SIPPTI</title>

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
            <a href="../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">SIPPTI</a>
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

<!-- Main Content -->

<?php
	#jml laptop
	$sql = mysqli_query ($conn, "select * from barang where id_jenis ='HD_E'");
	$jml_HD = mysqli_num_rows($sql);

	#jml laptop
	$p = mysqli_query ($conn, "select * from barang where id_jenis ='HD_E' and status='1'");
	$dipinjam = mysqli_num_rows($p);
	
	#jml laptop
	$q = mysqli_query ($conn, "select * from barang where id_jenis ='HD_E' and status='0'");
	$free = mysqli_num_rows($q);
	
	#jml laptop
	$q = mysqli_query ($conn, "select * from barang where id_jenis ='HD_E' and status='2'");
	$dipakai = mysqli_num_rows($q);

	?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Perangkat HD</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Modules</a></div>
        <div class="breadcrumb-item">DataTables</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            	<table width="881">
            		<tr>
				    <td width="242" height="27"><H4>Jumlah HD</H4></td>
				    <td width="11"><H4>:</H4></td>
				    <td width="612"><H4><?php echo $jml_HD;?></H4></td>
				   </tr>
				   <tr>
				    <td width="242" height="27"><H4>Jumlah HD Dipinjam</H4></td>
				    <td width="11"><H4>:</H4></td>
				    <td width="612"><H4><?php echo $dipinjam;?></H4></td>
				   </tr>
				   <tr>
				    <td width="242" height="27"><H4>Jumlah HD Free</H4></td>
				    <td width="11"><H4>:</H4></td>
				    <td width="612"><H4><?php echo $free;?></H4></td>
				  </tr>
				  <tr>
				    <td width="242" height="27"><H4>Jumlah HD Terpakai</H4></td>
				    <td width="11"><H4>:</H4></td>
				    <td width="612"><H4><?php echo $dipakai;?></H4></td>
				  </tr>
				</table>
              <h4></h4>             
              <div class="card-header-action">
                <form action="proses/add.php">
                  <button type="button" data-toggle="modal" data-target="#modal-petugas" class="btn btn-primary">Add</button>
                </form>                                        
              </div>                          
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>ID Barang</th>
                      <th>Jenis Barang</th>
                      <th>Merk</th>
                      <th>Tahun Perolehan</th>
                      <th>Asal</th>                   
                      <th>Serial Number</th>
                      <th>Keterangan</th>
                      <th>Status</th>                      
                      <th colspan="2"><div align="center"><strong>Option</strong></div></th>
                    </tr>
                  </thead>
               
                  <tbody>
                    <?php
                    $no = 1; 
                    $query = "SELECT * FROM barang where id_jenis='HD_E' ORDER BY id_barang ASC";
                    $exe = mysqli_query($conn, $query);
                    $total = mysqli_num_rows($exe);
                    while ($row = mysqli_fetch_array($exe)) {
                      $id_barang = $row['id_barang'];
                      ?>
                      <tr>
                       
                        <td><?php echo $row['id_barang']; ?></td>
                        <td><?php echo $row['id_jenis']; ?></td>
                        <td><?php echo $row['merk']; ?></td>
                        <td><?php echo $row['tahun_perolehan']; ?></td>                                                
                        <td><?php echo $row['asal']; ?></td>                      
                        <td><?php echo $row['serial_number']; ?></td>
                        <td><?php echo $row['ket']; ?></td>
                        <td id="tbody">
						<?php
						if ($row['status'] == "0"){
						echo "Free";
						} elseif ($row['status'] == "1"){
							echo "Dipinjam";
						} else {
							echo "Dipakai";
						}
				        ?></td>
				        
				        <td><a href="detail.php?id_barang=<?=$row['id_barang'];?>" class="btn btn-secondary">Detail</a></td>
				  		
				  		<td><a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" href="proses/delete.php?id_barang=<?=$row['id_barang'];?>" class="btn btn-danger">Delete</a></td>
                      </tr>
                      <?php
                    } 
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php


$query = mysqli_query($conn, "select max(id_barang) as maxID from barang");
$row = mysqli_fetch_array($query);
//echo "ada yang error: ".mysql_error();
$idMax = $row['maxID'];
$noUrut = (int) substr($idMax,4,4);
$noUrut++;
$ID_brg = "BRG-".sprintf("%04s",$noUrut);
?>
<div class="modal fade" id="modal-petugas">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="card">
        <form action="proses/add.php" method="POST">
          <div class="card-body">
            <div class="form-group">
              <label>ID Barang</label>
              <td><input class="form-control" name="id_barang" value="<?php echo $ID_brg;?>" readonly="readonly" /></td>
     
            </div>
             <div class="form-group">
              <label>Jenis Barang</label>
              <td><select class="form-control " name="id_jenis">
					<option>--Pilih Jenis--</option>
						<?php
                        $sql = mysqli_query($conn, "SELECT * FROM jenis_barang");
                        while($p=mysqli_fetch_array($sql)){
                        echo "<option value=\"$p[id_jenis]\">$p[nm_jenis]</option>\n";
                        }
                        ?>
				</select>
               </td>
            </div>
            <div class="form-group">
              <label>Merk</label> 
              <input type="merk" name="merk" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Tahun Perolehan</label>
              <input type="tahun_perolehan" name="tahun_perolehan" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Asal</label>
              <td>
                <select class="form-control " name="asal">   
                <option value="">--Pilih--</option>    
                <option value="BPS Pusat">BPS Pusat</option>    
                <option value="Internal">Internal</option>
                </select> 
              </td>
            </div>
              <div class="form-group">
              <label>NIB</label> 
              <input type="NIB" name="NIB" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Serial Number</label> 
              <input type="serial_number" name="serial_number" class="form-control" required="">
            </div>
 			<div class="form-group">
              <label>Keterangan</label>
              <select class="form-control " name="ket">
                <option value="Baik">Baik</option>
                <option value="Rusak">Rusak</option>
                <option value="Service">Service</option>
              </select>
            </div> 
            <div class="form-group">
              <label>Status</label>
              <select class="form-control " name="status">
                <option value="0">Free</option>
                <option value="1">Dipinjam</option>
                <option value="2">Dipakai</option>
              </select>
            </div> 
            <div class="form-group">
              <label>Lokasi Barang</label>
              <td><select class="form-control" name="lokasi" id="lokasi">
					<option>--Pilih Lokasi--</option>
						<?php
                        $sql = mysqli_query($conn,  "SELECT distinct lokasi FROM barang");
                        while($p=mysqli_fetch_array($sql)){
                        echo "<option value=\"$p[lokasi]\">$p[lokasi]</option>\n";
                        }
                        ?>
				</select>
               </td>
            </div>
            <div class="form-group">
              <label>Pemegang</label>
              <td><select class="form-control" name="pemegang" id="pemegang">
					<option>--Pilih NIP--</option>
						<?php
                        $sql = mysqli_query($conn, "SELECT nip,nama FROM pegawai order by nama");
                        while($p=mysqli_fetch_array($sql)){
                        echo "<option value=\"$p[nip]\">$p[nip] | $p[nama]</option>\n";
                        }
                        ?>
					
				</select>
               </td>
            </div>               
          </div>                   
          <div class="card-footer text-right">
            <a href="index.php" class="btn btn-primary">Back</a>
            <button name="Simpan" type="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
  </div>
  <div class="footer-right">
    2.3.0
  </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
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
