<?php 
include '../koneksi.php';
$id_berita = @$_GET['id_berita'];
$id_user = @$_GET['id_user'];
$query = "SELECT * FROM kategori ORDER BY id_kategori ASC";
$exe = mysqli_query($conn,$query);
$query2 = "SELECT * FROM komentar WHERE id_berita = '$id_berita' ORDER BY id_komentar ASC";
$exe2 = mysqli_query($conn,$query2);
$query3 = "SELECT * FROM berita WHERE id_berita='$id_berita'";
$exe3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_array($exe3);
$query4 = "SELECT * FROM user WHERE id_user='$id_user'";
$exe4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_array($exe4);
$query5 = "SELECT * FROM berita ORDER BY id_berita ASC";
$exe5 = mysqli_query($conn,$query5);
$query6 = "SELECT * FROM penulis WHERE id_penulis='$id_berita'";
$exe6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_array($exe6);
$query7 = "SELECT * FROM gambar_berita";
$exe7 = mysqli_query($conn,$query7);
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
    <li class="nav-item submenu dropdown">
      <a  href="index.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu 2</a>
      <ul class="dropdown-menu">
        <?php if(mysqli_num_rows($exe)) { ?>
          <?php while($row = mysqli_fetch_array($exe)) { ?>
            <li class="nav-item"><a class="nav-link" href="kategori.php?id_kategori=<?php echo $row['id_kategori'];?>"><?php echo $row['nama'];?></a></li>
        <?php } ?>
    <?php } ?>
</ul>            
</li> 
<li class="nav-item active"><a class="nav-link" href="berita.php">Berita</a></li>
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
          <div class="page_link">
            <a href="index.php">Beranda</a>
            <a href="berita.php">Berita</a>
            <a href="berita_detail.php">Detail</a>
        </div>
        <h2>Berita Detail</h2>
    </div>
</div>
</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="../img/blog/feature-img1.jpg" alt="">
                        </div>									
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">
                                <a href="index.php"><b>Peonpegu.com</b></a>
                            </div>
                            <ul class="blog_meta list">
                              <?php 
                              $query = "SELECT COUNT(*) AS nama FROM komentar WHERE id_berita = '$id_berita'";
                              $exe = mysqli_query($conn,$query);
                              $bu = mysqli_fetch_array($exe);
                              ?>
                              <li><a href="#"><?php echo $row3['penulis'];?><i class="lnr lnr-user"></i></a></li>
                              <li><a href="#"><?php echo date('d F Y', strtotime($row3['tanggal']));?><i class="lnr lnr-calendar-full"></i></a></li>
                              <li><a href="#"><?php echo $bu['nama']; ?> Komentar<i class="lnr lnr-bubble"></i></a></li>
                          </ul>
                          <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 blog_details">
                    <h2><?php echo $row3['judul'];?></h2>
                    <p class="excert">
                        <?php echo $row3['ket_singkat'];?>
                    </p>
                    <p>
                     <?php echo $row3['ket_singkat2'];?>
                 </p>
             </div>
             <div class="col-lg-12">
                <div class="quotes">
                    <?php echo $row3['quotes'];?> - <?php echo date('d F Y')?>
                </div>
                <div class="row">
                    <?php if(mysqli_num_rows($exe7)) { ?>
                        <?php while($row7 = mysqli_fetch_array($exe7)) { ?>
                        <div class="col-6">
                            <img class="img-fluid" src="../img/Penulis/<?php echo $row7['gambar'];?>" alt="">
                        </div>
                    <?php } ?>
                <?php } ?>
                <div class="col-lg-12 mt-25">
                    <p>
                     <?php echo $row3['ket_lengkap'];?>
                 </p>											
             </div>									
         </div>
     </div>
 </div>
 <div class="comments-area">
  <h4><?php echo $bu['nama']; ?> Komentar</h4>
  <?php if(mysqli_num_rows($exe2)) { ?>
    <?php while($row2 = mysqli_fetch_array($exe2)) { ?>
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="img/<?php echo $row2['gambar'];?>" alt="" style="width: 60px;">
                    </div>
                    <div class="desc">
                        <h5><a href="#"><?php echo $row2['nama'];?></a></h5>
                        <p class="date"><?php echo date('d F Y', strtotime($row2['tanggal']));?></p>
                        <p class="comment">
                            <?php echo $row2['isi'];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>	
    <?php } ?>
<?php } ?>
</div>
<div class="comment-form">
  <h4>Masukkan Komentar</h4>
  <form action="Proses/add_komentar.php" method="POST">
    <div class="form-group form-inline">
      <div class="form-group col-lg-6 col-md-6 name">
        <input type="hidden" name="id_berita" id="id_berita" value="<?php echo $row3['id_berita'];?>">
        <input type="hidden" id="id_user" name="id_user" value="<?php echo $row4['id_user'];?>">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nama'" value="<?php echo $row4['nama_lengkap'];?>" readonly="">
    </div>
    <div class="form-group col-lg-6 col-md-6 email">
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Tanggal'" value="<?php echo date('Y-m-d')?>" readonly="">
    </div>										
</div>
<div class="form-group">
    <input type="hidden" class="form-control" id="gambar" name="gambar" placeholder="Gambar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gambar'" value="<?php echo $row4['gambar'];?>">
