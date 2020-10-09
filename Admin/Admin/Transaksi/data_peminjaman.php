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
    <li class="menu-header">Master Data</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="../Siswa/index.php">Student</a></li>
        <li><a class="nav-link" href="../Buku/index.php">Book</a></li>
        <li><a class="nav-link" href="../User/index.php">User</a></li>
        <li><a class="nav-link" href="../Peminjam/index.php">Peminjam</a></li>
        <li><a class="nav-link" href="../Petugas/index.php">Petugas</a></li>                
      </ul>
    </li>
    <li class="menu-header">Laporan</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link beep beep-sidebar" href="data_peminjaman.php">Data Peminjaman</a></li>
        <li><a class="nav-link beep beep-sidebar" href="data_pengembalian.php">Data Pengembalian</a></li>
      </ul>
    </li>
    <li class="menu-header">Daftar Buku</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link beep beep-sidebar" href="../Daftar/index.php">Semua</a></li>
      </ul>
    </li>                        
    <li class="menu-header">Pages</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a href="../Pages/sosial.php">My Social Media</a></li>
        <li><a href="../Pages/keamanan.php">Privasi & Keamanan</a></li>
        <li><a href="../Pages/akun.php">Info Akun</a></li>
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


  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
      <i class="fas fa-rocket"></i> Documentation
    </a>
  </div>
</aside>
</div>

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>DataTables</h1>
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
              <h4><a class="btn btn-primary" target="_blank" href="proses/excel_pinjam.php"><i class="fa fa-save"></i> EXCEL</a></h4>
              <h4><a class="btn btn-danger" target="_blank" href="proses/print_pinjam.php"><i class="fa fa-print"></i> PRINT</a></h4>
              <div class="card-header-action">
                <form action="proses/proses_pinjam.php">
                  <button type="button" data-toggle="modal" data-target="#modal-petugas" class="btn btn-primary">Add</button>
                </form>                                        
              </div>                                                                
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Buku</th>
                      <th>Peminjam</th>
                      <th>Jumlah</th>
                      <th>Tanggal Pinjam</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    $query="SELECT t.id, b.judul, pe.nama, t.jumlah_buku, t.tgl_pinjam, t.tgl_kembali, t.status FROM transaksi t INNER JOIN buku b on t.id_buku=b.id_buku INNER JOIN peminjam pe on t.id_peminjam=pe.id_peminjam where t.status = 1 ;";
                    $exe = mysqli_query($conn,$query);
                    while ($row = mysqli_fetch_array($exe)) {
                     ?>
                     <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row['judul']; ?></td>
                      <td><?php echo $row['nama']; ?></td>
                      <td><?php echo $row['jumlah_buku']; ?></td>
                      <td><?php echo $row['tgl_pinjam']; ?></td>       
                      <td>
                        <?php 
                        if ($row['status'] == 1) {
                          echo "<span class='btn-sm btn-success'>Pinjam</span>";
                        }else{
                          echo "<span class='btn-sm btn-danger'>Kembali</span>";
                        }
                        ?>
                      </td>
                      <td align="center">
                        <a href="kembali.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-info">Dikembalikan</button></a>
                        <a href="detail_pinjam.php?id=<?=$row['id'];?>" class="btn btn-secondary">Detail</a>
                      </td>
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
<div class="modal fade" id="modal-petugas">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="card">
        <form action="proses/proses_pinjam.php" method="POST">
          <div class="card-body">
            <div class="form-group">
              <label>Judul Buku</label>
              <select class="form-control " name="judul" required="">
                <option> Pilih Judul Buku</option>
                <?php 
                $query ="SELECT * FROM buku";
                $exe = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($exe)){
                 ?>
                 <option value="<?= $row['id_buku']?>"><?= $row['judul']?></option>
               <?php } ?>
             </select>
           </div>
           <div class="form-group">
            <label>Peminjam</label>
            <select class="form-control " name="nama" required="">
              <option>Pilih Peminjam</option>
              <?php 
              $query ="SELECT * FROM peminjam";
              $exe = mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($exe)){
               ?>
               <option value="<?= $row['id_peminjam']?>"><?= $row['nama']?></option>
             <?php } ?>
           </select>
         </div>
         <div class="form-group">
          <label>Jumlah</label>
          <input type="number" name="jumlah_buku" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Tanggal Pinjam</label>
          <input type="date" id="tgl_pinjam" class="form-control" name="tgl_pinjam" value="<?= date("Y-m-d") ?>">              
        </div>
        <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status">
            <option value="1">Pinjam</option>
            <option value="2">Kembali</option>
          </select>
        </div>                          
        <div class="card-footer text-right">
          <a href="data_peminjaman.php" class="btn btn-primary">Back</a>
          <button name="button" type="submit" class="btn btn-success">Save</button>
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
