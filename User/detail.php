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
       <a href="detail.php?id_wisata=<?php echo $row2['id_wisata'];?>">Detail</a>
     </div>
     <h2>Detail</h2>
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
  $query3 = "SELECT * FROM wisata WHERE id_wisata='$id_wisata'";
  $exe3 = mysqli_query($conn,$query3);
  $row3 = mysqli_fetch_array($exe3);
  ?>
  <script type="text/javascript">
    var tampil = localStorage.getItem('id_user');
    var tampil2 = localStorage.getItem('username');
    console.log("Siapa nama orang yang login tadi : ", tampil2);
    console.log("Berapa id tersebut : ", tampil);
  </script>
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
    <ul class="list">
      <!--                <li><span>Rating</span>: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li> -->
      <li><span>Provinsi</span>:  <?php echo $row3['provinsi'];?></li>
      <li><span>Alamat</span>:  <?php echo $row3['alamat'];?></li>
      <li><span>Harga</span>:  <?php echo $row3['harga'];?></li>
      <li><span>Stok</span>:  <?php echo $row3['stok'];?></li>
      <li><span>Cara Pesan</span>: 1. Jika ingin memesan harap untuk login terlebih</li> 
      <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dahulu dan pilih wisata yang ingin dituju.</li>
      <li><span></span>&nbsp; 2. Setelah memilih wisata yang dituju maka Anda akan</li> 
      <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;diarahkan ke halaman lain untuk mengisi formulir.</li>
      <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harap isi formulir dengan benar.</li>
      <li><span></span>&nbsp; 3. Terakhir Anda akan mendapatkan kode OTP dan</li> 
      <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;masukkan sesuai kode tersebut. Lalu cetak bukti</li>
      <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pembayaran dan bayar melalui Indomaret.</li>
    </ul>
    <a class="genric-btn info circle" href="pesan.php?id_wisata=<?php echo $row3['id_wisata'];?>" onclick="location.href=this.href+'&id_user='+tampil;return false;">Pesan</a>
  </div>
</div>
</div>
<p><?php echo $row3['ket_lengkap'];?></p>
</div>
</div>
</section>
<!--================End Portfolio Details Area =================-->

<!--================Text Members Area =================-->
<section class="text_members_area p_120">
 <div class="container">
  <div class="main_title">
   <h2>Testimoni</h2>
   <p>Dibawah ini merupakan beberapa testimoni pelanggan kami yang sudah pernah memesan di Peonpegu.com</p>
 </div>
 <div class="member_slider owl-carousel">
  <?php 
  include 'koneksi.php';
  $no=1;
  $id_wisata = $_GET['id_wisata'];
  $query4 = "SELECT * FROM testimoni WHERE id_wisata='$id_wisata' ORDER BY id_testimoni ASC";
  $exe4 = mysqli_query($conn,$query4);
  while($row4 = mysqli_fetch_array($exe4)) {
   ?>
   <div class="item">
    <div class="member_item">
     <p><?php echo $row4['isi'];?></p>
     <h4><?php echo $row4['nama_lengkap'];?></h4>
     <h5><?php echo $row4['pekerjaan'];?></h5>
   </div>
 </div>
<?php } ?>                  
</div>
</div>
<div class="comment-form">
  <h4>Testimoni pada <?php echo $row3['nama_wisata'];?></h4>
  <form action="Proses/add_testimoni.php" method="POST">
    <?php 
    include 'koneksi.php';
    $id_user = @$_GET['id_user'];
    $query5 = "SELECT * FROM user WHERE id_user='$id_user'";
    $exe5 = mysqli_query($conn,$query5);
    $row5 = mysqli_fetch_array($exe5);
    ?>
    <div class="form-group form-inline">
      <div class="form-group col-lg-6 col-md-6 name">
        <input type="hidden" name="id_user" id="id_user" value="<?php echo $row5['id_user'];?>">
        <input type="hidden" name="id_wisata" id="id_wisata" value="<?php echo $row3['id_wisata'];?>">
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row5['nama_lengkap'];?>" placeholder="Masukkan Nama Lengkap" readonly="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nama Lengkap'">
      </div>
      <div class="form-group col-lg-6 col-md-6 email">
        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Pekerjaan'" required="">
      </div>                    
    </div>
    <div class="form-group">
      <textarea class="form-control mb-10" rows="5" id="isi" name="isi" maxlength="148" placeholder="Masukkan Isi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Isi'" required=""></textarea>
    </div>
    <input type="submit" name="submit" id="submit" value="Kirim Testimoni"class="primary-btn submit_btn"> 
  </form>
</div>
</section>
<!--================End Text Members Area =================-->

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