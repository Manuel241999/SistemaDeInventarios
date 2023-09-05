<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('/sessionlogin', 'Login::sessionlogin');
$routes->post('/sessionlogin', 'Login::sessionlogin');

$routes->get('/logout', 'Login::logout');


$routes->get('/Inicio', 'Home::Inicio');

//
$routes->get('/PopUp', 'Home::PopUp');
$routes->get('/FormularioV','Home::FormularioV');

$routes->get('/LoginINAB','Home::LoginINAB');
$routes->get('/olvidePassword','Home::olvidePassword');
$routes->get('/registrar','Home::registrar');
$routes->get('/confirmarCuenta','Home::confirmarCuenta');

$routes->get('/ListaCompra','Home::ListaCompra');
$routes->get('/ListaRegionesYSub','Home::ListaRegionesYSub');

$routes->get('/Perfil', 'Home::Perfil');
$routes->get('/Tablas', 'Home::Tablas');
$routes->get('/Vacio', 'Home::Vacio');

$route->get('/ActualizarCompras', 'compras::ActualizarCompras');
$route->post('/ActualizarCompras', 'compras::ActualizarCompras');

$route->get('/InsertarCompras', 'compras::RegistrodeCompras');
$route->post('/InsertarCompras', 'compras::RegistrodeCompras');

$route->get('/ListarCompras', 'compras::ListarComprar');
$route->post('/ListarCompras', 'compras::ListarComprar');

$route->get('/ActualizarTransaccion', 'est_transaccion::ActualizarestTransaccion');
$route->post('/ActualizarTransaccion', 'est_transaccion::ActualizarestTransaccion');

$route->get('/ListarTransCompras', 'est_transaccion::ListarEstTransaccion');
$route->post('/ListarTransCompras', 'est_transaccion::ListarEstTransaccion');

$route->get('/InsertarCompras', 'est_transaccion::RegistroestestTransaccion');
$route->post('/InsertrCompras', 'est_transaccion::RegistroestTransaccion');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
