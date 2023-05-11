<?php include('include/Connection.php');


if (isset($_POST['Formsubmit'])) {
    extract($_POST);

    $sql = "SELECT * from contact_form where  Name='" . $Name . "' and Phone_No='" . $Phone_No . "'  and Message='" . $Message . "'";
    $info = $db->query($sql);
    if ($info->num_rows > 0) {
    } else {
        $insert = "insert into contact_form(Name,Phone_No,Message) 
             VALUES('" . $Name . "','" . $Phone_No . "','" . $Message . "')";
        $query1 = $db->query($insert);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>AADC Laundry</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


</head>

<body>
    <div class="w3l_home">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#index.html" class="page-scroll">Home</a></li>
                        <li><a href="#services" class="page-scroll">Layanan</a></li>
                        <li><a href="#gallery" class="page-scroll">Gambar</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="Registration.php">Daftar Akun</a></li>
                </div>
            </div>
        </nav>
        <div class="w3l_bandwn">
            <h2>Selamat datang di AADC laundry </h2>
            <h3>Memudahkan dalam mencuci pakaian anda</h3>
            <div class="agile_dwng">
                <a href="#" data-toggle="modal" data-target="#myModal">Baca Selengkapnya </a>
                <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">AADC Laundry</h4>
                            </div>
                            <div class="modal-body">
                                <img src="images/Home.jpg" class="img-responsive" alt="tfg">
                                <p>Jaringan kami masih terus berkembang. Saat ini, kami beroperasi di area utama Sidoarjo kota dan
                                    kami akan segera menyebarkan cucian bersih ke seluruh kota. AADCLaundry ada di sini untuk
                                    menghemat waktu berharga Anda dan melepaskan beban dari pundak Anda, secara harfiah. Ini adalah
                                    layanan cuci pakaian berdasarkan permintaan. Jangan khawatir. Pakaian Anda akan berada di tangan
                                    tim yang berpengalaman dan profesional, yang terlatih khusus untuk menangani cucian anda dengan
                                    sangat hati-hati. Kami TIDAK PERNAH berkompromi pada kualitas. Deterjen yang aman dan ramah lingkungan
                                    serta produk dry-cleaning kualitas impor digunakan. Kami menjemput dan mengirim pakaian di depan pintu
                                    rumah Anda. Layanan kami tidak hanya cepat, bersih, efisien, tetapi juga sangat dapat diandalkan.
                                    Eksekutif layanan pelanggan kami secara khusus dilatih untuk memberikan panduan dan memastikan pengiriman
                                    tepat waktu.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services" id="services">
        <div class="container">
            <h3>Layanan</h3>
            <div class="col-md-4 hhh">
                <div class="wthree_rt">
                    <h4>Cuci Pakaian</h4>
                    <p>Kami melayani mencuci pakaian di tangan karyawan yang berpengalaman dan profesional
                        yang terlatih khusus untuk menangani pakaian anda dengan sangat hati hati
                    </p>
                </div>
            </div>

            <div class="col-md-4 hhh">
                <div class="wthree_rt">
                    <h4>Cuci Karpet</h4>
                    <p>Kami melayani cuci segala jenis karpet di area Sidoarjo, bisa pesan antar.
                        Karpet kami ambil jika sudah selesai dicuci kami antarkan kembali.
                    </p>
                </div>
            </div>

            <div class="col-md-4 hhh">
                <div class="wthree_rt">
                    <h4>Cuci Gorden</h4>
                    <p>Kami melayani pencucian Gorden di area Sidoarjo, bisa pesan antar.
                        Karpet kami ambil jika sudah selesai dicuci kami antarkan kembali.
                    </p>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="w3l_serdwn">
                <div class="col-md-4 hhh">
                    <div class="wthree_rt">
                        <h4>Pesan Antar</h4>
                        <p>Kami melayani jasa antar jemput gratis di area Kahuripan Nirwana,Jadi anda hanya memberikan barang ke karyawan
                            yang akan di jemput di rumah dan menunggu jika barang sudah selesai akan di antar di rumah.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 hhh">
                    <div class="wthree_rt">
                        <h4>Promo</h4>
                        <p>
                            Untuk setiap kali jasa cuciannya akan tercatat dikartu berlangganan,dimana
                            setelah 8 kali jasa cuci maka jasa cuci yang ke-9 akan gratis dengan ketentuan
                            berat cucian maksimal 3 kg.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 hhh">
                    <div class="wthree_rt">
                        <h4>Kontak</h4>
                        <p>Alamat : Sidoarjo-Kahuripan Nirwana </p>
                        <p>No hp : 087878807757</p>
                        <p>Email : aadclaundry@gmail.com</p>
                        <p>Instagram : aadclaundry</p>
                    </div>
                </div>

            </div>
        </div>


        <div class="gallery" id="gallery">
            <div class="container-fluid">
                <h3>Galeri</h3>

                <div class="about-bottom  w3ls-team-info">
                    <div class="col-md-12">
                        <div id="Carousel" class="carousel slide">

                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>

                                </div>


                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g6.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g6.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g7.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g7.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>

                                </div>


                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                            <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                                <img src="images/g5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                        </div>


                    </div>
                </div>
            </div>

        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/move-top.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/grayscale.js"></script>
        <script src="js/SmoothScroll.min.js"></script>




        <!-- //flexSlider -->
        <!-- /gallery -->
        <script src="js/jquery.tools.min.js"></script>
        <script src="js/jquery.mobile.custom.min.js"></script>
        <script src="js/jquery.cm-overlay.js"></script>

        <script>
            $(document).ready(function() {
                $('.cm-overlay').cmOverlay();
            });
        </script>
        <!-- //gallery -->
</body>

</html>