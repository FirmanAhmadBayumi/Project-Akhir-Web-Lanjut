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

    <?php
        $query = mysqli_query($db->conn, "SELECT * FROM tarif_harga WHERE id='".$_GET['id']."'");
        $data = mysqli_fetch_assoc($query);
    ?>

    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" method="post" action="backend/edit_tarif.php">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <div class="form-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" value="<?= $data['jenis_kendaraan'] ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $data['harga'] ?>">
                </div>
                <div class="form-group">
                    <img src="images/<?= $data['gambar'] ?>" style="width: 120px; display: block; padding-bottom: 15px" />
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $data['gambar'] ?>">
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
        $pesan = "Gagal Mengubah Data Tarif Harga!";
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