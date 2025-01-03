<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Welcome
$routes->get('/', 'WelcomeController::index');

// auth
$routes->post('/admin/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    // buku
    $routes->get('/buku', 'BukuController::index');
    $routes->get('/buku/create', 'BukuController::create');
    $routes->post('/buku/store', 'BukuController::store');
    $routes->get('/buku/show/(:segment)', 'BukuController::show/$1');
    $routes->get('/buku/edit/(:segment)', 'BukuController::edit/$1');
    $routes->post('/buku/update/(:segment)', 'BukuController::update/$1');
    $routes->get('/buku/delete/(:segment)', 'BukuController::delete/$1');

    // anggota
    $routes->get('/anggota', 'AnggotaController::index');
    $routes->get('/anggota/create', 'AnggotaController::create');
    $routes->post('/anggota/store', 'AnggotaController::store');
    $routes->get('/anggota/show/(:segment)', 'AnggotaController::show/$1');
    $routes->get('/anggota/edit/(:segment)', 'AnggotaController::edit/$1');
    $routes->post('/anggota/update/(:segment)', 'AnggotaController::update/$1');
    $routes->get('/anggota/delete/(:segment)', 'AnggotaController::delete/$1');

    // transaksi
    $routes->get('/transaksi', 'TransaksiController::index');
    $routes->get('/transaksi/create', 'TransaksiController::create');
    $routes->post('/transaksi/store', 'TransaksiController::store');
    $routes->get('/transaksi/show/(:segment)', 'TransaksiController::show/$1');
    $routes->get('/transaksi/edit/(:segment)', 'TransaksiController::edit/$1');
    $routes->post('/transaksi/update/(:segment)', 'TransaksiController::update/$1');
    $routes->get('/transaksi/delete/(:segment)', 'TransaksiController::delete/$1');

    // admin
    $routes->get('/admin', 'AdminController::index');
    $routes->get('/admin/create', 'AdminController::create');
    $routes->post('/admin/store', 'AdminController::store');
    $routes->get('/admin/show/(:segment)', 'AdminController::show/$1');
    $routes->get('/admin/edit/(:segment)', 'AdminController::edit/$1');
    $routes->post('/admin/update/(:segment)', 'AdminController::update/$1');
    $routes->get('/admin/delete/(:segment)', 'AdminController::delete/$1');

    // dashboard
    $routes->get('/dashboard', 'DashboardController::index');
    $routes->get('/dashboard/download-pdf', 'DashboardController::generatePdf');
});











