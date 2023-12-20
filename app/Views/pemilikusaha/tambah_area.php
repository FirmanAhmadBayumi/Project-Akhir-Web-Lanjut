<?= $this->extend('layouts/pelanggan/header') ?>

<?= $this->section('content') ?>
<div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <h3 align="center">CareWash</h3>
    </nav>
    <hr>

    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" method="post" action="#">
                <div class="form-group">
                    <label for="jenis_kendaraan">Nama</label>
                    <input type="text" class="form-control" id="jenis_kendaraan" name="nama" required>
                </div>
                <div class="d-flex align-items-center">
                    <a href="<?= base_url('pemilikusaha/area');?>" class="btn btn-danger mr-2 m-3">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>

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