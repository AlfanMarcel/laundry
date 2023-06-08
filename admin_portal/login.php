<?php
//memberikan title login pada website
$title = 'Login';

//perintah untuk memasukan file header,db,function 
include('header.php');
// menginclude file header 
include('include/db.php');
// menginclude file db 
include('include/function.php');
// menginclude file function 

// kondisi if dalam login
if (isset($_POST['login'])) {
  //memanggil data pada database yaitu data login pada admin
  extract($_POST);
  $sel = "SELECT * from admin_login where Adm_Name='" . $A_NAME . "' and Adm_Password='" . $A_PASSWORD . "'";
  $info = $db->query($sel);
  $row = $info->fetch_object();
  if ($info->num_rows > 0) {
    $valid = true;
    //melakukan eksekusi pada data apakah sudah benar apa belum
    session_start();
    $_SESSION['Admin_Portal'] = true;
    $_SESSION['ID'] = $row->ID;
    $_SESSION['Password'] = $row->Adm_Password;
    //jika data yang dimasukan benar maka akan diarahkan ke halaman admin index.php 
    header("location:index.php");
  } else {
    //jika data yang dimasukan salah maka tidak bisa masuk ke dalam ke halaman admin index.php
    $valid = false;
  }
}


?>


<!--ini adalah form login pada halaman admin login.php-->

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login</div>
      <div class="card-body">
        <form action="" method="post">
          <!-- kondisi login jika salah data login -->
          <?php if (isset($valid) && $valid == false) { ?>

            <div class="alert alert-warning alert-dismissible text-center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Invalid!</strong> Username or Password
            </div>

          <?php } ?>

          <!-- tampilan form untuk login -->
          <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input class="form-control" id="exampleInputEmail1" name="A_NAME" type="text" aria-describedby="emailHelp" placeholder="Enter User name" required="">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" required="" name="A_PASSWORD" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button type="submit" name="login" class="btn btn-primary btn-block">
            Sign in
          </button>

        </form>
        <div class="text-center"><!-- 
          <a class="d-block small mt-3" href="register.html">Register an Account</a> -->
          <br>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>