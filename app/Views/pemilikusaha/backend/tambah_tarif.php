<?php
require_once('../database.php');

if(isset($_POST['jenis_kendaraan']) && isset($_POST['harga']) && isset($_FILES['gambar'])) {
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
            } else {
                header('Location: ../tambah_tarif.php?pesan=ukuran_besar');
            }
        } else {
            header('Location: ../tambah_tarif.php?pesan=ekstensi_salah');
        }
    }

    $query = "INSERT INTO tarif_harga (jenis_kendaraan, harga, gambar) VALUES ('$jenis_kendaraan', '$harga', '$nama')";
    $result = mysqli_query($db->conn, $query);

    if($result) {
        header('Location: ../tarif_harga.php?pesan=sukses');
    } else {
        header('Location: ../tambah_tarif.php?pesan=gagal');
    }
} else {
    header('Location: ../tambah_tarif.php?pesan=kosong');
}