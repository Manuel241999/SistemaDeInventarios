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
$routes->get('/signin', 'Login::signin', ['as' => 'signin']);
$routes->post('/signin', 'Login::signin', ['as' => 'signin']);

$routes->get('/logout', 'Login::logout', ['as' => 'logout']);
$routes->get('/olvidePassword', 'Login::olvidePassword', ['as' => 'olvidePassword']);


//Admin
$routes->get('/InicioAdmin', 'Admin::InicioAdmin', ['as' => 'InicioAdmin']);
$routes->post('/InicioAdmin', 'Admin::InicioAdmin', ['as' => 'InicioAdmin']);

$routes->get('/Administrar', 'Admin::Administrar', ['as' => 'Administrar']);
$routes->post('/Administrar', 'Admin::Administrar', ['as' => 'Administrar']);

$routes->get('/registrar_usuario', 'Admin::registrar_usuario', ['as' => 'registrar_usuario']);
$routes->post('/registrar_usuario', 'Admin::registrar_usuario', ['as' => 'registrar_usuario']);

$routes->get('/ListaUsuarios', 'Admin::ListaUsuarios', ['as' => 'ListaUsuarios']);
$routes->post('/ListaUsuarios', 'Admin::ListaUsuarios', ['as' => 'ListaUsuarios']);

$routes->get('/ActualizarUsuarios', 'Admin::ActualizarUsuarios', ['as' => 'ActualizarUsuarios']);
$routes->post('/ActualizarUsuarios', 'Admin::ActualizarUsuarios', ['as' => 'ActualizarUsuarios']);

$routes->get('/DesactivarUsuarios', 'Admin::DesactivarUsuarios', ['as' => 'DesactivarUsuarios']);
$routes->post('/DesactivarUsuarios', 'Admin::DesactivarUsuarios', ['as' => 'DesactivarUsuarios']);

//Regiones
$routes->get('/registrarregion', 'Admin::registrarregion', ['as' => 'registrarregion']);
$routes->post('/registrarregion', 'Admin::registrarregion', ['as' => 'registrarregion']);

$routes->get('/Actualizarregion', 'Admin::Actualizarregion', ['as' => 'Actualizarregion']);
$routes->post('/Actualizarregion', 'Admin::Actualizarregion', ['as' => 'Actualizarregion']);

//Sub Regiones
$routes->get('/registrarsubregion', 'Admin::registrarsubregion', ['as' => 'registrarsubregion']);
$routes->post('/registrarsubregion', 'Admin::registrarsubregion', ['as' => 'registrarsubregion']);

$routes->get('/Actualizarsubregion', 'Admin::Actualizarsubregion', ['as' => 'Actualizarsubregion']);
$routes->post('/Actualizarsubregion', 'Admin::Actualizarsubregion', ['as' => 'Actualizarsubregion']);

//Estado Activo
$routes->get('/registrarestadoactivo', 'Admin::registrarestadoactivo', ['as' => 'registrarestadoactivo']);
$routes->post('/registrarestadoactivo', 'Admin::registrarestadoactivo', ['as' => 'registrarestadoactivo']);

$routes->get('/Actualizarestadoactivo', 'Admin::Actualizarestadoactivo', ['as' => 'Actualizarestadoactivo']);
$routes->post('/Actualizarestadoactivo', 'Admin::Actualizarestadoactivo', ['as' => 'Actualizarestadoactivo']);

//Estado Transaccion
$routes->get('/registrarestadotransaccion', 'Admin::registrarestadotransaccion', ['as' => 'registrarestadotransaccion']);
$routes->post('/registrarestadotransaccion', 'Admin::registrarestadotransaccion', ['as' => 'registrarestadotransaccion']);

$routes->get('/Actualizarestadotransaccion', 'Admin::Actualizarestadotransaccion', ['as' => 'Actualizarestadotransaccion']);
$routes->post('/Actualizarestadotransaccion', 'Admin::Actualizarestadotransaccion', ['as' => 'Actualizarestadotransaccion']);

//Tipo Gestion
$routes->get('/registrartipogestion', 'Admin::registrartipogestion', ['as' => 'registrartipogestion']);
$routes->post('/registrartipogestion', 'Admin::registrartipogestion', ['as' => 'registrartipogestion']);

$routes->get('/Actualizartipogestion', 'Admin::Actualizartipogestion', ['as' => 'Actualizartipogestion']);
$routes->post('/Actualizartipogestion', 'Admin::Actualizartipogestion', ['as' => 'Actualizartipogestion']);

//Catalogo Codigo Sicoin
$routes->get('/registrarcatalogosicoin', 'Admin::registrarcatalogosicoin', ['as' => 'registrarcatalogosicoin']);
$routes->post('/registrarcatalogosicoin', 'Admin::registrarcatalogosicoin', ['as' => 'registrarcatalogosicoin']);

$routes->get('/Actualizarcatalogosicoin', 'Admin::Actualizarcatalogosicoin', ['as' => 'Actualizarcatalogosicoin']);
$routes->post('/Actualizarcatalogosicoin', 'Admin::Actualizarcatalogosicoin', ['as' => 'Actualizarcatalogosicoin']);

//Cuenta
$routes->get('/registrarcuenta', 'Admin::registrarcuenta', ['as' => 'registrarcuenta']);
$routes->post('/registrarcuenta', 'Admin::registrarcuenta', ['as' => 'registrarcuenta']);

$routes->get('/Actualizarcuenta', 'Admin::Actualizarcuenta', ['as' => 'Actualizarcuenta']);
$routes->post('/Actualizarcuenta', 'Admin::Actualizarcuenta', ['as' => 'Actualizarcuenta']);

//SubCuenta
$routes->get('/registrarsubcuenta', 'Admin::registrarsubcuenta', ['as' => 'registrarsubcuenta']);
$routes->post('/registrarsubcuenta', 'Admin::registrarsubcuenta', ['as' => 'registrarsubcuenta']);

$routes->get('/Actualizarsubcuenta', 'Admin::Actualizarsubcuenta', ['as' => 'Actualizarsubcuenta']);
$routes->post('/Actualizarsubcuenta', 'Admin::Actualizarsubcuenta', ['as' => 'Actualizarsubcuenta']);


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
