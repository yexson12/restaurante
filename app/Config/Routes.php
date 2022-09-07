<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Menu::index');
$routes->get('dividir/', 'Dividir::index');
$routes->get('bebidas/', 'Bebidas::index');
$routes->get('postres/', 'Postres::index');
$routes->get('platos/', 'Platos::index');
$routes->get('menugeneral/', 'Menugeneral::index');
$routes->get('parrillas/', 'Parrillas::index');

/*ADMINISTRADOR*/

$routes->get('admin_pro/', 'Producto::admin_pro');
$routes->get('crear_pro', 'Producto::crear_pro');
$routes->post('guardar_pro', 'Producto::guardar_pro');
$routes->get('borrar_pro/(:num)', 'Producto::borrar_pro/$1');
$routes->get('editar_pro/(:num)', 'Producto::editar_pro/$1');
$routes->post('actualizar_pro', 'Producto::actualizar_pro');
$routes->post('combos', 'Producto::combos');
$routes->get('entrarcombo', 'Combos::entrarcombo');
$routes->post('combo', 'Combos::combo');

/*FINAL ADMINISTRADOR*/

/*admin


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
