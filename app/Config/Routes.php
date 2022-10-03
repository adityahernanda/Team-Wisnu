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
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index');

$routes->group('dashboard', function ($routes) {
    $routes->group('client', function ($routes) {
        $routes->get('/', 'ClientDashboard::index');
        $routes->get('proyek', 'ClientDashboard::proyek');
        $routes->get('proyek/(:any)', 'ClientDashboard::proyek/$1');
        $routes->get('proyek/(:any)/(:any)', 'ClientDashboard::proyek/$1/$2');
        $routes->get('pembayaran', 'ClientDashboard::pembayaran');
        $routes->get('profile', 'ClientDashboard::profile');
    });
    $routes->group('sa', function ($routes) {
        $routes->get('/', 'SuperAdminDashboard::index');
        $routes->get('proyek', 'SuperAdminDashboard::proyek');
        $routes->get('proyek/(:any)', 'SuperAdminDashboard::proyek/$1');
        $routes->get('proyek/(:any)/(:any)', 'SuperAdminDashboard::proyek/$1/$2');
        $routes->get('pembayaran', 'SuperAdminDashboard::pembayaran');
        $routes->get('pembayaran/(:any)', 'SuperAdminDashboard::pembayaran/$1');
        $routes->get('portofolio', 'SuperAdminDashboard::portofolio');
        $routes->get('pengguna', 'SuperAdminDashboard::pengguna');
        $routes->get('profile', 'SuperAdminDashboard::profile');
    });
    $routes->group('admin', function ($routes) {
        $routes->get('/', 'AdminDashboard::index');
        $routes->get('proyek', 'AdminDashboard::proyek');
        $routes->get('proyek/(:any)', 'AdminDashboard::proyek/$1');
        $routes->get('proyek/(:any)/(:any)', 'AdminDashboard::proyek/$1/$2');
        $routes->get('profile', 'AdminDashboard::profile');
    });
});


$routes->group('action', function ($routes) {
    $routes->group('login', function ($routes) {
        $routes->post('client', 'Login::loginClient');
        $routes->post('admin', 'Login::loginAdmin');
    });
    $routes->group('client', function ($routes) {
        $routes->post('add', 'ActionClient::addClient');
        $routes->get('get', 'ActionClient::getClient');
        $routes->post('edit', 'ActionClient::editClientById');
        $routes->post('delete', 'ActionClient::deleteClient');
    });
    $routes->group('admin', function ($routes) {
        $routes->post('add', 'ActionAdmin::addAdmin');
        $routes->get('get', 'ActionAdmin::getAdmin');
        $routes->post('edit', 'ActionAdmin::editAdminById');
        $routes->post('delete', 'ActionAdmin::deleteAdmin');
    });
    $routes->post('logout', 'Login::logout');
    $routes->group('proyek', function ($routes) {
        // SA
        $routes->get('get', 'ActionProyek::getProyekWithOwner');
        
        $routes->post('card', 'ActionProyek::getCardData');
        $routes->get('/', 'ActionProyek::getProyek');
        $routes->get('(:any)', 'ActionProyek::getProyek/$1');
        $routes->post('admin', 'ActionProyek::getProyekByIdAdmin');
    });
    $routes->group('portofolio', function ($routes) {
        $routes->post('add', 'ActionPortofolio::addPortofolio');
        $routes->get('get', 'ActionPortofolio::getPortofolio');
        $routes->post('edit', 'ActionPortofolio::editPortofolio');
        $routes->post('delete', 'ActionPortofolio::deletePortofolio');
    });
    $routes->group('progress', function ($routes) {
        $routes->get('/', 'ActionProyek::getProgress');
        $routes->post('/', 'ActionProyek::getProgressByIdProyek');
        $routes->get('(:any)', 'ActionProyek::getProgress/$1');
    });
    $routes->group('pembayaran', function ($routes) {
        $routes->post('list', 'ActionPembayaran::getPembayaranByIdProyek');
        $routes->post('card', 'ActionPembayaran::getCardData');
        $routes->post('add', 'ActionPembayaran::addPembayaran');
        $routes->post('delete', 'ActionPembayaran::deletePembayaranById');
    });
});
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
