<?php

use App\Controllers\PelangganController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/landing-page', function() {
    return view('index');
});

$routes->get('/masuk', [Home::class, 'login']);

$routes->get('/', 'Home::dashboard');
$routes->get('/pemilikusaha/login', 'Pemilik::login');
$routes->get('/pemilikusaha/dashboard', 'Pemilik::dashboard');
$routes->get('/pemilikusaha/tarif', 'Pemilik::tarif');
$routes->get('/pemilikusaha/detail', 'Pemilik::detail');

//pelanggan
$routes->get('pelanggan/dashboard', [PelangganController::class,'dashboard']);
$routes->get('pelanggan/pesan', [PelangganController::class, 'pesan']);
$routes->get('pelanggan/pesan/detail_pesanan', [PelangganController::class, 'detail_pesanan']); 

//admin
$routes->get('/admin/dashboard', 'AdminController::dashboard');
$routes->get('/admin/datapelanggan', 'AdminController::datapelanggan');
$routes->get('/admin/datatransaksi', 'AdminController::datatransaksi');
$routes->get('/admin/pesanan', 'AdminController::pesanan');
$routes->get('/admin/pembayaran', 'AdminController::pembayaran');
$routes->get('/admin/laporan', 'AdminController::laporan');