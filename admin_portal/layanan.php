<?php
 $title='Service Type';
  include('header.php');
  include('include/db.php');
  include('include/function.php');
  include('secure.php');
  //menyisipkan file untuk relasi php yang lain
  
 if(isset($_POST['Add_ser_type']))
     {
        extract($_POST);
    $insert = "insert into services_type(Services_Name) 
     VALUES('".$Services_Name."')";

     $query = $db->query($insert);
   if($query){
   include('SMS/Change_password.php');
   }
   //
  
};
if(isset($_GET["SNaction"]))

{
$sel="DELETE FROM services_type WHERE Id ='".$_GET["ID"]."' ";
$objExecute=$db->query($sel);
  // if($info){
   if($objExecute)
   {
     include('SMS/Successful_Delete.php');
   }
   header("location:Register_Services.php");
  }
  //menghapus tipe layanan


    ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php  include('nav.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Semua jenis layanan</li>
      </ol>
      <!-- Icon Cards-->
     
      <!-- Area Chart Example-->
    
      <div class="card mb-3">
        <div class="card-header">
        <i class="fa fa-user"></i>  Tambahkan jenis layanan baru</div>
        <div class="card-body">
          <form action="" method="POST" >
          <div class="row">
            
         
          <div class="form-group col-lg-6">
            <label for="">Jenis nama layanan </label>
            <input type="text"  class="form-control" name="Services_Name" required=""  placeholder="Masukan jenis layanan">
          </div>
         
           <div class="form-group col-lg-6">
            <label for="">Submit </label>
            <input type="submit"   class="form-control btn btn-primary" name="Add_ser_type">
          </div>
        </div>
       </form> 
      </div>
      <!-- form untuk menambahkan layanan baru --> 
        
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Semua Catatan Layanan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <!--Tabel untuk data layanan-->
              
              
              <tbody>
                <?php
                 $Show=Serv_typ_record();
                $count='0';
                 while ($row=$Show->fetch_object()) {
                   $count++;
                ?>
                <tr>
                  <th><?php echo $count; ?></th>
                  <th><?php echo $row->Services_Name; ?></th>
                  <td><a 
                   onclick="return confirm('Are you sure you want to delete this entry?')"
                    href="Register_Services.php?SNaction&ID=<?php echo $row->ID; ?>" class=" btn btn-primary">Hapus</a></td>
                </tr>
                <?php  # code...
                 };?>
                <!-- Menampilkan semua catatan layanan  -->
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Semua jenis layanan pada laundry barokah</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   <?php include('footer.php');?>
  </div>
</body>

</html>
