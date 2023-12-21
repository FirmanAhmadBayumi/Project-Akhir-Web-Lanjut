<?= $this->extend('layouts/pelanggan/app') ?>

<?= $this->section('content') ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Motor Bersih,<br>Perjalanan Aman!</h1>
        <h2>Motor Mu Butuh Lebih dari Sekedar Cucian, Ia Membutuhkan Perawatan Terbaik Untuk Selalu Tampil Optimal
            dan Bertahan Lama - Pilihlah Cucian Motor Kami, Karena Kami Mengerti dan Peduli akan Kebutuhan Motor
            Mu."</h2>
        <a href="<?= base_url('pelanggan/pesan') ?>" class="btn-get-started">Pesan Sekarang</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Kenapa Memilih Menggunakan Jasa Kami?</h3>
                        <p>
                            Dengan berbagai keunggulan ini, Perusahaan Cucian Motor Bersih Gemilang menjadi pilihan
                            utama bagi mereka yang menginginkan perawatan terbaik untuk motor mereka.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Peralatan dan Bahan Berkualitas Tinggi</h4>
                                    <p>Kami menggunakan peralatan canggih dan bahan pembersih berkualitas tinggi
                                        untuk memastikan motor pelanggan kami mendapatkan perawatan terbaik.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Kepuasan Pelanggan</h4>
                                    <p>Kepercayaan pelanggan adalah prioritas utama kami. Kami berusaha keras untuk
                                        memastikan bahwa setiap pelanggan merasa puas dengan layanan kami.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Kebersihan dan Keamanan</h4>
                                    <p>Kebersihan dan keamanan adalah prioritas utama kami. Kami menjaga fasilitas
                                        kami agar selalu bersih dan aman untuk pelanggan.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="<?= base_url('assets/img/firman.jpeg') ?>" class="img-fluid" alt=""
                            style="width: 300px; height: 358px;">
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
                        <img src="<?= base_url('assets/img/annisa.jpeg') ?>" class="img-fluid" alt=""
                            style="width: 300px; height: 358px;">
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
                        <img src="<?= base_url('assets/img/naufal.jpeg') ?>" class="img-fluid" alt=""
                            style="width: 300px; height: 358px;">
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

</main><!-- End #main -->

<?= $this->endSection() ?>
