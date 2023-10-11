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

//Compras
$routes->get('/InicioCompras', 'Compras::InicioCompras', ['as'=>'InicioCompras']);

$routes->get('/registrarcompra', 'Compras::registrarcompra', ['as' =>'registrarcompra']);
$routes->post('/registrarcompra', 'Compras::registrarcompra', ['as' =>'registrarcompra']);

$routes->get('/ListarComprar', 'Compras::ListarComprar', ['as' => 'ListarComprar']);
$routes->post('/ListarComprar', 'Compras::ListarComprar', ['as' => 'ListarComprar']);

$routes->get('/Actualizarcompradata', 'Compras::Actualizarcompradata', ['as' => 'Actualizarcompradata']);
$routes->post('/Actualizarcompradata', 'Compras::Actualizarcompradata', ['as' => 'Actualizarcompradata']);

$routes->get('/Actualizarcompradoc1', 'Compras::Actualizarcompradoc1', ['as' => 'Actualizarcompradoc1']);
$routes->post('/Actualizarcompradoc1', 'Compras::Actualizarcompradoc1', ['as' => 'Actualizarcompradoc1']);

$routes->get('/Actualizarcompradoc2', 'Compras::Actualizarcompradoc2', ['as' => 'Actualizarcompradoc2']);
$routes->post('/Actualizarcompradoc2', 'Compras::Actualizarcompradoc2', ['as' => 'Actualizarcompradoc2']);

$routes->get('/Actualizarcompradoc3', 'Compras::Actualizarcompradoc3', ['as' => 'Actualizarcompradoc3']);
$routes->post('/Actualizarcompradoc3', 'Compras::Actualizarcompradoc3', ['as' => 'Actualizarcompradoc3']);

//Inventarios
$routes->get('/HomeInventario', 'Inventarios::HomeInventario', ['as' =>'HomeInventario']);
$routes->post('/HomeInventario', 'Inventarios::HomeInventario', ['as' =>'HomeInventario']);

$routes->get('/ListarCompraInventario', 'Inventarios::ListarCompraInventario', ['as' =>'ListarCompraInventario']);
$routes->post('/ListarCompraInventario', 'Inventarios::ListarCompraInventario', ['as' =>'ListarCompraInventario']);

$routes->get('/IngresoTablaGeneral', 'Inventarios::IngresoTablaGeneral', ['as' =>'IngresoTablaGeneral']);
$routes->post('/IngresoTablaGeneral', 'Inventarios::IngresoTablaGeneral', ['as' =>'IngresoTablaGeneral']);

$routes->get('/ListadoTablaGeneral', 'Inventarios::ListadoTablaGeneral', ['as' =>'ListadoTablaGeneral']);
$routes->post('/ListadoTablaGeneral', 'Inventarios::ListadoTablaGeneral', ['as' =>'ListadoTablaGeneral']);


//Regiones
$routes->get('/registrarregion', 'Admin::registrarregion', ['as' => 'registrarregion']);
$routes->post('/registrarregion', 'Admin::registrarregion', ['as' => 'registrarregion']);

$routes->get('/Actualizarregion', 'Admin::Actualizarregion', ['as' => 'Actualizarregion']);
$routes->post('/Actualizarregion', 'Admin::Actualizarregion', ['as' => 'Actualizarregion']);

$routes->get('/Desactivarregion', 'Admin::Desactivarregion', ['as' => 'Desactivarregion']);
$routes->post('/Desactivarregion', 'Admin::Desactivarregion', ['as' => 'Desactivarregion']);

//Sub Regiones
$routes->get('/registrarsubregion', 'Admin::registrarsubregion', ['as' => 'registrarsubregion']);
$routes->post('/registrarsubregion', 'Admin::registrarsubregion', ['as' => 'registrarsubregion']);

$routes->get('/Actualizarsubregion', 'Admin::Actualizarsubregion', ['as' => 'Actualizarsubregion']);
$routes->post('/Actualizarsubregion', 'Admin::Actualizarsubregion', ['as' => 'Actualizarsubregion']);

$routes->get('/Desactivarsubregion', 'Admin::Desactivarsubregion', ['as' => 'Desactivarsubregion']);
$routes->post('/Desactivarsubregion', 'Admin::Desactivarsubregion', ['as' => 'Desactivarsubregion']);

//Estado Activo
$routes->get('/registrarestadoactivo', 'Admin::registrarestadoactivo', ['as' => 'registrarestadoactivo']);
$routes->post('/registrarestadoactivo', 'Admin::registrarestadoactivo', ['as' => 'registrarestadoactivo']);

$routes->get('/Actualizarestadoactivo', 'Admin::Actualizarestadoactivo', ['as' => 'Actualizarestadoactivo']);
$routes->post('/Actualizarestadoactivo', 'Admin::Actualizarestadoactivo', ['as' => 'Actualizarestadoactivo']);

