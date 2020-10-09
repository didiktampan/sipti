<?php 
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="../../img/LogoG.png" type="image/png">
  <title>Peonpegu</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../Admin/Stisla/assets/css/style.css">
  <link rel="stylesheet" href="../Admin/Stisla/assets/css/components.css">

  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../Admin/Stisla/assets/img/stisla-fill.svg" alt="logo"  width="80" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Registrasi</h4>
                <div class="card-header-action">
                  <input type="button" value="Back" class="btn btn-primary" onclick="history.back()">
                </div>                          
              </div>

              <div class="card-body">
                <form action="add_user.php"method="POST">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" autofocus required="">
                  </div>
                  <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <input id="username" type="text" class="form-control" name="username" required="" pattern="[A-Za-z0-9]+">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Kata Sandi</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required="" pattern="[A-Za-z0-9]+">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="ulang_password" class="d-block">Ulangi Kata Sandi</label>
                      <input id="ulang_password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="ulang_password" required="" pattern="[A-Za-z0-9]+">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" required="" pattern="[A-Za-z0-9@.]+">
                      <div class="invalid-feedback">
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="email">Nomor Telepon</label>
                      <input id="no_hp" type="number" class="form-control" name="no_hp" required="">
                      <div class="invalid-feedback">
                      </div>
                    </div>
                  </div>
                  <a href="../index.php">Sudah punya akun?</a> 
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Buat
                    </button>
                  </div>
                </form>
              </div>
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
  <script src="../Admin/Stisla/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <!-- Template JS File -->
  <script src="../Admin/Stisla/assets/js/scripts.js"></script>
  <script src="../Admin/Stisla/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../Admin/Stisla/assets/js/page/auth-register.js"></script>
</body>
</html>
