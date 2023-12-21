<?= $this->extend('layouts/pelanggan/header') ?>

<?= $this->section('content') ?>
        <div class="container" >
    <div class="table-responsive" style=" background: none !important;">
    <style>
        .bs-table-bg{background: none;}
    </style>
        <table class=" table" id="datatable"  style="--bs-table-bg: transparent; background: none !important;">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Terakhir Diubah</th>
                    <th scope="col">Ukuran File</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="bi bi-folder2"></i> Laporan Keuangan Januari 2023</td>
                    <td>31/01/2023</td>
                    <td>16 KB</td>
                    <td><a class="btn btn-sm btn-secondary" href="detail">Lihat</a></td>
                </tr>
                <tr>
                    <td><i class="bi bi-folder2"></i> Laporan Keuangan Februari 2023</td>
                    <td>28/02/2023</td>
                    <td>16 KB</td>
                    <td><a class="btn btn-sm btn-secondary" href="detail">Lihat</a></td>
                </tr>
                <tr>
                    <td><i class="bi bi-folder2"></i> Laporan Keuangan Maret 2023</td>
                    <td>31/03/2023</td>
                    <td>16 KB</td>
                    <td><a class="btn btn-sm btn-secondary" href="detail">Lihat</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<main id="main" >
<section id="trainers" class="trainers">
            <div class="container" >

                <div class="row" >
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="/assets/img/firman.jpeg" class="img-fluid" alt="" style="width: 300px; height: 358px;">
                            <div class="member-content">
                                <h4>Firman Ahmad Bayumi</h4>
                                <span>Web Development</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="/assets/img/annisa.jpeg" class="img-fluid" alt="" style="width: 300px; height: 358px;">
                            <div class="member-content">
                                <h4>Annisa Nur Fadhilah</h4>
                                <span>Marketing</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="/assets/img/naufal.jpeg" class="img-fluid" alt="" style="width: 300px; height: 358px;">
                            <div class="member-content">
                                <h4>Naufal Elliando Fatahilla</h4>
                                <span>Content</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Trainers Section -->
</main>

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

<?= $this->endSection() ?>