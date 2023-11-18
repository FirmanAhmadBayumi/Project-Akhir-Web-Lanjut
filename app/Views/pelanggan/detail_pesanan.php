<?= $this->extend('layouts/pelanggan/app') ?>

<?= $this->section('content') ?>

<main id="main">
    
    <form method="POST" action="<?= base_url('pelanggan/pesan/data') ?>">
        <div class="container" style="display: flex; justify-content: center; align-items: center; height: 80vh;">
            <div class="card col-8 mt-5">
                <div class="card-header text-center bg-light">
                    <h2>DETAIL PESANAN</h2>
                </div>
                <div class="card-body">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-3 col-form-label text-dark fs-6">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control  <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>"
                                id="nama" name="nama" />
                                <div class="invalid-feedback">
                                    <?= validation_show_error('nama') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-3 col-form-label text-dark fs-6">Alamat</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control <?= (empty(validation_show_error('alamat'))) ? '' : 'is-invalid' ?>"
                                id="alamat" name="alamat" />
                                <div class="invalid-feedback">
                                    <?= validation_show_error('alamat') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="tgl" class="col-sm-3 col-form-label text-dark fs-6">Tanggal Pemesanan</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control <?= (empty(validation_show_error('tgl'))) ? '' : 'is-invalid' ?>"
                                    id="tgl" name="tgl" />
                                <div class="invalid-feedback">
                                    <?= validation_show_error('tgl') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="jns_mtr" class="col-sm-3 col-form-label text-dark fs-6">Jenis Motor</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="jns_mtr" name="jns_mtr"
                                value="<?= htmlspecialchars($_GET['jenis_kendaraan'] ?? '') ?>" readonly/>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="area_pencucian" class="col-sm-3 col-form-label text-dark fs-6">Pilih Area Pencucian</label>
                            <div class="col-sm-3">
                                <select type="text" class="form-select <?= (empty(validation_show_error('area_pencucian'))) ? '' : 'is-invalid' ?>" 
                                id="area_pencucian" name="area_pencucian">
                                    <option value="" style="display:none;">Pilih</option>
                                    <?php
                                    foreach($area_pencucian as $area){
                                    ?>
                                    <option value="<?= $area['id']?>">
                                        <?= $area['area_pencucian'] ?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('area_pencucian') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="harga" class="col-sm-3 col-form-label text-dark fs-6">Harga</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="harga" name="harga"
                                value="<?= htmlspecialchars($_GET['harga'] ?? '') ?>" readonly/>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="bayar" class="col-sm-3 col-form-label text-dark fs-6">Bayar Menggunakan</label>
                            <div class="col-sm-4">
                                <select type="text" class="form-select <?= (empty(validation_show_error('bayar'))) ? '' : 'is-invalid' ?>" 
                                id="bayar" name="bayar">
                                    <option value="" style="display:none;">Pilih</option>
                                    <option value="Dana">Dana</option>
                                    <option value="Gopay">Gopay</option>
                                    <option value="Shopee Pay">Shopee Pay</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('bayar') ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Lakukan Transaksi</button>
                </div>
            </div>
        </div>
    </form>

</main><!-- End #main -->

<?= $this->endSection() ?>