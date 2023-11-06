<!DOCTYPE html>
<html lang="en">
  <head>
    <title>input laporan keuangan</title>
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
          </ul>
      </nav>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
          <h4 align="center">Laporan Keuangan</h4>
        </nav>

        <form method="POST" action="input.php">


<div class="mb-3 row">
    <label for="jk" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option selected>Pilih Kategori</option>
            <option value="mingguan">Mingguan</option>
            <option value="bulanan">Bulanan</option>
            <option value="tahunan">Tahunan</option>
        </select>
    </div>
</div>

<div class="mb-3 row">
    <label for="laporan" class="col-sm-2 col-form-label">File</label>
    <div class="col-sm-10">
    <input class="form-control" name="laporan" type="file" id="laporan">
    </div>
</div>

<button type="submit" class="btn btn-dark">Tambah Data</button>
<a href="index.php" class="btn btn-dark">Kembali</a>

</form>

      </div>
    </div>

    <div class="container">
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>