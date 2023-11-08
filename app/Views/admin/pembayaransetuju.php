<?php
	include '../koneksi.php';

    $id = $_GET['id'];
    $query = "UPDATE data_transaksi SET status_pembayaran= 'Disetujui'";
    $query .= "WHERE id = '$id'";
	
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else{
        echo "<script>alert('Pembayaran DiSetujui!');window.location='datatransaksi.php';</script>";
    }
?>