<?php 
include 'koneksi.php';
$query = "SELECT * FROM kategori ORDER BY id_kategori ASC";
$exe = mysqli_query($conn,$query);
$no=1;
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../img/LogoG.png" type="image/png">
  <title>Peonpegu</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../vendors/linericon/style.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
  <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="../vendors/animate-css/animate.css">
  <!-- main css -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>

  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
     <nav class="navbar navbar-expand-lg navbar-light">
       <div class="container box_1620">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="index.php"><img src="../img/Gunung.png" alt="" style="width: 50%;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <script type="text/javascript">
        var tampil = localStorage.getItem('id_user');
        var tampil2 = localStorage.getItem('username');
        console.log("Siapa nama orang yang login tadi : ", tampil2);
        console.log("Berapa id tersebut : ", tampil);
      </script>       
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
       <ul class="nav navbar-nav menu_nav ml-auto">
        <li class="nav-item submenu dropdown">
          <a  href="index.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu 1</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li> 
            <li class="nav-item"><a class="nav-link" href="about-us.php">Tentang Kami</a></li> 
            <li class="nav-item"><a class="nav-link" href="service.php">Layanan</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>              
          </ul>            
        </li> 
        <li class="nav-item active submenu dropdown">
          <a  href="index.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu 2</a>
          <ul class="dropdown-menu">
            <?php if(mysqli_num_rows($exe)) { ?>
              <?php while($row = mysqli_fetch_array($exe)) { ?>
                <li class="nav-item"><a class="nav-link" href="kategori.php?id_kategori=<?php echo $row['id_kategori'];?>"><?php echo $row['nama'];?></a></li>
              <?php } ?>
            <?php } ?>
          </ul>            
        </li> 
        <li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
        <li class="nav-item submenu dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="berita.php"><script type="text/javascript">document.write(tampil2)</script></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="profil.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">Profil</a></li>
            <li class="nav-item"><a class="nav-link" href="../Admin/Proses/logout.php">Logout</a></li>
          </ul>
        </li>  
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
      </ul>
    </div> 
  </div>
</nav>
</div>
</header>
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
     <div class="banner_content text-center">
      <?php 
      include 'koneksi.php';
      $id_wisata = @$_GET['id_wisata'];
      $query2 = "SELECT * FROM wisata WHERE id_wisata='$id_wisata'";
      $exe2 = mysqli_query($conn,$query2);
      $row2 = mysqli_fetch_array($exe2);
      ?>
      <div class="page_link">
       <a href="index.php">Beranda</a>
       <a href="#" onclick="history.back()">Kategori</a>
       <a href="#"  onclick="history.back()">Kode</a>
     </div>
     <h2>Aktivasi Kode</h2>
   </div>
 </div>
</div>
</section>
<!--================End Home Banner Area =================-->
<!-- Start Align Area -->
<div class="whole-wrap">
  <div class="container">
    <div class="section-top-border">
      <h3 class="mb-30 title_color">Sedikit Cerita</h3>
      <div class="row">
        <div class="col-lg-12">
          <blockquote class="generic-blockquote">
            “Perkenalkan nama saya Moehammad Rizki Karianata selaku pemilik perusahaan Peonpegu. Sebelumnya saya ucapkan terimakasih banyak kepada masyarakat Indonesia yang telah mendukung pengembangan program kami. Disini saya akan bercerita sedikit tentang kehidupan saya di masa lalu. Pertama sewaktu kecil saya bersekolah di SD Negeri 1 Pandanlandung, dan saat masih berseragam merah putih saya juga tidak terlalu pintar ataupun cerdas. Setelah lulus SD saya melanjutkan sekolah di SMP Negeri 9 Malang. Disana saya mendapatkan pelajaran berharga bahwa menyenangkan seorang teman memanglah boleh tapi jangan sampai lupa untuk menyenangkan diri sendiri. Masa smp pun berakhir dan akhirnya saya masuk ke SMK Negeri 11 Malang serta mengambil jurusan Rekayasa Perangkat Lunak. Ada sebuah pesan dari seorang kakek yang membuat saya berubah menjadi seperti ini yaitu Pertama berbaktilah kepada orangtua terutama Ibu, karena dia(Ibu) telah membesarkan kamu dari kecil sampai tumbuh dewasa dan ia pun juga tidak meminta apa pun. Kedua jangan pernah tinggalkan sholat meskipun banyak pekerjaan. Ketiga saya lupa.” 
          </blockquote>
        </div>
      </div>
    </div>    
    <div class="section-top-border">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-header">
              Selamat Datang
            </div>
            <form action="Proses/add_kode.php" method="POST">
              <?php
              include 'koneksi.php';
              $id_user = @$_GET['id_user'];
              $query3 = "SELECT * FROM sementara2 WHERE id_user='$id_user' ORDER BY id_sementara DESC";
              $exe3 = mysqli_query($conn,$query3);
              $row3 = mysqli_fetch_array($exe3);
              ?>
              <div class="card-body">
                <h5 class="card-title">Kode Aktivasi</h5>
                <input type="hidden" name="id_user" id="id_user" value="<?php echo $row3['id_user'];?>">
                <input type="hidden" name="id_wisata" id="id_wisata" value="<?php echo $row3['id_wisata'];?>">
                <input type="hidden" name="nama_lengkap" id="nama_lengkap" value="<?php echo $row3['nama_lengkap'];?>">
                <input type="hidden" name="email" id="email" value="<?php echo $row3['email'];?>">
                <input type="hidden" name="no_hp" id="no_hp" value="<?php echo $row3['no_hp'];?>">
                <input type="hidden" name="nama_wisata" id="nama_wisata" value="<?php echo $row3['nama_wisata'];?>">
                <input type="hidden" name="harga" id="harga" value="<?php echo $row3['harga'];?>">
                <input type="hidden" name="jumlah_pesan" id="jumlah_pesan" value="<?php echo $row3['jumlah_pesan'];?>">
                <input type="hidden" name="tanggal_pesan" id="tanggal_pesan" value="<?php echo $row3['tanggal_pesan'];?>">
                <input type="hidden" name="total_harga" id="total_harga" value="<?php echo $row3['total_harga'];?>">     
                <input type="hidden" name="status" id="status" value="<?php echo $row3['status'];?>">
                <input type="number" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode Aktivasi Dengan Benar" required=""><br>
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Kirim Kode">
              </div>
            </form>
            <div class="card-footer text-muted">
              www.peonpegu.com
            </div>
          </div>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
    <div class="section-top-border">
      <h3 class="title_color">Galeri 2017 - 2018</h3>
      <div class="row gallery-item">
        <div class="col-md-4">
          <a href="../img/elements/Kiri.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../img/elements/Kiri.jpeg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../img/elements/Tengah.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../img/elements/Tengah.jpeg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../img/elements/Kanan.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../img/elements/Kanan.jpeg);"></div></a>
        </div>
        <div class="col-md-6">
          <a href="../img/elements/Ultah1~2.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../img/elements/Ultah1~2.jpeg);"></div></a>
        </div>
        <div class="col-md-6">
          <a href="../img/elements/Ultah2~2.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../img/elements/Ultah2~2.jpeg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../img/elements/Farrah1.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../img/elements/Farrah1.jpeg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../img/elements/Farrah3.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(../img/elements/Farrah3.jpg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../img/elements/Farrah2.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../img/elements/Farrah2.jpeg);"></div></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Align Area -->

