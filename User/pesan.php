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
       <a href="#"  onclick="history.back()">Detail</a>
     </div>
     <h2>Pesan</h2>
   </div>
 </div>
</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Portfolio Details Area =================-->
<section class="portfolio_details_area p_120">
 <div class="container">
  <?php 
  include 'koneksi.php';
  $id_wisata = @$_GET['id_wisata'];
  $id_user = @$_GET['id_user'];
  $query3 = "SELECT * FROM wisata WHERE id_wisata='$id_wisata'";
  $exe3 = mysqli_query($conn,$query3);
  $row3 = mysqli_fetch_array($exe3);
  $query4 = "SELECT * FROM user WHERE id_user='$id_user'";
  $exe4 = mysqli_query($conn,$query4);
  $row4 = mysqli_fetch_array($exe4);
  ?>
  <div class="portfolio_details_inner">
   <div class="row">
    <div class="col-md-6">
     <div class="left_img">
      <img class="img-fluid" src="../img/Gunung/<?php echo $row3['gambar'];?>" alt="">
    </div>
  </div>
  <div class="col-md-6">
   <div class="portfolio_right_text">
    <h4><?php echo $row3['nama_wisata'];?></h4>
    <p><?php echo $row3['ket_singkat'];?></p>
    <form action="Proses/add_transaksi.php" method="POST">
      <div class="perhitungan">
        <div class="mt-10">
          <input type="hidden" name="id_user" id="id_user" value="<?php echo $row4['id_user'];?>">
          <input type="hidden" id="id_wisata" name="id_wisata" value="<?php echo $row3['id_wisata'];?>">
          <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" value="<?php echo $row4['nama_lengkap'];?>" readonly="" required class="single-input">
        </div>
        <div class="mt-10">
          <input type="email" id="email" name="email" placeholder="Alamat Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'" value="<?php echo $row4['email'];?>" readonly="" required class="single-input">
        </div>
        <div class="mt-10">
          <input type="number" id="no_hp" name="no_hp" placeholder="Nomor Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telepon'" value="<?php echo $row4['no_hp'];?>" readonly="" required class="single-input">
        </div>
        <div class="mt-10">
          <input type="text" id="nama_wisata" name="nama_wisata" placeholder="Nama Wisata" value="<?php echo $row3['nama_wisata'];?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Wisata'" readonly="" required class="single-input">
        </div>
        <div class="mt-10">
          <input type="number" id="harga" name="harga" placeholder="Harga" value="<?php echo $row3['harga'];?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Harga'" readonly="" required class="single-input">
        </div>
        <div class="mt-10">
          <input type="number" id="jumlah_pesan" name="jumlah_pesan" placeholder="Jumlah Pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jumlah Pesan'" min="1" max="<?php echo $row3['stok'];?>" required class="single-input">
        </div>
        <div class="mt-10">
          <input type="number" id="total_harga" name="total_harga" placeholder="Total Harga" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Total Harga'" required class="single-input">
        </div><br>
        <input type="submit" class="genric-btn info circle" name="submit" id="submit" value="Kirim">
      </div>
    </form>    
  </div>
</div>
</div>
</div>
</div>
</section>
<!--================End Portfolio Details Area =================-->

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
  <script type="text/javascript" language="javascript">
    $(".perhitungan").keyup(function() {
      var jumlah_pesan = parseInt($("#jumlah_pesan").val())
      var harga = parseInt($("#harga").val()) 

      var total_harga = harga * jumlah_pesan;
      $("#total_harga").attr("value",total_harga)   
    });
  </script>
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