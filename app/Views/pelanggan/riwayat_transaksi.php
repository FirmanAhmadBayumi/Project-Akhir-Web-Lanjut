<?= $this->extend('layouts/pelanggan/app') ?>

<?= $this->section('content') ?>

    <div id="content" class="p-100 p-md-5">
        <div class="box-wrapper">
            <div class="container-fluid">
                <br>
                <br>
                <br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3 ">
                        <h6 class="m-0 font-weight-bold text-dark">
                            Riwayat Transaksi
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Jenis Motor</th>
                                        <th>Area Pencucian</th>
                                        <th>Harga</th>
                                        <th>Jenis Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($data_transaksi as $transaksi){?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $transaksi['nama']?></td>
                                                <td><?= $transaksi['alamat'] ?></td>
                                                <td><?= $transaksi['tgl_pemesanan'] ?></td>
                                                <td><?= $transaksi['jenis_motor'] ?></td>
                                                <td><?= $transaksi['area_pencucian'] ?></td>
                                                <td><?= $transaksi['harga']?></td>
                                                <td><?= $transaksi['jns_pembayaran'] ?></td>
                                            </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>