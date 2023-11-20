<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Care Wash</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor-1 CSS Files -->
    <link href="/assets/vendor-1/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor-1/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor-1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor-1/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor-1/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor-1/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor-1/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mentor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body style="background: rgba(0, 0, 0, 0.1);">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Care Wash</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="dashboard">Laporan Keuangan</a></li>
                    <li><a href="tarif">Tarif Harga</a></li>
                    <li><a href="area">Area Pencuician</a></li>
                    <li><a href="logout">Keluar</a></li>
                   
                </ul>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
   <br><br><br><br><br><br><br>
   
   <main id="main" >
    <a href="tarif/tambah" class="btn btn-primary" style="position: absolute;top:12%;left:17%;">TAMBAH TARIF</a>
        <div class="container d-flex align-items-center flex-column">
        
        <?php foreach($data as $dt):?>
                <div class="d-flex " style="margin-bottom:3%;width:80%;height:30vh;background:white;position:relative;padding-left:10%;padding-top:1%;padding-bottom:1%;border-radius:50px;border:1px solid black;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <img style="width:227px;height:200px;object-fit:fill;"src="../<?= $dt['foto']; ?>"/>
                    <div class="title-card d-flex justify-content-center align-items-center flex-column text-dark" style="background-color: none;width:30%;height:100%;">
                    <h1> <?= $dt['jenis_kendaraan']; ?></h1>
                    <h1 class="inline-flex">Rp <?= number_format(intval($dt['harga']), 0, '.', '.'); ?></h1>
                    </div>
                    <style>
                    .btn-custom{
                        background:black;
                    }
                    </style>
                    <div class="button-group position-absolute d-flex flex-column justify-content-around" style="height:80%;right:10%;">
                        <a class="btn btn-custom" href="tarif/edit/<?= $dt['id']?>" style="background:#BCBCBC;color:white;">EDIT</a>
                        <a class="btn btn-danger" href="tarif/delete/<?= $dt['id']?>">HAPUS</a>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>
</main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor-1 JS Files -->
    <script src="/assets/vendor-1/purecounter/purecounter_vanilla.js"></script>
    <script src="/assets/vendor-1/aos/aos.js"></script>
    <script src="/assets/vendor-1/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor-1/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor-1/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js'"></script>

</body>

</html>

