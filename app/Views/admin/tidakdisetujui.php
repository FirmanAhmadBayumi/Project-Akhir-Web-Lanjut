<?php
	include '../koneksi.php';

    $id = $_GET['id'];
    $query = "UPDATE data_transaksi SET status_pesanan= 'Dalam Antrian'";
    $query .= "WHERE id = '$id'";
	
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else{
        echo "<script>alert('Berhasil Dimasukkan Kedalam Antrian!');window.location='mengelolatransaksi.php';</script>";
    }
?>