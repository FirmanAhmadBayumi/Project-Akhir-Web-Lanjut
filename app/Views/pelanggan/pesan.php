<?= $this->extend('layouts/pelanggan/app') ?>

<?= $this->section('content') ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Motor Bersih,<br>Perjalanan Aman!</h1>
            <h2>Motor Mu Butuh Lebih dari Sekedar Cucian, Ia Membutuhkan Perawatan Terbaik Untuk Selalu Tampil Optimal
                dan Bertahan Lama - Pilihlah Cucian Motor Kami, Karena Kami Mengerti dan Peduli akan Kebutuhan Motor
                Mu."</h2>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Trainers Section ======= -->
        <section id="trainers" class="trainers">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="../assets/img/motor-bebek.jpeg" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Motor Bebek (Cub)</h4>
                                <span>Harga: Rp. 15.000</span>
                                <a href="<?= base_url('pelanggan/pesan/detail_pesanan') ?>" class="mt-3 btn btn-success btn-get-started">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="../assets/img/motor-matic.jpeg" class="img-fluid" style="width: 100%vh;" alt="">
                            <div class="member-content">
                                <h4>Motor Matic (Scooter)</h4>
                                <span>Harga: Rp. 20.000</span>
                                <a href="<?= base_url('pelanggan/pesan/detail_pesanan') ?>" class="mt-3 btn btn-success btn-get-started">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="../assets/img/motor-laki.jpeg" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Motor Laki (Sport-Bike)</h4>
                                <span>Harga: Rp. 45.000</span>
                                <a href="<?= base_url('pelanggan/pesan/detail_pesanan') ?>" class="mt-3 btn btn-success btn-get-started">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Trainers Section -->

    </main><!-- End #main -->

    <?= $this->endSection() ?>