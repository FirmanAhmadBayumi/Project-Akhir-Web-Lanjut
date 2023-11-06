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
$routes->get('/dashboard', function() {
    return view('dashboard');
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