<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/mahasiswaapi', 'api/MahasiswaApi::index');
$routes->get('/dosenapi', 'api/DosenApi::index');
$routes->get('/', 'Home::index');
$routes->post('User/proses', 'User::proses_login');

$routes->get('cek', 'Home::cek', ['filter' => 'ceklogin']);
$routes->get('/logout', 'User::logout');

$routes->get('register', 'Home::register');
$routes->post('register', 'User::register');

$routes->get('/ad', 'Home::admin');
$routes->get('/as', 'Home::admindas', ['filter' => 'ceklogin']);
$routes->get('/login', 'Home::Loginas');
//$routes->post('/mahasiswa', 'api/MahasiswaApi::create');
$routes->group('/login', function ($routes) {
	$routes->get('mahasiswa', 'Home::LoginMhs');
	$routes->get('dosen', 'Home::LoginDosen');
});
//$routes->delete('(:num)', 'Mahasiswa::delete/$1');
//$routes->get('/', 'Auth::login');

//$routes->get('auth/login', 'Auth::login');
//$routes->post('auth/proses_login', 'Auth::proses_login');

//$routes->get('auth/logout', 'Auth::logout');

//$routes->get('auth/register', 'Auth::register');
//$routes->post('auth/proses_register', 'Auth::proses_register');

//$routes->get('dashboard', 'Dashboard::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
