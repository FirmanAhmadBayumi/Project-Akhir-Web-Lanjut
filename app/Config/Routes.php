<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/pemilikusaha/login', 'Pemilik::login');
$routes->get('/pemilikusaha/dashboard', 'Pemilik::dashboard');
$routes->get('/pemilikusaha/tarif', 'Pemilik::tarif');
$routes->get('/pemilikusaha/detail', 'Pemilik::detail');