<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Site');
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
$routes->get('/', 'Site::index');
$routes->get('/home', 'Site::view/home');
$routes->get('/contact', 'Site::view/contact');
$routes->get('/products', 'Site::view/products');
$routes->get('/about', 'Site::view/about');

$routes->get('/clients/(:num)', 'Clients::details/$1');
$routes->get('/api/clients', 'Api\Clients::index');

//rotas de administracao
$routes->add('/admin', 'Admin\Admin::index');

$routes->add('/admin/logout', 'Admin\Admin::logout');
$routes->add('/admin/validate-login', 'Admin\Users::validateLogin');

$routes->add('/admin/clients/details/(:num)', 'Admin\Clients::details/$1');

$routes->add('/admin/clients', 'Admin\Clients::index');

$routes->add('/admin/clients/insert', 'Admin\Clients::insert');
$routes->add('/admin/clients/insert-action', 'Admin\Clients::insertAction');

$routes->add('/admin/clients/update/(:num)', 'Admin\Clients::update/$1');
$routes->add('/admin/clients/update-action/(:num)', 'Admin\Clients::updateAction/$1');

$routes->add('/admin/clients/delete/(:num)', 'Admin\Clients::delete/$1');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
