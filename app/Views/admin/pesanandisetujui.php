<?php
	include '../koneksi.php';

    $id = $_GET['id'];
    $query = "UPDATE data_transaksi SET status_pesanan = 'Disetujui'";
    $query .= "WHERE id = '$id'";
	
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else{
        echo "<script>alert('Pesanan DiSetujui!');window.location='mengelolatransaksi.php';</script>";
    }
?>