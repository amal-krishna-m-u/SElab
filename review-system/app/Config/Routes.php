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
$routes->get('/', 'Home::index');







//admin controller view routes 

$routes->get('/Admin/register', 'Admin\Admin::registerView');
$routes->get('/Admin/login', 'Admin\Admin::loginView');
$routes->get('/Admin/dashboard', 'Admin\Admin::dashboardView');

//admin controller model routes 
$routes->post('/Admin/register', 'Admin\Admin::register');
$routes->post('/Admin/login','Admin\Admin::login');
$routes->post('/Admin/logout','Admin\Admin::logout');

//user controller view routes
$routes->get('/User/login', 'User\User::loginView');
$routes->get('/User/register', 'User\User::registerView');
$routes->get('/User/dashboard','User\User::dashboardView');
$routes->get('/User/editDetails','User\User::editDetailsView');




//user controller model routes

$routes->post('/User/login','User\User::login');
$routes->post('/User/register','User\User::register');
$routes->post('/User/dashboard','User\User::dashbaord');
$routes->post('/User/editDetails','User\User::editDetails');


//Application controller view routes 

$routes->get('/Application/editCategory','Application\Application::editCategoryView');
$routes->get('/Application/deleteCategory', 'Application\Application::deleteCategoryView');
$routes->get('/Application/addCategory','Application\Application::addCategoryView');
$routes->get('/Application/selectCategory','Application\Application::selectCategoryView');
$routes->get('/Application/listApplication','Application\Application::listApplicationView');
$routes->get('/Application/listOfApplicationToVerifyView','Application\Application::listOfApplicationToVerifyView');
$routes->get('/Application/addApplication','Application\Application::addApplicationView');
$routes->get('/Application/applicationLeaderbaord','Application\Application::applicationLeaderboardView');
$routes->get('/Application/infoApplication','Application\Application::infoApplicationView');
$routes->get('/Application/oldReviewRating','Application\Application::oldReviewRatingView');
$routes->get('/Application/newReviewRating','Application\Application::newReviewRatingView');
$routes->get('/Application/searchLeaderboard','Application\Application::serachLeaderboardView');
// Application controller model routes 
$routes->post('/Application/editCategory','Application\Application::editCategory');
$routes->post('/Application/deleteCategory', 'Application\Application::deleteCategory');
$routes->post('/Application/addCategory','Application\Application::addCategory');
$routes->post('/Application/selectCategory','Application\Application::selectCategory');
$routes->post('/Application/listApplication','Application\Application::listApplication');
$routes->post('/Application/listOfApplicationToVerifyView','Application\Application::listOfApplicationToVerify');
$routes->post('/Application/addApplication','Application\Application::addApplication');
$routes->post('/Application/applicationLeaderbaord','Application\Application::applicationLeaderboard');
$routes->post('/Application/infoApplication','Application\Application::infoApplication');
$routes->post('/Application/oldReviewRating','Application\Application::oldReviewRating');
$routes->post('/Application/newReviewRating','Application\Application::newReviewRating');
$routes->post('/Application/searchLeaderboard','Application\Application::serachLeaderboard');













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