<!--================ start footer Area  =================-->  
<footer class="footer-area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-3  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6 class="footer_title">Tentang Peonpegu</h6>
          <p>Peonpegu adalah situs penyedia pemesanan tiket secara online yang bisa didapatkan dibeberapa wilayah yang terjangkau. Peonpegu juga memberikan dampak yang cukup besar karena dapat memudahkan pendaki Indonesia.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6 class="footer_title">Menu Peonpegu</h6>
          <div class="row">
            <div class="col-4">
              <ul class="list">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Fitur</a></li>
                <li><a href="#">Layanan</a></li>
                <li><a href="#">Tentang</a></li>
              </ul>
            </div>
            <div class="col-4">
              <ul class="list">
                <li><a href="#">Tim</a></li>
                <li><a href="#">Harga</a></li>
                <li><a href="#">Kontak</a></li>
                <li><a href="#">Daftar</a></li>
              </ul>
            </div>                    
          </div>              
        </div>
      </div>              
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6 class="footer_title">Bantuan</h6>
          <p>Jika mengalami kesulitan saat menggunakan Peonpegu mohon untuk segera konsultasi.</p>    
          <div id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
              <div class="input-group d-flex flex-row">
                <input name="EMAIL" placeholder="Masukkan Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Email '" required="" type="email">
                <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>   
              </div>                  
              <div class="mt-10 info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-footer-widget instafeed">
          <h6 class="footer_title">Kiriman Instagram</h6>
          <ul class="list instafeed d-flex flex-wrap">
            <li><img src="../img/instagram/Gambar1.jpeg" alt="" style="width: 58px;"></li>
            <li><img src="../img/instagram/Gambar3.jpg" alt="" style="width: 58px;"></li>
            <li><img src="../img/instagram/Gambar14.jpg" alt="" style="width: 58px;"></li>
            <li><img src="../img/instagram/Gambar15.jpg" alt="" style="width: 58px;"></li>
            <li><img src="../img/instagram/Gambar17.jpg" alt="" style="width: 58px;"></li>
            <li><img src="../img/instagram/Gambar24.jpg" alt="" style="width: 58px;"></li>
            <li><img src="../img/instagram/Gambar25.jpg" alt="" style="width: 58px;"></li>
            <li><img src="../img/instagram/Gambar26.jpg" alt="" style="width: 58px;"></li>
          </ul>
        </div>
      </div>            
    </div>
    <div class="border_line"></div>
    <div class="row footer-bottom d-flex justify-content-between align-items-center">
      <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Hak Cipta &copy;<script>document.write(new Date().getFullYear());</script> Hak cipta dilindungi | Template ini dibuat <i class="fa fa-heart-o" aria-hidden="true"></i> oleh <a href="https://colorlib.com" target="_blank">Peonpegu</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        <div class="col-lg-4 col-md-4 footer-social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../js/jquery-3.2.1.min.js"></script>
  <!-- Library JavaScript -->
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/stellar.js"></script>
  <script src="../vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="../vendors/isotope/isotope-min.js"></script>
  <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="../js/jquery.ajaxchimp.min.js"></script>
  <script src="../vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="../vendors/counter-up/jquery.counterup.js"></script>
  <script src="../js/mail-script.js"></script>
  <script src="../js/theme.js"></script>
</body>
</html>