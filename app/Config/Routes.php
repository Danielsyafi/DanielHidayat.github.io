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
$routes->setAutoRoute(true);
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
//Routes web portfolio
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index1');
$routes->get('/', 'Home::index2');
$routes->get('/', 'Home::index3');
$routes->get('/', 'Home::index4');
$routes->get('/', 'Home::index5');
$routes->get('/', 'Home::index6');
$routes->get('/', 'Home::index7');
$routes->get('/', 'Home::index8');
$routes->get('/', 'Home::index9');
$routes->get('/', 'Home::index10');



//-->>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<--//

//Routes web Game
$routes->get('/', 'Game::index');
$routes->get('/', 'Game::index1');
$routes->get('/', 'Game::index2');

//-->>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<--//

//Routes web Mcd
$routes->get('/', 'page::index');

//alur buy
$routes->get('/', 'page::index1');
$routes->get('/', 'page::index2');
$routes->get('/', 'page::index3');
$routes->get('/', 'page::index4');
$routes->get('/', 'page::index5');
$routes->get('/', 'page::index6');
$routes->get('/', 'page::index7');
$routes->get('/', 'page::index8');
//database
$routes->post('/', 'page::create');
$routes->post('/', 'page::save');
$routes->get('/','page::delete');
$routes->get('/','page::edit');
$routes->get('/','page::update');




//-->>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<--//



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
