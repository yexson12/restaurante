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
$routes->get('/', 'Menugeneral::index');
$routes->get('dividir/', 'Dividir::index');
$routes->get('BEBIDAS/', 'Bebidas::index');
$routes->get('POSTRES/', 'Postres::index');
$routes->get('PLATOS/', 'Platos::index');
$routes->get('CEVICHE/', 'Platos::index');
$routes->get('menugeneral/', 'Menugeneral::index');
$routes->get('PARRILLAS/', 'Parrillas::index');
$routes->post('getInfoProducto','Menu::get_producto_by_index_AJAX');
$routes->get('platogeneral/(:num)', 'Platos::platogeneral/$1');

/*ADMINISTRADOR*/

$routes->get('headactivate', 'Menu::headactivate');
$routes->get('admin_pro/', 'Producto::admin_pro');
$routes->get('crear_pro', 'Producto::crear_pro');
$routes->post('guardar_pro', 'Producto::guardar_pro');
$routes->get('borrar_pro/(:num)', 'Producto::borrar_pro/$1');
$routes->get('editar_pro/(:num)', 'Producto::editar_pro/$1');
$routes->post('actualizar_pro', 'Producto::actualizar_pro');
$routes->post('combos', 'Producto::combos');
$routes->get('entrarcombo', 'Combos::entrarcombo');
$routes->post('combo', 'Combos::combo');
$routes->post('combo_subcategoria', 'Combos::combo_subcategoria');
$routes->post('actualizar_estado', 'Producto::actualizar_estado');     



/*ADMINISTRADOR CATEGORIA*/
$routes->get('admin_cat/', 'Categorias::admin_cat');

$routes->get('admin_general', 'Producto::admin_general');

$routes->get('crear_cat/', 'Categorias::crear_cat');
$routes->get('prueba', 'Categorias::prueba');
$routes->get('borrar_cat/(:num)', 'Categorias::borrar_cat/$1');
$routes->get('editar_cat/(:num)', 'Categorias::editar_cat/$1');
$routes->post('guardar_cat', 'Categorias::guardar_cat');
$routes->post('actualizar_cat', 'Categorias::actualizar_cat');
/* FIN ADMINISTRADOR CATEGORIA*/


/*ADMINISTRADOR SUBCATEGORIA*/
$routes->get('admin_subcat/', 'Subcategorias::admin_subcat');

$routes->get('crear_subcat/', 'Subcategorias::crear_subcat');
$routes->get('borrar_subcat/(:num)', 'Subcategorias::borrar_subcat/$1');
$routes->get('editar_subcat/(:num)', 'Subcategorias::editar_subcat/$1');
$routes->post('guardar_subcat', 'Subcategorias::guardar_subcat');
$routes->post('actualizar_subcat', 'Subcategorias::actualizar_subcat');
/* FIN ADMINISTRADOR SUBCATEGORIA*/
// PANEL LOGIN

$routes->get('login', 'LoginController::login');
$routes->get('cerrarsesion', 'LoginController::cerrarsesion');
$routes->post('ingresar', 'LoginController::ingresar');
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
