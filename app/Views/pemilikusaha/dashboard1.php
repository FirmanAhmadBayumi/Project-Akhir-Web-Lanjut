

<!-- Page Content  -->
<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<body>
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="bg-secondary">
      <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(https://avatars.githubusercontent.com/u/92315859?s=400&u=10a10a362ae996f70189923325175b1541d56e74&v=4)"></a>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="./dashboard">Laporan Keuangan</a>
          </li>
          <li>
            <a href="./tarif">Tarif Harga</a>
          </li>
          <li>
            <a href="#" onclick="logout()">Keluar</a>
          </li>
        </ul>
    </nav>
    <?= $this->renderSection('content') ?>
    </div>
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