<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="../img/LogoG.png" type="image/png">
  <title>Peonpegu</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="Admin/Stisla/assets/css/style.css">
  <link rel="stylesheet" href="Admin/Stisla/assets/css/components.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <script type="text/javascript" src="Admin/Stisla/node_modules/YakinLogout/jquery.js"></script>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <a href="../index.php"><img src="../img/LogoG.png" alt="logo" width="89"></a><br><br><br>
            <h5 class="text-dark font-weight-normal">Selamat datang di <span class="font-weight-bold">Peonpegu</span></h5>
            <p class="text-muted">Sebelum kamu login, jangan lupa untuk berdoa serta isikan nama pengguna dan kata sandi.</p>
            <form method="POST" action="Proses/proses_login.php" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="username">Nama Pengguna</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-pen"></i>
                    </div>
                  </div>
                  <input id="username" type="text" class="form-control pwstrength" name="username" tabindex="1" data-indicator="pwindicator" required="">
                </div>
              </div>
              <div class="form-group">
                <label for="password">Kata Sandi</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span id="mybutton" onclick="change()"><i class="fas fa-lock"></i></span>
                    </div>
                  </div>
                  <input id="password" type="password" class="form-control pwstrength form-password" name="password" data-indicator="pwindicator" tabindex="1" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="setcookie" class="custom-control-input" tabindex="3" id="setcookie" value="true">
                  <label class="custom-control-label" for="setcookie">Ingat saya</label>
                </div>
              </div>
              <div class="form-group text-right">
                <a href="register/reset_password.php" class="float-left mt-3">
                  Lupa kata sandi?
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Masuk
                </button>
              </div>
              <div class="mt-5 text-center">
                Tidak punya akun? <a href="register/registrasi.php">Buat yang baru</a>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" 
        <?php
        date_default_timezone_set("Asia/Jakarta");

        $b = time();
        $hour = date("G",$b);        
        if ($hour>=0 && $hour<=10)
        {
          echo "data-background='Admin/Stisla/assets/img/unsplash/login-bg.jpg'";
        }        
        elseif ($hour >=11 && $hour<=14)
        {
          echo "data-background='Admin/Stisla/assets/img/unsplash/Siang.jpg'";
        }
        elseif ($hour >=15 && $hour<=17)
        {
          echo "data-background='Admin/Stisla/assets/img/unsplash/Senja3.jpg'";
        }
        elseif ($hour >=18 && $hour<=24)
        {
          echo "data-background='Admin/Stisla/assets/img/unsplash/Night.jpg'";
        }
        ?>>
        <div class="absolute-bottom-left index-2">
          <div class="text-light p-5 pb-2">
            <div class="mb-5 pb-3">
              <?php
              date_default_timezone_set("Asia/Jakarta");

              $b = time();
              $hour = date("G",$b);

              if ($hour>=0 && $hour<=10)
              {
                echo "<h1 class='mb-2 display-4 font-weight-bold'>Selamat Pagi</h1>";
              }
              elseif ($hour >=11 && $hour<=14)
              {
                echo "<h1 class='mb-2 display-4 font-weight-bold'>Selamat Siang</h1>";
              }
              elseif ($hour >=15 && $hour<=17)
              {
                echo "<h1 class='mb-2 display-4 font-weight-bold'>Selamat Sore</h1>";
              }
              elseif ($hour >=18 && $hour<=24)
              {
                echo "<h1 class='mb-2 display-4 font-weight-bold'>Selamat Malam</h1>";
              }

              ?>

              <h5 class="font-weight-normal text-muted-transparent">Malang, Indonesia</h5>
            </div>
            Foto oleh <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Rizki Karianata</a> di <a class="text-light bb" target="_blank" href="https://unsplash.com">Facebook</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="Admin/Stisla/assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="Admin/Stisla/assets/js/scripts.js"></script>
<script src="Admin/Stisla/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script type="text/javascript">
         function change()
         {
            var x = document.getElementById('password').type;
 
            if (x == 'password')
            {
               document.getElementById('password').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="fas fa-unlock"></i>';
            }
            else
            {
               document.getElementById('password').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="fas fa-lock"></i>';
            }
         }
      </script>
</body>
</html>