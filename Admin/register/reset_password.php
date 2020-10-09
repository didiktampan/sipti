<?php
include "../koneksi.php";
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
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Reset Kata Sandi</h4>
                <div class="card-header-action">
                  <input type="button" value="Back" class="btn btn-primary" onclick="history.back()">
                </div>                         
              </div>

              <div class="card-body">
                <form action="update_password.php" method="POST">
                  <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <select name="username" id="username" class="form-control" onchange='changeValue(this.value)' required>
                      <option value="">Pilih Nama Pengguna</option>
                      <?php
                      $query=mysqli_query($conn, "SELECT * FROM user ORDER BY username ASC"); 
                      $result = mysqli_query($conn, "SELECT * FROM user");  
                      $jsArray = "var prdName = new Array();\n";
                      while ($row = mysqli_fetch_array($result)) {  
                        echo '<option name="username"  value="' . $row['username'] . '">' . $row['username'] . '</option>';  
                        $jsArray .= "prdName['" . $row['username'] . "'] = {nama_lengkap:'" . addslashes($row['nama_lengkap']) . "',level:'".addslashes($row['level']). "',email:'".addslashes($row['email'])."',password:'".addslashes($row['password'])."'};\n";
                      }
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama_lengkap" id="nama_lengkap" readonly="">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" id="email" readonly="">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <input class="form-control" name="level" id="level" readonly="">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="password" id="password">
                  </div>                  
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="btnReset" tabindex="4" value="Reset Kata Sandi">
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
</body>
</html>
<script type="text/javascript"> 
  <?php echo $jsArray; ?>
  function changeValue(username){
    document.getElementById('nama_lengkap').value = prdName[username].nama_lengkap;
    document.getElementById('level').value = prdName[username].level;
    document.getElementById('password').value = prdName[username].password;
    document.getElementById('email').value = prdName[username].email;    
  };
</script>