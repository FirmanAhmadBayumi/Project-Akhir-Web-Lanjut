<?= $this->extend('layouts/pelanggan/header') ?>

<?= $this->section('content') ?>
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

<?= $this->endSection() ?>