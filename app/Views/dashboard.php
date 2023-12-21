<?= $this->extend("layouts/app") ?>

<?= $this->section("content") ?>
    <!-- ======= Hero Section ======= -->
   <br><br><br><br><br><br><br>
    <main id="main">
        <div class="container">
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
</main>


