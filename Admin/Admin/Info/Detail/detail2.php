<?php
include "../../Proses/hakadmin.php";
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

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../../Stisla/node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../../Stisla/node_modules/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../../Stisla/assets/css/style.css">
  <link rel="stylesheet" href="../../Stisla/assets/css/components.css">
  <script src="../../Stisla/node_modules/chart.js/dist/Chart.js"></script>
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
              <a href="../../Proses/logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="../../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="../../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">St</a>
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
        <li class="active"><a class="nav-link" href="../../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">General Dashboard</a></li>
      </ul>
    </li>
    <li class="menu-header">Master Data</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="../../Siswa/index.php">Student</a></li>
        <li><a class="nav-link" href="../../Buku/index.php">Book</a></li>
        <li><a class="nav-link" href="../../User/index.php">User</a></li>
        <li><a class="nav-link" href="../../Peminjam/index.php">Peminjam</a></li>
        <li><a class="nav-link" href="../../Petugas/index.php">Petugas</a></li>                
      </ul>
    </li>
    <li class="menu-header">Laporan</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link beep beep-sidebar" href="../../Transaksi/data_peminjaman.php">Data Peminjaman</a></li>
        <li><a class="nav-link beep beep-sidebar" href="../../Transaksi/data_pengembalian.php">Data Pengembalian</a></li>
      </ul>
    </li>
    <li class="menu-header">Daftar Buku</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link beep beep-sidebar" href="../../Daftar/index.php">Semua</a></li>
      </ul>
    </li>                        
    <li class="menu-header">Pages</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a href="../../Pages/sosial.php">My Social Media</a></li>
        <li><a href="../../Pages/keamanan.php">Privasi & Keamanan</a></li>
        <li><a href="../../Pages/akun.php">Info Akun</a></li>
      </ul>
    </li>
    <li class="menu-header">Info</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li><a href="../kebijakan.php">Kebijakan Privasi</a></li>
        <li><a href="../bantuan.php">Pusat Bantuan</a></li>
        <li><a href="../infoakun.php">Info Aplikasi</a></li>
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
      <h1>Default Layout</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
      </div>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Aplikasi Perpustakaan</h4>
          <div class="card-header-action">
            <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
          </div>              
        </div>
        <div class="collapse show" id="mycard-collapse">
          <div class="card-body">
            <p>Anda dapat menggunakan fitur lupa password pada halaman login.</p>
            <p>Langkah - langkah nya adalah sebagai berikut :</p>
            <p>1. Pada halaman utama klik menu login.</p>
            <p>2. Setelah berada pada halaman login Anda dapat melihat menu - menu yang tersedia, Jika ingin mengubah kata sandi maka klik pilihan <b>Lupa kata sandi ?</b></p>
            <p>3. Lalu Anda bisa langsung mengubah kata sandi.</p>
            <p>Semoga membantu</p>
          </div>
          <div class="card-footer">
            <?php
            date_default_timezone_set("Asia/Jakarta");

            $b = time();
            $hour = date("G",$b);

            if ($hour>=0 && $hour<=10)
            {
              echo "<marquee><h3 class='mb-2 font-weight-bold'>Selamat pagi untuk kamu yang kian kemarin gengsi untuk bilang kangen ke aku.</h3></marquee>";
            }
            elseif ($hour >=11 && $hour<=14)
            {
              echo "<marquee><h3 class='mb-2 font-weight-bold'>Selamat siang untuk kamu yang ku sayang, jangan suka berpanas - panasan di bawah terik matahari ya. Cukup aku saja yang hitam, cinta kita jangan.</h3></marquee>";
            }
            elseif ($hour >=15 && $hour<=17)
            {
              echo "<marquee><h3 class='mb-2 font-weight-bold'>Kenapa senja itu menyenangkan? Karena langit menerima senja apa adanya, meski kadang merah merekah bahagia, atau kadang hitam berduka.</h3></marquee>";
            }
            elseif ($hour >=18 && $hour<=24)
            {
              echo "<marquee><h3 class='mb-2 font-weight-bold'>Selamat Malam, Aku capek, mau tidur dulu. Kalau ada perlu, datang aja ke mimpi ya.</h3></marquee>";
            }

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
<script src="../../Stisla/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="../../Stisla/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../../Stisla/node_modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>

<!-- Template JS File -->
<script src="../../Stisla/assets/js/scripts.js"></script>
<script src="../../Stisla/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="../../Stisla/assets/js/page/index-0.js"></script>
</body>
</html>
