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
$routes->setDefaultController('Pages');
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

// Pages
$routes->get('/', 'pages::dashboard');
$routes->get('pages', 'pages::dashboard');
$routes->get('pages/documentation', 'pages::documentation');
$routes->get('dashboard', 'pages::dashboard');
$routes->get('templates', 'Pages::template');
//dataset
$routes->get('dataset', 'Dataset::index');
$routes->delete('dataset/delete/(:num)', 'Dataset::delete/$1');
$routes->get('dataset/download/(:num)', 'Dataset::download/$1');
// predict
$routes->get('predict', 'Predict::index');
$routes->post('option', 'Predict::option');
$routes->get('predict/upload', 'Predict::upload');
$routes->get('randomforest', 'Predict::randomforest');
$routes->get('neighbors', 'Predict::neighbors');
$routes->get('treeboosting', 'Predict::treeboosting');
// result
$routes->get('history', 'Result::history');
$routes->delete('result/(:num)', 'Result::delete/$1');
$routes->get('result/download/(:num)', 'Result::download/$1');
// random forest
$routes->get('randomforest/upload', 'Randomforest::index');
$routes->post('randomforest/create', 'Randomforest::create');
$routes->get('randomforest/predict', 'Randomforest::predict');
$routes->get('randomforest/result', 'Randomforest::result');
$routes->get('randomforest/result2', 'Randomforest::result2');
$routes->get('randomforest/result22', 'Randomforest::result22');
$routes->get('randomforest/result3', 'Randomforest::result3');
// gradient tree boosting
$routes->get('treeboosting/upload', 'TreeBoosting::index');
$routes->post('treeboosting/create', 'TreeBoosting::create');
$routes->get('treeboosting/predict', 'TreeBoosting::predict');
$routes->get('treeboosting/result', 'TreeBoosting::result');
$routes->get('treeboosting/result2', 'TreeBoosting::result2');
$routes->get('treeboosting/result22', 'TreeBoosting::result22');
$routes->get('treeboosting/result3', 'TreeBoosting::result3');
// neighbors
$routes->get('neighbors/upload', 'Neighbors::index');
$routes->post('neighbors/create', 'Neighbors::create');
$routes->get('neighbors/predict', 'Neighbors::predict');
$routes->get('neighbors/result', 'Neighbors::result');
$routes->get('neighbors/result2', 'Neighbors::result2');
$routes->get('neighbors/result22', 'Neighbors::result22');
$routes->get('neighbors/result3', 'Neighbors::result3');
// can access Admin
$routes->get('admin', 'Admin::users', ['filter' => 'RoleFilter']);
$routes->post('admin/save', 'Admin::save', ['filter' => 'RoleFilter']);
$routes->get('admin/create', 'Admin::create', ['filter' => 'RoleFilter']);
$routes->get('admin/restore/(:any)', 'Admin::restore/$1', ['filter' => 'RoleFilter']);
$routes->delete('admin/delete/(:num)', 'Admin::delete/$1', ['filter' => 'RoleFilter']);
// Model
$routes->get('models', 'Models::index', ['filter' => 'RoleFilter']);
$routes->get('model/new', 'Models::new', ['filter' => 'RoleFilter']);
$routes->post('model/create', 'Models::create', ['filter' => 'RoleFilter']);
$routes->delete('models/(:num)', 'Models::delete/$1', ['filter' => 'RoleFilter']);
// users
$routes->get('profile', 'user::index');
$routes->get('user/edit/(:num)', 'user::edit/$1');
$routes->post('user/update/(:num)', 'user::update/$1');
$routes->get('user/edit_image/(:num)', 'user::edit_image/$1');
$routes->post('user/update_image/(:num)', 'user::update_image/$1');

// Auth
$routes->get('login', 'Auth::login');
$routes->post('auth', 'Auth::loginProcess');
$routes->get('logout', 'Auth::logout');
$routes->get('Auth/password', 'Auth::password');
$routes->get('Auth/savepassword', 'user::savepassword');

// result
$routes->get('result/show/(:num)', 'result::show/$1');
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
