<?php
  include '../koneksi.php';

  $sql = "SELECT * FROM data_transaksi ORDER BY id ASC";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mengelola Transaksi</title>
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
              <a href="mengelolatransaksi.php" class="active">Mengelola Transaksi</a>
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
        <div class="box-wrapper">
          <?php
              while($row = mysqli_fetch_assoc($result)){
            ?>
          <div class="box d-flex justify-content-between align-items-center">
            <div class="user" id="<?php echo $row['id'];?>">
              <p class="mb-0">Nama : <span><?php echo $row['nama_pelanggan'];?></span></p>
              <p class="mb-0">Total : <span> <td><?php echo "Rp. ".number_format($row['total'],0,',','.'); ?></td></span></p>
              <p class="mb-0">Kendaraan :  <span><?php echo $row['jenis_kendaraan'];?></span></p>
              <p class="mb-0">Tanggal :  <span><?php echo $row['tanggal'];?></span></p>
              <p class="mb-0">Area :  <span><?php echo $row['area'];?></span></p>
              <p class="mb-0">Status Pesanan :  <span><?php echo $row['status_pesanan'];?></span></p>
            </div>
            <a href="kelolapesanan.php?id=<?php echo $row['id'];?>">
              <button class="btn btn-secondary h-50">Kelola Pesanan</button>
            </a>
          </div>
          <hr>
          <?php
              }
            ?>
        </div>
      </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>