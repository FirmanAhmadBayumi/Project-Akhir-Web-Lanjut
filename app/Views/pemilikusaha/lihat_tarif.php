<?php 
include('layout/header.php');
require_once('database.php');
?>

<!-- Page Content  -->
<div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <h3 style="text-align: center; width: 100%">Tarif Harga Motor</h3>
    </nav>
    <hr>

    <?php
    $query = mysqli_query($db->conn, "SELECT * FROM tarif_harga WHERE id = '".$_GET['id']."'");
    $data = mysqli_fetch_assoc($query);
    ?>
    <div class="p-3" style="background-color: #D9D9D9; text-align: center;">
        <h3 style="font-weight: 600;"><?= $data['jenis_kendaraan'] ?></h3>
        <img class="py-3" src="images/<?= $data['gambar'] ?>" width="250px" />
        <div class="">
            <h5>Tarif Harga Motor <?= $data['jenis_kendaraan'] ?></h5>
            <h5>Rp. <?= number_format($data['harga'], 0, '.', '.') ?></h5>
        </div>
    </div>
</div>


<?php include('layout/footer.php'); ?>