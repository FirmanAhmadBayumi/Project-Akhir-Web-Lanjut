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
$routes->get('/landing-page', function() {
    return view('index');
});

//login dan register
$routes->get('/masuk', [Home::class, 'login']);
$routes->get('/daftar', [Home::class, 'register']);


$routes->get('/', 'Home::dashboard');
//pemilik usaha
$routes->get('pemilikusaha/dashboard', [Pemilik::class,'dashboard']);
$routes->get('pemilikusaha/tarif', [Pemilik::class,'tarif']);
$routes->get('pemilikusaha/detail', [Pemilik::class,'detail']);

//pelanggan hal. dashboard
$routes->get('pelanggan/dashboard', [PelangganController::class,'dashboard']);

//data_pelanggan CRUD
$routes->get('pelanggan/create_data_pelanggan', [PelangganController::class, 'tambahDataPelanggan']); //hal. create data pelanggan
$routes->post('pelanggan/data_pelanggan', [PelangganController::class, 'createDataPelanggan']); //proses pengiriman data pelanggan ke db
$routes->get('pelanggan/profil/(:any)/edit', [PelangganController::class, 'editDataPelanggan']); //halaman proses edit data
$routes->put('pelanggan/profil/(:any)', [PelangganController::class, 'updateDataPelanggan']); //proses edit/update data
$routes->get('pelanggan/profil', [PelangganController::class, 'showProfilPelanggan']); //read data pelanggan

//data_transaksi pelanggan CRUD
$routes->get('pelanggan/pesan', [PelangganController::class, 'pesan']); //halaman jenis kendaraan
$routes->get('pelanggan/pesan/detail_pesanan', [PelangganController::class, 'detail_pesanan']); //halaman form untuk detail pesanan
$routes->post('pelanggan/pesan/data', [PelangganController::class,'createDataTransaksi']); //proses utk menambahkan data transaksi
$routes->get('pelanggan/riwayat_transaksi', [PelangganController::class, 'showRiwayatTransaksi']); //menampilkan riwayat transaksi

//admin
$routes->get('/admin/dashboard', 'AdminController::dashboard');
$routes->get('/admin/datatransaksi', 'AdminController::datatransaksi');
$routes->get('/admin/datatransaksi/(:any)/edit', 'AdminController::editDataTransaksi/$1');
$routes->post('/admin/datatransaksi/(:any)', 'AdminController::updateDataTransaksi/$1');
$routes->get('/admin/datatransaksi/(:any)/delete', 'AdminController::deleteDataTransaksi/$1');
$routes->get('/admin/pesanan', 'AdminController::pesanan');
$routes->get('/admin/pembayaran', 'AdminController::pembayaran');
$routes->get('/admin/laporan', 'AdminController::laporan');

$routes->group('admin', function($routes){
	$routes->get('datapelanggan', 'AdminController::datapelanggan');
    $routes->add('datapelanggan/new', 'AdminController::create');
	$routes->add('datapelanggan/(:segment)/edit', 'AdminController::edit/$1');
	$routes->get('datapelanggan/(:segment)/delete', 'AdminController::delete/$1');
});