</div>
<div class="form-group">
    <textarea class="form-control mb-10" rows="5" name="isi" id="isi" placeholder="Isi Komentar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Isi Komentar'" required=""></textarea>
</div>
<input type="submit" name="submit" id="submit" class="primary-btn submit_btn" value="Kirim Komentar">	
</form>
</div>
</div>
<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Berita">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                </span>
            </div><!-- /input-group -->
            <div class="br"></div>
        </aside>
        <aside class="single_sidebar_widget author_widget">
            <img class="author_img rounded-circle" src="../img/penulis/<?php echo $row6['gambar'];?>" alt="" style="width: 90px;">
            <h4><?php echo $row6['nama_penulis'];?></h4>
            <p><?php echo $row6['pekerjaan'];?></p>
            <div class="social_icon">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
            <p><?php echo $row6['tentang'];?></p>
            <div class="br"></div>
        </aside>
        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Berita Terbaru</h3>
            <?php if(mysqli_num_rows($exe5)) { ?>
                <?php while($row5 = mysqli_fetch_array($exe5)) { ?>
                    <div class="media post_item">                    
                        <img src="../img/Berita/<?php echo $row5['gambar'];?>" alt="post" style="width: 100px;">
                        <div class="media-body">
                            <a href="berita_detail.php?id_berita=<?php echo $row5['id_berita'];?>" onclick="location.href=this.href+'&id_user='+tampil;return false;"><h3><?php echo $row5['judul'];?></h3></a>
                            <p><?php echo date('d F Y', strtotime($row5['tanggal']));?></p>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>                            
            <div class="br"></div>
        </aside>
        <aside class="single_sidebar_widget ads_widget">
            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
            <div class="br"></div>
        </aside>
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Info Terkini</h4>
            <ul class="list cat-list">
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Sumatra</p>
                        <?php 
                        $query = "SELECT COUNT(*) AS sumatra FROM wisata WHERE id_kategori=1";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <p><?php echo $bu['sumatra']; ?></p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Jawa</p>
                        <?php 
                        $query = "SELECT COUNT(*) AS jawa FROM wisata WHERE id_kategori=2";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <p><?php echo $bu['jawa']; ?></p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Kalimantan</p>
                        <?php 
                        $query = "SELECT COUNT(*) AS kalimantan FROM wisata WHERE id_kategori=3";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <p><?php echo $bu['kalimantan']; ?></p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Sulawesi</p>
                        <?php 
                        $query = "SELECT COUNT(*) AS sulawesi FROM wisata WHERE id_kategori=4";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <p><?php echo $bu['sulawesi']; ?></p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Papua</p>
                        <?php 
                        $query = "SELECT COUNT(*) AS papua FROM wisata WHERE id_kategori=5";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <p><?php echo $bu['papua']; ?></p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Berita</p>
                        <?php 
                        $query = "SELECT COUNT(*) AS berita FROM berita";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <p><?php echo $bu['berita'];?></p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Pengguna</p>
                        <?php 
                        $query = "SELECT COUNT(*) AS pengguna FROM user WHERE level='user'";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <p><?php echo $bu['pengguna'];?></p>
                    </a>
                </li>															
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Penulis</p>
                        <?php 
                        $query = "SELECT COUNT(*) AS penulis FROM penulis";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <p><?php echo $bu['penulis'];?></p>
                    </a>
                </li>
            </ul>
            <div class="br"></div>
        </aside>
        <aside class="single-sidebar-widget newsletter_widget">
            <h4 class="widget_title">Instagram</h4>
            <p>
                Dimohon untuk pengguna Peonpegu agar segera mengikuti pemilik perusahaan ini yaitu Rizki Karianata di Instagram. Terimakasih, selamat beraktivitas kembali.
            </p>
            <div class="form-group d-flex flex-row">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </div>
                    &nbsp;
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" value="mr.nata007">
                </div>
                <a href="#" class="bbtns">Follow</a>
            </div>	
            <p class="text-bottom">Kamu bisa berhenti mengikuti kapan saja.</p>	
            <div class="br"></div>							
        </aside>
        <aside class="single-sidebar-widget tag_cloud_widget">
            <h4 class="widget_title">Hastag</h4>
            <ul class="list">
                <li><a href="#">Teknologi</a></li>
                <li><a href="#">Peonpegu</a></li>
                <li><a href="#">Kebudayaan</a></li>
                <li><a href="#">Php</a></li>
                <li><a href="#">Javascript</a></li>
                <li><a href="#">Budaya</a></li>
                <li><a href="#">Sejarah</a></li>
                <li><a href="#">Misteri</a></li>
                <li><a href="#">Perjalanan</a></li>
                <li><a href="#">Makanan</a></li>
                <li><a href="#">Gaya Hidup</a></li>
                <li><a href="#">Argosingo</a></li>
            </ul>
        </aside>
    </div>
</div>
</div>
</div>
</section>
<!--================Blog Area =================-->

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
<script src="../js/mail-script.js"></script>
<script src="../vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="../vendors/counter-up/jquery.counterup.js"></script>
<script src="../js/theme.js"></script>
</body>
</html>