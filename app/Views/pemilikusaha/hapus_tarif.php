<?php
require_once('database.php');

if(isset($_GET['id'])) {
    $query = mysqli_query($db->conn, "DELETE FROM tarif_harga WHERE id ='".$_GET['id']."'");

    if($query) {
        header("Location: tarif_harga.php?pesan=sukses_hapus");
    }
}
