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
$routes->get('Admin/addCategory', 'Admin\Admin::addCategoryView');
$routes->get('/Admin/register', 'Admin\Admin::registerView');
$routes->get('/Admin/login', 'Admin\Admin::loginView');
$routes->get('/Admin/dashboard', 'Admin\Admin::dashboardView');
$routes->get('admin/delete_user', 'Admin\Admin::deleteUser');
$routes->get('Admin/listApplications', 'Admin\Admin::listApplicationsView');
$routes->get('Admin/addApplication', 'Admin\Admin::addApplicationView');
//admin controller model routes 
$routes->post('/Admin/register', 'Admin\Admin::register');
$routes->post('/admin/addApplication', 'Admin\Admin::addApplication');
$routes->post('/Admin/login','Admin\Admin::login');
$routes->post('/Admin/addcategory','Admin\Admin::addCategory');
$routes->post('/Admin/listApplications','Admin\Admin::listApplications');
$routes->post('/Admin/logout','Admin\Admin::logout');

//user controller view routes
$routes->get('/User/login', 'User\User::loginView');
$routes->get('/User/register', 'User\User::registerView');
$routes->get('/User/dashboard','User\User::dashboardView');
$routes->get('/User/editDetails','User\User::editDetailsView');
$routes->get('User/listOfUsers','User\User::listOfUsersView');
$routes->get('User/addApplication','User\User::addApplicationView');




//user controller model routes

$routes->post('/User/login','User\User::login');
$routes->post('/User/register','User\User::register');
$routes->post('/User/dashboard','User\User::dashbaord');
$routes->post('/User/editDetails','User\User::editDetails');
$routes->post('/User/addApplication','User\User::addApplication');


//Application controller view routes 


$routes->get('/Application/selectCategory','Application\Application::selectCategoryView');
$routes->get('/Application/applicationLeaderbaord','Application\Application::applicationLeaderboardView');
$routes->get('/Application/review','Application\Application::reviewView');
$routes->get('/Application/rate','Application\Application::rateView');
$routes->get('/Application/moreinfo','Application\Application::moreInfoView');

// Application controller model routes 

$routes->post('/Application/selectCategory','Application\Application::selectCategory');
$routes->post('/Application/applicationLeaderbaord','Application\Application::applicationLeaderboard');
$routes->post('/Aplication/leaderboardSearch','Application\Application::leaderboardSearch');
$routes->get('/Application/review','Application\Application::reviewView');
$routes->get('/Application/rate','Application\Application::rateView');
$routes->get('/Application/moreinfo','Application\Application::moreInfoView');













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
