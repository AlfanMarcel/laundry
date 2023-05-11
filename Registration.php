<?php include('include/Connection.php');

if(isset($_POST['submit'])){
   extract($_POST);

    $sql = "SELECT * from user_registration where  User_Name='".$usrname."' and Contact_No='".$Contact_No."' ";
      $info = $db->query($sql);
          if($info->num_rows>0) 
          { 
            $valid = 'Allready'; 
          }else{
            $insert = "insert into user_registration(User_Name,Nick_Name,Password,Address,Contact_No) 
             VALUES('".$usrname."','".$nickname."','".$Contact_No."','".$address."','".$Contact_No."')";
              $query1 = $db->query($insert);

              $insert1 = "insert into user_login(User_Name,Password) 
             VALUES('".$usrname."','".$Contact_No."')";
             $query = $db->query($insert1);
             if($query1){
              $valid = 'true';
             }else{
              $valid = 'false';
             }
          }
    
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran Akun</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #40DFEF;
      color:white !important;
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
        <div class="modal-header" style="padding:35px 50px;">
          <h4>Daftar Akun</h4>
        </div>
        <?php if(isset($valid) && $valid == 'false') { ?>
        <div class="alert alert-danger">
          Username dan password salah
                </div>
                <?php };
                if(isset($valid) && $valid == 'true') { ?>
        <div class="alert alert-success">
          Pendaftaran berhasil
                </div>
                <?php };
                if(isset($valid) && $valid == 'Allready') { ?>
        <div class="alert alert-danger">
          Pengguna sudah terdaftar
                </div>
                <?php } ?>       
        <div class="modal-body" style="padding:40px 50px;">
          <form  role="form" method="post" action=""> 
            <div class="form-group">
             <label for="usrname">Username</label>
              <input type="text" class="form-control"
               id="usrname" required="" name="usrname" placeholder="Masukan Username">
            </div>

             <div class="form-group">
             <label for="psw">Nama Panggilan</label>
              <input type="text" class="form-control" name="nickname" required="" placeholder="Masukan nama panggilan">
            </div>

             <div class="form-group">
             <label for="psw">Nomer hp</label>
              <input type="Number" class="form-control" name="Contact_No" required="" placeholder="Masukan nomor hp">
            </div>

             <div class="form-group">
             <label for="psw">Alamat</label>
              <input type="text" class="form-control" name="address" required="" placeholder="Masukan alamat">
            </div>

            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Ingat saya</label>
            </div>
            <input type="submit" name="submit" class="form-control btn btn-info btn-block"  placeholder="Submit">
          </form>
        </div>
        <div class="modal-footer">
          <p><a href="index.php">Website</a></p>
          <p>Sudah daftar lakukan <a href="Login.php ">Login</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });

    $('#myModal').modal({
    backdrop: 'static',   
    keyboard: true        
})
</script>
</body>
</html>
