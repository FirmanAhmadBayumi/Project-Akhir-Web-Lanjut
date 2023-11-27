<?= $this->extend('layouts/pelanggan/header') ?>

<?= $this->section('content') ?>
<div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <h3 align="center">CareWash</h3>
    </nav>
    <hr>
   
    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" method="post" >
                <div class="form-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" value="<?= $data['jenis_kendaraan'];?>" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $data['harga'];?>" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" required>
                </div>
                <div class="d-flex align-items-center ">
                    <a href="../../tarif" class="btn btn-danger mr-2 m-3">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <script>
                const jenisKendaraanInput = document.getElementById('jenis_kendaraan');
                    const hargaInput = document.getElementById('harga');
                    const gambarInput = document.getElementById('gambar');

                    jenisKendaraanInput.addEventListener('input', () => {
                    const value = jenisKendaraanInput.value.trim();

                    if (!value) {
                       
                    } else {
                    
                    }
                    });

                    hargaInput.addEventListener('input', () => {
                    const value = hargaInput.value.trim();

                    if (!value) {
                        // Display error message for Harga
                      
                        
                    } else {
                        // Remove error message if it exists for Harga
                        
                    }
                    });

                   

            </script>
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
