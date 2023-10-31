<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/landing-page', function() {
    return view('index');
});

$routes->get('/login', [Home::class, 'login']);

$routes->get('/', 'Home::dashboard');
$routes->get('/pemilikusaha/login', 'Pemilik::login');
$routes->get('/pemilikusaha/dashboard', 'Pemilik::dashboard');
$routes->get('/pemilikusaha/tarif', 'Pemilik::tarif');
$routes->get('/pemilikusaha/detail', 'Pemilik::detail');
