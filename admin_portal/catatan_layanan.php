<?php
 $title='Dashboard';
 
  include('secure.php');
  include('header.php');
  include('include/db.php');
  include('include/function.php');
if(isset($_POST['Add_ser'])) // fungsi post
     {
        extract($_POST);  
        // fungsi menambah data ke database
    $insert = "insert into services_uploade(Services_Name,Services_Type,Dry_Price,Laundry_Price) 
     VALUES('".$Ser_Name."','".$Ser_Type."','".$Dry_Price."','".$Laundry_Price."')";

     $query = $db->query($insert);
   if($query){
   include('SMS/Change_password.php');
   }
  
};
if(isset($_GET["SRVaction"]))
{

// variabel untuk menghapus dari data yang ada di database
$sel="DELETE FROM services_uploade WHERE Id ='".$_GET["ID"]."' ";
$objExecute=$db->query($sel);
  // if($info){
   if($objExecute)
   {
    // menginclude tampilan hapus data sukses
     include('SMS/Successful_Delete.php');

   }
    header("location:Services_record.php");
   
}

    ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation -->
  <?php  include('nav.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Semua layanan laundry </li>
      </ol>
      <!-- Icon Cards-->
     
      <!-- Area Chart Example-->
    <!-- kelas card dalam menu layanan -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user"></i>  Menambahakan layanan baru</div>
        <div class="card-body">
          <form action="" method="POST" >
          <div class="row">
            <div class="form-group col-lg-3">
            <label for="">Jenis layanan </label>
            <select name="Ser_Type" class="form-control" required="" >
              <option hidden="" >Pilih jenis layanan</option>
               <?php $Show1=Serv_Type();
                $count='0';
                 while ($row=$Show1->fetch_object()) {
                   $count++;
                ?>
              <option value="<?php echo $row->Services_Name ?>"><?php echo $row->Services_Name ?></option>
                  <?php };?>
            </select>
            
          </div>
         <!-- kelas tabel pada tambah data layanan -->
          <div class="form-group col-lg-3">
            <label for="">Nama </label>
            <input type="text"  class="form-control" name="Ser_Name" required=""  placeholder="Masukan nama layanan">
          </div>
          <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">Harga Kering </label>
            <input type="number"  class="form-control" name="Dry_Price" maxlength="12" minlength="12" placeholder="Harga kering" required="">
          </div>

          <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">Harga Cucian </label>
            <input type="number"  class="form-control" name="Laundry_Price" maxlength="12" minlength="12" placeholder="Harga cucian" required="">
          </div>
           <div class="form-group col-lg-12">
            <input type="submit"  class="form-control btn btn-primary" name="Add_ser">
          </div>
        </div>
       </form> 
        </div>
        
      </div>
      <!-- Kelas DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Catatan semua layanan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <!-- penambahan kolom -->
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis</th>
                  <th>Harga Kering</th>
                  <th>Harga Cucian</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              
              <!-- ambil data dari database -->
              <tbody>
                <?php $Show=Serv_record();
                $count='0';
                 while ($row=$Show->fetch_object()) {
                   $count++;
                ?>
                <tr>
                  <th><?php echo $count; ?></th>
                  <th><?php echo $row->Services_Name; ?></th>
                  <td><?php echo $row->Services_Type; ?></td>
                  <td><?php echo $row->Dry_Price; ?></td>
                  <td><?php echo $row->Laundry_Price; ?></td>
                 
                  <td><a 
                   onclick="return confirm('Are you sure you want to delete this entry?')"
                    href="layanan.php?SRVaction&ID=<?php echo $row->ID; ?>" class=" btn btn-primary">Hapus</a></td>
                    <!-- pesan dalam hapus data -->
                </tr>
                <?php  # code...
                 };?>
                
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   <?php include('footer.php');?>
  </div>
</body>

</html>
