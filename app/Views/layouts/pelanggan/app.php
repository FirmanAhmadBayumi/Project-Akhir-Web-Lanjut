<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor-1 CSS Files -->
    <link href="<?= base_url('../assets/vendor-1/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('../assets/vendor-1/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('../assets/vendor-1/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('../assets/vendor-1/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('../assets/vendor-1/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('../assets/vendor-1/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?= base_url('../assets/vendor-1/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('') ?>../assets/css/style.css" rel="stylesheet">
</head>

<body>
        <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">Care Wash</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="<?= base_url('pelanggan/dashboard') ?>">BERANDA</a></li>
                    <li><a href="<?= base_url('pelanggan/pesan') ?>">PESAN SEKARANG</a></li>
                    <li><a href="<?= base_url('pelanggan/riwayat_transaksi') ?>">RIWAYAT TRANSAKSI</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">PROFIL
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('/pelanggan/create_data_pelanggan') ?>">Tambah Data Pelanggan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/pelanggan/profil') ?>">Lihat Data Pelanggan</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('/') ?>">KELUAR</a></li>
                </ul>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <?= $this->renderSection('content') ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Care Wash</h3>
                        <p>
                            Universitas Lampung <br>
                            Bandar Lampung, Lampung<br>
                            Indonesia<br><br>
                            <strong>Phone:</strong> +62 1234 5678 90<br>
                            <strong>Email:</strong> carewash@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Carewash Company</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">Kelompok 10</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Vendor-1 JS Files -->
    <script src="<?= base_url('../assets/vendor-1/purecounter/purecounter_vanilla.js') ?>"></script>
    <script src="<?= base_url('../assets/vendor-1/aos/aos.js') ?>"></script>
    <script src="<?= base_url('../assets/vendor-1/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('../assets/vendor-1/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('../assets/vendor-1/php-email-form/validate.js') ?>"></script>
    
    <!-- Template Main JS File -->
    <script src="<?= base_url('../assets/js/main.js') ?>"></script>
    
    </body>
    
    </html>