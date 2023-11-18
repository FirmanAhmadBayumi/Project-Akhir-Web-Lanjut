<?= $this->extend('layouts/pelanggan/app') ?>

<?= $this->section('content') ?>

<main id="main">

    <div class="container mb-5" style="display: flex; justify-content: center; align-items: center; height: 70vh;">
        <div class="card mt-5" style="width: 25rem;">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Data Pelanggan</h3>
                <table>
                    <tr>
                        <th>Nama</th>
                        <td> :
                            <?= $data_pelanggan['nama'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin </th>
                        <td> :
                            <?= $data_pelanggan['jenis_kelamin'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td> :
                            <?= $data_pelanggan['alamat'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>No. Ponsel</th>
                        <td> :
                            <?= $data_pelanggan['no_hp'] ?>
                        </td>
                    </tr>
                </table>
                <a href="<?= base_url('pelanggan/profil/' . $data_pelanggan['id'] . '/edit') ?>" 
                class="btn btn-warning mt-3">Edit</a>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?= $this->endSection() ?>