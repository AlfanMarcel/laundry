<?php
// include file untuk relasi 
include('secure.php');
$title = 'Dashboard';
include('header.php');
include('include/db.php');
include('include/function.php');
//menyisipkan file _secure,header,db,funnction
?>
<!--Tampilan pada dasboard admin-->

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!--menyisipkan file nav.php untuk navigasi pada halaman dashboard-->
  <?php include('nav.php'); ?>
  <!-- include file nav untuk navigasi di menu dashboard-->
  <!-- kelas untuk tampilan -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <!-- teks dashboard akan dikaitkan ke index.php -->
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

      <!-- kelas untuk menambah sebuah box layout jika sebuah data ditambah -->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-cutlery"></i>
              </div>
              <div class="mr-5">
                <?php echo get_menu_Count(); ?>
                Total Layanan Laundry
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="catatan_layanan.php">
              <span class="float-left">Lihat layanan</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"><?php echo Total_user_reg() ?> Akun pendaftar</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="Register_user.php">
              <span class="float-left">Lihat pendaftar</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php $total = get_order_status_Count();
                                echo $total->num_rows; ?> Pending Order!
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="Pending_Order.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->


      <!-- Example DataTables Card-->
      <!-- penambahan box layout jika tertambah sebuah data pesanan -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-archive"></i>Pending Order
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <!-- form untuk sebuah pesanan -->
                <tr>
                  <th>No</th>
                  <th>Kode pesanan </th>
                  <th>Nama </th>
                  <th>Nomer Hp </th>
                  <th>Alamat</th>
                  <th>Tanggal Penjemputan</th>
                  <th>Tanggal Pengiriman</th>
                  <th>Total Harga</th>
                  <th>Status</th>
                  <th>Lihat pesan</th>
                  <th>Status Update</th>
                </tr>
              </thead>

              <tbody>
                <?php $Show = get_order_status_Count();
                $count1 = '0';
                while ($row = $Show->fetch_object()) {
                  $count1++;
                  $SID = $row->User_ID;
                  $USer_NAME = $row->User_Name;
                  $QR_code = $row->Order_Code;
                ?>
                  <tr>
                    <th><?php echo $count1; ?></th>
                    <th><?php echo $QR_code; ?> </th>
                    <td><?php echo $row->User_Name; ?></td>
                    <td><?php echo $row->Phone_No; ?></td>
                    <td><?php echo $row->Address; ?></td>
                    <td><?php echo $row->Pick_up_date; ?></td>
                    <td><?php echo $row->Delivery_date; ?></td>
                    <td><?php echo $row->Total_Price; ?></td>
                    <td><?php echo $row->Delivery_status; ?></td>
                    <th> <a data-toggle="modal" data-target="#exampleModalUser_Order<?php echo $count1; ?>" class=" btn btn-primary">View</a>
                      <?php

                      //  menambah data dari user yang order
                      include('view_User_Order_detail.php'); ?>
                    </th>
                    <!-- menambah tampilan layanan antar jemput laundry -->
                    <td> <a data-toggle="modal" data-target="#exampleModalchangestatus<?php echo $count1; ?>" class=" btn btn-primary">Change Status</a>
                      <?php include('Status_Update.php'); ?>

                    </td>

                  </tr>
                <?php  # code...
                } ?>

              </tbody>
            </table>
          </div>
        </div>

      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
      <?php include('footer.php'); ?>
    </div>
</body>

</html>