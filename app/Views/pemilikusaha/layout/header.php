<!-- Middleware -->
<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: ". $config->base_url . "login.php?error=1");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pemilik Usaha</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="bg-secondary">
      <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/pp.jpg)"></a>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="index.php">Laporan Keuangan</a>
          </li>
          <li>
            <a href="tarif_harga.php">Tarif Harga</a>
          </li>
          <li>
            <a href="#" onclick="logout()">Keluar</a>
          </li>
        </ul>
    </nav>