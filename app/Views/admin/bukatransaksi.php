<?php
  include '../koneksi.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM data_transaksi WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Error:".mysqli_errno($conn). " - ".mysqli_error($conn));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)){
            echo "<script>alert('Data tidak ditemukan pada tabel.');window.location='mengelolatransaksi.php';</script>";
        }
    }else{
        echo "<script>alert('Masukkan ID yang ingin di edit');window.location='mengelolatransaksi.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Data Transaksi</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="bg-secondary">
        <div class="p-4 pt-5">
          <a
            href="#"
            class="img logo rounded-circle mb-5"
            style="background-image: url(images/logo.jpg)"
          ></a>
          <ul class="list-unstyled components mb-5">
            <li>
              <a href="dashboard.php">Dashboard</a>
            </li>
            <li>
              <a href="mengelolatransaksi.php">Mengelola Transaksi</a>
            </li>
            <li>
              <a href="datatransaksi.php">Data Transaksi</a>
            </li>
            <li>
              <a href="datapelanggan.php">Data Pelanggan</a>
            </li>
            <li>
              <a href="laporankeuangan.php">Laporan Keuangan</a>
            </li>
            <li>
              <a href="../logout.php">Logout</a>
            </li>
          </ul>
      </nav>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
          <h4 align="center">Mengelola Transaksi</h4>
        </nav>
        <div class="box-wrapper d-flex justify-content-center mb-5">
          <div class="box-transaksi">
            <div class="user">
              <p class="mb-0">Nama : <span><?php echo $data['nama_pelanggan'];?></span></p>
              <p class="mb-0">Total : <span><?php echo "Rp. ".number_format($data['total'],0,',','.'); ?></span></p>
              <p class="mb-0">Kendaraan :  <span><?php echo $data['jenis_kendaraan'];?></span></p>
              <p class="mb-0">Tanggal :  <span><?php echo $data['tanggal'];?></span></p>
              <p class="mb-0">Area :  <span><?php echo $data['area'];?></span></p>
              <p class="mb-0">Jenis Pembayaran :  <span><?php echo $data['jenis_pembayaran'];?></span></p>
              <p class="mb-0">Status Pembayaran:  <span><?php echo $data['status_pembayaran'];?></span></p>
            </div>
          </div>
          <hr>
        </div>
        <div class="btn-aksi d-flex justify-content-center">
            <a href="pembayaransetuju.php?id=<?php echo $data['id'];?>">
                <button class="btn btn-secondary mr-4">Menyetujui Pembayaran</button>
            </a>
            <a href="pembayarantidak.php?id=<?php echo $data['id'];?>">
                <button class="btn btn-secondary">Tidak Menyetujui Pembayaran</button>
            </a>
        </div>
      </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

