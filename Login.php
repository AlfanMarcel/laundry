<?php
include('include/Connection.php');
// if (isset($_POST['login'])) {
//   extract($_POST);
//   $sel = "SELECT * from user_login where User_Name='" . $username . "' and Password='" . $psw . "'";
//   $info = $db->query($sel);
//   $row = $info->fetch_object();
//   if ($info->num_rows > 0) {
//     $valid = true;
//     session_start();
//     $_SESSION['USER_Portal'] = true;
//     $_SESSION['User_id'] = $row->ID;
//     $_SESSION['User_NAME'] = $row->User_Name;
//     $_SESSION['Password'] = $row->Password;
//     header("location:User/index.php");
//   } else {
//     $valid = false;
//   }
// }

// Mendapatkan data dari form login
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $psw = $_POST['psw'];

  // Cek apakah user adalah admin atau pengguna biasa
  $query = "SELECT * from user_login where User_Name='" . $username . "' and Password='" . $psw . "'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);

  if ($result->num_rows > 0) {
    // User ditemukan di tabel "user"
    $valid = true;
    session_start();
    $_SESSION['USER_Portal'] = true;
    $_SESSION['User_id'] = $row['ID'];
    $_SESSION['User_NAME'] = $row['User_Name'];
    $_SESSION['Password'] = $row['Password'];
    header("location:User/index.php");
  } else {
    // Cek apakah user adalah admin
    $query = "SELECT * from admin_login where Adm_Name='" . $username . "' and Adm_Password='" . $psw . "'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    if ($result->num_rows > 0) {
      //perintah untuk memasukan file header,db,function 
      include('header.php');
      // menginclude file header 
      include('include/db.php');
      // menginclude file db 
      include('include/function.php');
      // menginclude file function 
      // Login berhasil, simpan data admin ke sesi
      session_start();
      $_SESSION['Admin_Portal'] = true;
      $_SESSION['ID'] = $row['ID'];
      $_SESSION['Password'] = $row['Adm_Password'];
      header("location:admin_portal/index.php");
    } else {
      // User tidak ditemukan
      $valid = false;
    }
  }
}
?>

?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    .modal-header,
    h1,
    .close {
      background-color: #40DFEF;
      color: white !important;
      text-align: center;
      font-size: 30px;
    }

    .modal-footer {
      background-color: #f9f9f9;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header" style="padding:30px 50px;">
            <h1>Login</h1>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <?php if (isset($valid) && $valid == false) { ?>
              <div class="alert alert-danger">
                Username dan Nomor hp salah
              </div>
            <?php } ?>
            <form role="form" method="POST" action="">
              <div class="form-group">
                <label for="username"> Username</label>
                <input type="text" class="form-control" name="username" required="" placeholder="Masukan Username">
              </div>
              <div class="form-group">
                <label for="psw"></span> Nomor Hp</label>
                <input type="text" class="form-control" name="psw" required="" placeholder="Masukan nomor hp">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Ingatkan Saya</label>
              </div>
              <button type="submit" name="login" class="btn btn-info btn-block"> Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <p>Belum punya akun? <a href="Registration.php">Daftar akun baru</a></p>
          </div>
        </div>

      </div>
    </div>
  </div>



  <script type="text/javascript">
    $(window).on('load', function() {
      $('#myModal').modal('show');
    });

    $('#myModal').modal({
      backdrop: 'static',
      keyboard: true
    })
  </script>
</body>

</html>