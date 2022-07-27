<?php

namespace Config;

use App\Controllers\LupaPass;

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
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/caraKerja', 'Pages::caraKerja');
$routes->get('/login', 'Login::index');
$routes->get('/loginAdmin', 'LoginAdmin::index');
$routes->get('/registerLender', 'RegisterLender::index');
$routes->get('/registerBorrower', 'RegisterBorrower::index');
$routes->get('/lupapassword', 'LupaPassword::index');
$routes->get('/recovPass', 'RecovPass::index');
$routes->get('/dashboardLender', 'DashboardLender::index');
$routes->get('/dashboardBorrower', 'DashboardBorrower::index');
$routes->get('/mitraLender', 'MitraLender::index');
$routes->get('/berandaLender', 'BerandaLender::index');
$routes->get('/dashboardAdmin', 'DashboardAdmin::index');
$routes->get('/dataPengajuan', 'DataPengajuanAdmin::index');
$routes->get('/detailDataPengajuan', 'DetailDataPengajuan::index');

$routes->post('/login', 'Login::login');
$routes->post('/registerLender', 'RegisterLender::registerLender');
$routes->post('/registerBorrower', 'RrgisterBorrower::registerBorrower');
$routes->post('/lupaPassword', 'LupaPass::lupaPassword');
$routes->post('/recovPass', 'RecovPass::recovPass');

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
