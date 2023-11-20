<?= $this->extend('layouts/pelanggan/app') ?>

<?= $this->section('content') ?>

<main id="main">
    <form method="POST" action="<?= base_url('/pelanggan/profil/' . $data_pelanggan['id']) ?>">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>
        <div class="container" style="display: flex; justify-content: center; align-items: center; height: 80vh;">
            <div class="card col-8 mt-5">
                <div class="card-header text-center bg-light">
                    <h2>Edit Data Pelanggan</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-3 col-form-label text-dark fs-6">Nama</label>
                            <div class="col-sm-6">
                                <input type="text"
                                    class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>"
                                    id="nama" name="nama" value="<?= ($data_pelanggan['nama']) ?>" />
                                <div class="invalid-feedback">
                                    <?= validation_show_error('nama') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="jk" class="col-sm-3 col-form-label text-dark fs-6">Jenis Kelamin</label>
                            <div class="col-sm-2">
                                <select type="text" class="form-select" id="jk" name="jk">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="alamat" class="col-sm-3 col-form-label text-dark fs-6">Alamat</label>
                            <div class="col-sm-7">
                                <textarea type="text"
                                    class="form-control <?= (empty(validation_show_error('alamat'))) ? '' : 'is-invalid' ?>"
                                    id="alamat" name="alamat"><?= $data_pelanggan['alamat'] ?></textarea>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('alamat') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="no_hp" class="col-sm-3 col-form-label text-dark fs-6">No Ponsel</label>
                            <div class="col-sm-3">
                                <input type="text"
                                    class="form-control <?= (empty(validation_show_error('no_hp'))) ? '' : 'is-invalid' ?>"
                                    id="no_hp" name="no_hp" value="<?= $data_pelanggan['no_hp'] ?>"/>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('no_hp') ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </form>

</main><!-- End #main -->

<?= $this->endSection() ?>