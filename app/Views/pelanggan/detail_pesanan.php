<?= $this->extend('layouts/pelanggan/app') ?>

<?= $this->section('content') ?>

<main id="main">

    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 80vh;">
        <div class="card col-8 mt-5">
            <div class="card-header text-center bg-light">
                <h2>DETAIL PESANAN</h2>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-3 col-form-label text-dark fs-6">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-3 col-form-label text-dark fs-6">Alamat</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="alamat" name="alamat"/>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <label for="jns_mtr" class="col-sm-3 col-form-label text-dark fs-6">Jenis Motor</label>
                        <div class="col-sm-3">
                            <input type="text" class="dorm-control" id="jns_mtr" name="jns_mtr" aria-label="Disabled input example" disabled/>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <label for="area" class="col-sm-3 col-form-label text-dark fs-6">Pilih Area Pencucian</label>
                        <div class="col-sm-2">
                            <select type="text" class="form-select" id="area" name="area">
                                <option value="">Pilih Area</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                    </div>

                    <a href="#" class="btn btn-success mt-3">Selanjutnya</a>
                </form>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?= $this->endSection() ?>