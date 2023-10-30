<?php
require_once('../database.php');

if(isset($_POST['jenis_kendaraan']) && isset($_POST['harga'])) {
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar'];
    
    if(isset($gambar)) {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $nama = $_FILES['gambar']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];  

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if($ukuran < 1044070) {      
                move_uploaded_file($file_tmp, '../images/'.$nama);

                $ubah_gambar = "UPDATE tarif_harga SET gambar='$nama' WHERE id='".$_POST['id']."'";
                mysqli_query($db->conn, $ubah_gambar);
            } else {
                header('Location: ../edit_tarif.php?pesan=ukuran_besar');
            }
        } else {
            header('Location: ../edit_tarif.php?pesan=ekstensi_salah');
        }
    }

    $query = "UPDATE tarif_harga SET jenis_kendaraan='$jenis_kendaraan', harga='$harga' WHERE id='".$_POST['id']."'";
    $result = mysqli_query($db->conn, $query);

    if($result) {
        header('Location: ../tarif_harga.php?pesan=sukses_edit');
    } else {
        header('Location: ../edit_tarif.php?pesan=gagal');
    }
} else {
    header('Location: ../edit_tarif.php?pesan=kosong');
}