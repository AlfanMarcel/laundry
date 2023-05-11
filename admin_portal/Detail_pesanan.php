<?php
 $title='Delivery Boy';

   include('secure.php');
   include('header.php');
   include('include/db.php');
   include('include/function.php');?>

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
        <li class="breadcrumb-item active">Info pesanan pengiriman</li>
      </ol>
      <!-- Icon Cards-->
     
      <!-- Area Chart Example-->
    
      
      <!-- Kelas DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-archive"></i>Detail Pesanan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <!-- penambahan kolom -->
                <tr>
                  <th>No</th>
                  <th>Kode Pesanan </th>
                  <th>Nama </th>
                  <th>Nomer Hp </th>
                  <th>Alamat</th>
                  <th>Tanggal Pengambilan</th>
                  <th>Tanggal Pengiriman</th>
                  <th>Total Harga</th>
                  <th>Tampil pemesanan</th>
                  <th>Pembaruan Status</th>
                </tr>
              </thead>
              
              <!-- status order selesai -->
              <tbody>
                <?php $Show=get_order_status_Count_complete();
                $count1='0';
                 while ($row=$Show->fetch_object()) {
                   $count1++;
                    $SID=$row->User_ID;
                    $QR_code=$row->Order_Code;
                ?>
                <tr>
                  <th><?php echo $count1; ?></th>
                  <th>
                    <?php  
                     echo $QR_code;?>
                   </th>
                  <td><?php echo $row->User_Name; ?></td>
                  <td><?php echo $row->Phone_No; ?></td>
                  <td><?php echo $row->Address; ?></td>
                  <td><?php echo $row->Pick_up_date; ?></td>
                  <td><?php echo $row->Delivery_date; ?></td>
                  <td><?php echo $row->Total_Price; ?></td>
                  <td><?php echo $row->Delivery_status; ?></td>

                  <th>  <a  data-toggle="modal" data-target="#exampleModalUser_Order<?php echo $count1;?>" class=" btn btn-primary">Tampilkan</a>
                <?php
                     
                 include('view_User_Order_detail.php');?>
                  </th>
                     
                 
                
                </tr>
                              <?php  # code...
                               }?>
                             
                            </tbody>
                          </table>
                        </div>
                      </div>
                     
                    </div>
    </div>
    </div>

      
    </div>






    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include('footer.php');?>
  </div>
</body>

</html>
