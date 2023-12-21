<?= $this->extend('layouts/pelanggan/app') ?>

<?= $this->section('content') ?>

<main id="main">

    <div class="container mb-5" style="display: flex; justify-content: center; align-items: center; height: 70vh;">
        <div class="card mt-5" style="width: 25rem;">
            <h3 class="card-header text-center mb-1 bg-light">Data Pelanggan</h3>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Username</th>
                        <td> :
                            <?= $data_pelanggan['username'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Email </th>
                        <td> :
                            <?= $data_pelanggan['email'] ?>
                        </td>
                    </tr>
                </table>
                <!-- <a href="<?= base_url('pelanggan/profil/' . $data_pelanggan['id'] . '/edit') ?>" 
                class="btn btn-warning mt-3">Edit</a> -->
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?= $this->endSection() ?>