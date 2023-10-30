<?php
include('layout/header.php');
require_once('database.php');
?>

<!-- Page Content  -->
<div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <h3 align="center">CareWash</h3>
    </nav>
    <hr>

    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" method="post" action="backend/tambah_tarif.php">
                <div class="form-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>
                <div class="d-flex align-items-center">
                    <a href="tarif_harga.php" class="btn btn-danger mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include('layout/footer.php'); ?>

<?php
if (isset($_GET['pesan'])) {
    $pesan;

    if ($_GET['pesan'] == 'ukuran_besar') {
        $pesan = "Ukuran File Terlalu Besar!";
    } elseif($_GET['pesan'] == 'ekstensi_salah') {
        $pesan = "Ekstensi Yang Diperbolehkan hanya (.png, .jpg, .jpeg)";
    } elseif($_GET['pesan'] == 'gagal') {
        $pesan = "Gagal Menambahkan Data Tarif Harga!";
    } elseif($_GET['pesan'] == 'kosong') {
        $pesan = "Silahkan Lengkapi Semua Data!";
    }
}
?>

<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= $pesan ?>'
    })
</script>