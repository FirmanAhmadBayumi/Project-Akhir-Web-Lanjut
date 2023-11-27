<?php

use App\Controllers\PelangganController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Pemilik;

/**
 * @var RouteCollection $routes
 */

 //landing page
$routes->get('/', 'Home::index');
$routes->get('/redirect', 'Home::redirect');

//login dan register
$routes->get('/login', [Home::class, 'login']);
$routes->get('/register', [Home::class, 'register']);

//routes pelanggan
$routes->group('pelanggan', ['filter' => 'role:pelanggan'], function($routes) {
	//pelanggan halaman dashboard
	$routes->get('dashboard', [PelangganController::class, 'index']);

	//data_pelanggan CRUD
	$routes->get('create_data_pelanggan', [PelangganController::class, 'tambahDataPelanggan']); //hal. create data pelanggan
	$routes->post('data_pelanggan', [PelangganController::class, 'createDataPelanggan']); //proses pengiriman data pelanggan ke db
	$routes->get('profil/(:any)/edit', [PelangganController::class, 'editDataPelanggan']); //halaman proses edit data
	$routes->put('profil/(:any)', [PelangganController::class, 'updateDataPelanggan']); //proses edit/update data
	$routes->get('profil', [PelangganController::class, 'showProfilPelanggan']); //read data pelanggan

	//data_transaksi pelanggan CRUD
	$routes->get('pesan', [PelangganController::class, 'pesan']); //halaman jenis kendaraan
	$routes->get('pesan/detail_pesanan', [PelangganController::class, 'detail_pesanan']); //halaman form untuk detail pesanan
	$routes->post('pesan/data', [PelangganController::class, 'createDataTransaksi']); //proses utk menambahkan data transaksi
	$routes->get('riwayat_transaksi', [PelangganController::class, 'showRiwayatTransaksi']); //menampilkan riwayat transaksi
});

//routes admin
$routes->group('admin', ['filter' => 'role:admin'], function($routes){
	//admin
	$routes->get('dashboard', 'AdminController::dashboard');
	$routes->get('datatransaksi', 'AdminController::datatransaksi');
	$routes->get('datatransaksi/(:any)/edit', 'AdminController::editDataTransaksi/$1');
	$routes->post('datatransaksi/(:any)', 'AdminController::updateDataTransaksi/$1');
	$routes->get('datatransaksi/(:any)/delete', 'AdminController::deleteDataTransaksi/$1');
	$routes->get('pesanan', 'AdminController::pesanan');
	$routes->get('pembayaran', 'AdminController::pembayaran');
	$routes->get('laporan', 'AdminController::laporan');
	$routes->get('datapelanggan', 'AdminController::datapelanggan');
    $routes->add('datanew', 'AdminController::create');
	$routes->add('data(:segment)/edit', 'AdminController::edit/$1');
	$routes->get('data(:segment)/delete', 'AdminController::delete/$1');
});

//routes super admin (pemilikusaha)
	$routes->group('pemilikusaha', ['filter' => 'role:super admin'], function($routes) {
	//pemilik usaha
	$routes->get('dashboard', [Pemilik::class, 'dashboard'], ['filter' => 'role:super admin']);
	$routes->get('tarif', [Pemilik::class, 'tarif'], ['filter' => 'role:super admin']);
	$routes->get('tarif/tambah', [Pemilik::class, 'tarifTambah'], ['filter' => 'role:super admin']);
	$routes->post('tarif/tambah', [Pemilik::class, 'tarifTambah'], ['filter' => 'role:super admin']);
	$routes->get('tarif/delete/(:any)', [Pemilik::class, 'tarifDelete'], ['filter' => 'role:super admin']);
	$routes->get('area/delete/(:any)', [Pemilik::class, 'areaDelete'], ['filter' => 'role:super admin']);
	$routes->get('tarif/edit/(:any)', [Pemilik::class, 'tarifEdit'], ['filter' => 'role:super admin']);
	$routes->post('tarif/edit/(:any)', [Pemilik::class, 'tarifEdit'], ['filter' => 'role:super admin']);
	$routes->get('detail', [Pemilik::class, 'detail'], ['filter' => 'role:super admin']);
	$routes->get('area', [Pemilik::class, 'area'], ['filter' => 'role:super admin']);
	$routes->get('area/tambah', [Pemilik::class, 'areaTambah'], ['filter' => 'role:super admin']);
	$routes->post('area/tambah', [Pemilik::class, 'areaTambah'], ['filter' => 'role:super admin']);
});