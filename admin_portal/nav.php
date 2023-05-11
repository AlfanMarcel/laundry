<?php $file = $_SERVER["SCRIPT_NAME"];
// mengambil sebuah karakter "/" untuk menampilkan sebuah item layout
$break = explode('/', $file);
$pfile = $break[count($break) - 1];
// kondisi dalam navigasi item navbar
$pos = strpos($pfile, 'index');
if ($pos !== false) $is_Dashboard = true;

$pos = strpos($pfile, 'layanan');
if ($pos !== false) $is_Register_Services= true;

$pos = strpos($pfile, 'catatan_layanan.php');
if ($pos !== false) $is_Services_record= true;

$pos = strpos($pfile, 'Detail_pesanan');
if ($pos !== false) $is_order_Detail= true;

$pos = strpos($pfile, 'Register_user');
if ($pos !== false) $is_Register_user= true;

$pos = strpos($pfile, 'Info_pesan');
if ($pos !== false) $is_Message_Info= true;

$pos = strpos($pfile, 'ganti_password');
if ($pos !== false) $is_password_cahnge= true;
?>

<!-- navigasi untuk tampilan teks laundry -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Laundry | Admin Portal</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- penambahan menu navbar samping pada layput dashboard -->
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item  <?php echo(isset($is_Dashboard)?' active' : '')?>" data-toggle="tooltip" data-placement="right" title="Dashboard"
         > 
          <a class="nav-link " href="index.php" >
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
       <li class="nav-item  <?php echo(isset($is_Register_Services)?'active' : '')?>" data-toggle="tooltip" data-placement="right" title="Resister User">
          <a class="nav-link" href="layanan.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Jenis Layanan </span>
          </a>
        </li>


         <li class="nav-item <?php echo(isset($is_Services_record)?'active' : '')?>"  data-toggle="tooltip" data-placement="right" title="Resister User">
          <a class="nav-link" href="catatan_layanan.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Tambah Layanan </span>
          </a>
        </li>

        <li class="nav-item <?php echo(isset($is_Register_user)?'active' : '')?>" data-toggle="tooltip" data-placement="right" title="Resister User">
          <a class="nav-link" href="Register_user.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Pendaftaran Akun</span>
          </a>
        </li>


        <li class="nav-item <?php echo(isset($is_order_Detail)?'active' : '')?>" data-toggle="tooltip" data-placement="right" title="Delivery boy">
          <a class="nav-link" href="Detail_pesanan.php">
            <i class="fa fa-fw fa-truck"></i>
            <span class="nav-link-text">Detail Pesanan</span>
          </a>
        </li>
        <li class="nav-item <?php echo(isset($is_Message_Info)?'active' : '')?>" data-toggle="tooltip" data-placement="right" title="Delivery boy">
          <a class="nav-link" href="Info_pesan.php">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="nav-link-text">Informasi Pesan</span>
          </a>
        </li>

        <li class="nav-item <?php echo(isset($is_password_cahnge)?' active' : '')?>" data-toggle="tooltip" data-placement="right" title="Change Password">
          <a class="nav-link" href="ganti_password.php">
            <i class="fa fa-fw fa-lock"></i>
            <span class="nav-link-text">Change Password</span>
          </a>
        </li>
        
      </ul>

      <!-- tampilan button menu navbar atas untuk logout   -->
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item">
          <a class="nav-link"  data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
<!-- menampilkan alert pada pesan logout jika klik logout pada navbar atas -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <!-- pilihan logout terdapat Cancel & Logout -->
            <!-- jika cancel akan batal -->
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <!-- jika Logout akan mengambil file logout.php untuk sesi logout -->
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>