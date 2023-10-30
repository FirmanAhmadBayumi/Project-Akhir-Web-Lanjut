
<!-- Page Content  -->
<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <h3 align="center">CareWash</h3>
    </nav>
    <hr>

    <div class="d-flex justify-content-end">
        <a href="tambah_tarif.php" class="btn btn-sm btn-primary mb-3"><i class="bi bi-plus"></i> Tambah Tarif</a>
    </div>

   
        <div class="p-3" style="background-color: #D9D9D9; border-bottom: 1px solid #000">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-3">
                    <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" width="120px" />
                </div>
                <div class="col-md-6">
                    <h3><?= $data['jenis_kendaraan'] ?></h3>
                    <h5>Rp. <?= number_format($data['harga'], 0, '.', '.') ?></h5>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="lihat_tarif.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-primary mr-2">Lihat</a>
                    <a href="edit_tarif.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-info mr-2">Edit</a>
                    <a href="#" onclick="hapusData(<?= $data['id'] ?>)" class="btn btn-sm btn-danger">Hapus</a>
                </div>
            </div>
        </div>

   

</div>

<?= $this->endSection()?>
