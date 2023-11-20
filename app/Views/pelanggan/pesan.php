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
                <?php foreach ($data_kendaraan as $item) { ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="<?= $item['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Motor
                                    <?= $item['jenis_kendaraan'] ?>
                                </h4>
                                <span>Harga: Rp.
                                    <?= $item['harga'] ?>
                                </span>
                                <a href="<?= base_url('pelanggan/pesan/detail_pesanan?jenis_kendaraan=' . urlencode($item['jenis_kendaraan']) . '&harga=' . urlencode($item['harga'])) ?>"
                                    class="mt-3 btn btn-success btn-get-started">
                                    Pesan Sekarang
                                </a>
                                </div>
                            </div>
                        </div>
                <?php } ?>
                </div>
            </div>
    </section><!-- End Trainers Section -->

</main><!-- End #main -->

<?= $this->endSection() ?>