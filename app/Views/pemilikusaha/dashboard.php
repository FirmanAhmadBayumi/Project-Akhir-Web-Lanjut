<!-- Page Content  -->
<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <h3 align="center">Laporan Keuangan</h3>
    </nav>
    <hr>

    <div class="row mb-4">
        <div class="col-md-4">
            <select class="custom-select">
                <option selected>Laporan Keuangan Mingguan</option>
                <option selected>Laporan Keuangan Bulanan</option>
                <option selected>Laporan Keuangan Tahunan</option>
            </select>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table" id="datatable">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Terakhir Diubah</th>
                    <th scope="col">Ukuran File</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="bi bi-folder2"></i> Laporan Keuangan Januari 2023</td>
                    <td>31/01/2023</td>
                    <td>16 KB</td>
                    <td><a class="btn btn-sm btn-secondary" href="detail_laporan_keuangan.php">Lihat</a></td>
                </tr>
                <tr>
                    <td><i class="bi bi-folder2"></i> Laporan Keuangan Februari 2023</td>
                    <td>28/02/2023</td>
                    <td>16 KB</td>
                    <td><a class="btn btn-sm btn-secondary" href="detail_laporan_keuangan.php">Lihat</a></td>
                </tr>
                <tr>
                    <td><i class="bi bi-folder2"></i> Laporan Keuangan Maret 2023</td>
                    <td>31/03/2023</td>
                    <td>16 KB</td>
                    <td><a class="btn btn-sm btn-secondary" href="detail_laporan_keuangan.php">Lihat</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection()?>
<?php include('layout/footer.php'); ?>