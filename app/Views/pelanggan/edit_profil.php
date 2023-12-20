<?= $this->extend('layouts/pelanggan/app') ?>

<?= $this->section('content') ?>

<main id="main">
        <div class="container" style="display: flex; justify-content: center; align-items: center; height: 80vh;">
            <div class="card col-8 mt-5">
                <div class="card-header text-center bg-light">
                    <h2>Edit Data Pelanggan</h2>
                </div>
                <form method="POST" action="<?= base_url('/pelanggan/profil/' . $data_pelanggan['id']) ?>">
                <div class="card-body">
                        <input type="hidden" name="_method" value="PUT">
                        <?= csrf_field() ?>
                        <div class="row mt-3">
                            <label for="email" class="col-sm-3 col-form-label text-dark fs-6">Email</label>
                            <div class="col-sm-6">
                                <input type="email"
                                    class="form-control <?= (empty(validation_show_error('email'))) ? '' : 'is-invalid' ?>"
                                    id="email" name="email" value="<?= ($data_pelanggan['email']) ?>" />
                                <div class="invalid-feedback">
                                    <?= validation_show_error('email') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="username" class="col-sm-3 col-form-label text-dark fs-6">username</label>
                            <div class="col-sm-3">
                                <input type="text"
                                    class="form-control <?= (empty(validation_show_error('username'))) ? '' : 'is-invalid' ?>"
                                    id="username" name="username" value="<?= ($data_pelanggan['username']) ?>" />
                                <div class="invalid-feedback">
                                    <?= validation_show_error('username') ?>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-3">Simpan</button>
                    
                </div>
                </form>
            </div>
        </div>

</main><!-- End #main -->

<?= $this->endSection() ?>