$routes->get('/Desactivarestadoactivo', 'Admin::Desactivarestadoactivo', ['as' => 'Desactivarestadoactivo']);
$routes->post('/Desactivarestadoactivo', 'Admin::Desactivarestadoactivo', ['as' => 'Desactivarestadoactivo']);

//Estado Transaccion
$routes->get('/registrarestadotransaccion', 'Admin::registrarestadotransaccion', ['as' => 'registrarestadotransaccion']);
$routes->post('/registrarestadotransaccion', 'Admin::registrarestadotransaccion', ['as' => 'registrarestadotransaccion']);

$routes->get('/Actualizarestadotransaccion', 'Admin::Actualizarestadotransaccion', ['as' => 'Actualizarestadotransaccion']);
$routes->post('/Actualizarestadotransaccion', 'Admin::Actualizarestadotransaccion', ['as' => 'Actualizarestadotransaccion']);

$routes->get('/Desactivarestadotransaccion', 'Admin::Desactivarestadotransaccion', ['as' => 'Desactivarestadotransaccion']);
$routes->post('/Desactivarestadotransaccion', 'Admin::Desactivarestadotransaccion', ['as' => 'Desactivarestadotransaccion']);

//Tipo Gestion
$routes->get('/registrartipogestion', 'Admin::registrartipogestion', ['as' => 'registrartipogestion']);
$routes->post('/registrartipogestion', 'Admin::registrartipogestion', ['as' => 'registrartipogestion']);

$routes->get('/Actualizartipogestion', 'Admin::Actualizartipogestion', ['as' => 'Actualizartipogestion']);
$routes->post('/Actualizartipogestion', 'Admin::Actualizartipogestion', ['as' => 'Actualizartipogestion']);

$routes->get('/Desactivartipogestion', 'Admin::Desactivartipogestion', ['as' => 'Desactivartipogestion']);
$routes->post('/Desactivartipogestion', 'Admin::Desactivartipogestion', ['as' => 'Desactivartipogestion']);

//Catalogo Codigo Sicoin
$routes->get('/registrarcatalogosicoin', 'Admin::registrarcatalogosicoin', ['as' => 'registrarcatalogosicoin']);
$routes->post('/registrarcatalogosicoin', 'Admin::registrarcatalogosicoin', ['as' => 'registrarcatalogosicoin']);

$routes->get('/Actualizarcatalogosicoin', 'Admin::Actualizarcatalogosicoin', ['as' => 'Actualizarcatalogosicoin']);
$routes->post('/Actualizarcatalogosicoin', 'Admin::Actualizarcatalogosicoin', ['as' => 'Actualizarcatalogosicoin']);

$routes->get('/Desactivarcatalogosicoin', 'Admin::Desactivarcatalogosicoin', ['as' => 'Desactivarcatalogosicoin']);
$routes->post('/Desactivarcatalogosicoin', 'Admin::Desactivarcatalogosicoin', ['as' => 'Desactivarcatalogosicoin']);

//Cuenta
$routes->get('/registrarcuenta', 'Admin::registrarcuenta', ['as' => 'registrarcuenta']);
$routes->post('/registrarcuenta', 'Admin::registrarcuenta', ['as' => 'registrarcuenta']);

$routes->get('/Actualizarcuenta', 'Admin::Actualizarcuenta', ['as' => 'Actualizarcuenta']);
$routes->post('/Actualizarcuenta', 'Admin::Actualizarcuenta', ['as' => 'Actualizarcuenta']);

$routes->get('/Desactivarcuenta', 'Admin::Desactivarcuenta', ['as' => 'Desactivarcuenta']);
$routes->post('/Desactivarcuenta', 'Admin::Desactivarcuenta', ['as' => 'Desactivarcuenta']);

//SubCuenta
$routes->get('/registrarsubcuenta', 'Admin::registrarsubcuenta', ['as' => 'registrarsubcuenta']);
$routes->post('/registrarsubcuenta', 'Admin::registrarsubcuenta', ['as' => 'registrarsubcuenta']);

$routes->get('/Actualizarsubcuenta', 'Admin::Actualizarsubcuenta', ['as' => 'Actualizarsubcuenta']);
$routes->post('/Actualizarsubcuenta', 'Admin::Actualizarsubcuenta', ['as' => 'Actualizarsubcuenta']);

$routes->get('/Desactivarsubcuenta', 'Admin::Desactivarsubcuenta', ['as' => 'Desactivarsubcuenta']);
$routes->post('/Desactivarsubcuenta', 'Admin::Desactivarsubcuenta', ['as' => 'Desactivarsubcuenta']);



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
