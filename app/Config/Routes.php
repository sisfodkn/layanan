<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['filter' => 'usersAuth']);
$routes->get('/login', 'User::index');

// Master Data
$routes->get('/masterdata/pegawai', 'MasterData::pegawai', ['filter' => 'usersAuth']);
// Unit Kerja
$routes->get('/unitkerja', 'UnitKerja::index', ['filter' => 'usersAuth']);
$routes->get('/unitkerja/add', 'UnitKerja::add', ['filter' => 'usersAuth']);
$routes->get('/unitkerja/edit/(:num)', 'UnitKerja::edit/$1', ['filter' => 'usersAuth']);
// Jabatan
$routes->get('/jabatan', 'Jabatan::index', ['filter' => 'usersAuth']);
$routes->get('/jabatan/add', 'Jabatan::add', ['filter' => 'usersAuth']);
$routes->get('/jabatan/edit/(:num)', 'Jabatan::edit/$1', ['filter' => 'usersAuth']);
// Ruangan
$routes->get('/ruangan', 'Ruangan::index', ['filter' => 'usersAuth']);
$routes->get('/ruangan/add', 'Ruangan::add', ['filter' => 'usersAuth']);
$routes->get('/ruangan/edit/(:num)', 'Ruangan::edit/$1', ['filter' => 'usersAuth']);

// Peminjaman
$routes->get('/peminjaman/kendaraan', 'Peminjaman::kendaraan', ['filter' => 'usersAuth']);

// Pengajuan
$routes->get('/pengajuan/pemeliharaan', 'Pengajuan::pemeliharaan', ['filter' => 'usersAuth']);

// Permintaan
$routes->get('/permintaan/atk', 'Permintaan::atk', ['filter' => 'usersAuth']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
