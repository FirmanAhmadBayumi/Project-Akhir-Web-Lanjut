<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sidebar 01</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="bg-secondary">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg)"></a>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Mengelola Transaksi
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="index.php">Pesanan Masuk</a></li>
                                <li><a class="dropdown-item" href="#">Validasi Pembayaran</a></li>
                                <li><a class="dropdown-item" href="formdatapelanggan.php">Data Pelanggan</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="laporankeuangan.php">Laporan Keuangan</a>
                    </li>
                </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <h4 align="center">Mengelola Transaksi</h4>
            </nav>


            <form action="datapelanggan.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nama</label>
                    <input type="text" name="keyword" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputKendaraan" class="form-label">Kendaraan</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputNo" class="form-label">No. Kendaraan</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" name="cari" class="btn btn-dark">Cari</button>
                <a href="dashboard.php" class="btn btn-dark">Kembali</a>
            </form>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>