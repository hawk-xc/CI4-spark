<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);
// routes   
// $routes->get('/', 'Dashboard::index');
$routes->get('/testing', 'Home::testing');
// $routes->get('/testing/(:any)', 'Home::testing/$1');
$routes->get('/testing2', 'Home::testing2');
// $routes->get('/testing2', 'Home::testing2');

// routes untuk ticketing => wahyu 
$routes->get('/ticket', 'Ticket::index');
$routes->get('/ticket/new', 'Ticket::new', ['filter' => 'role:noc,admin']);
$routes->post('/ticket/create', 'Ticket::create', ['filter' => 'role:noc,admin']);
$routes->post('/ticket/edit/(:num)', 'Ticket::edit/$1', ['filter' => 'role:noc,admin']);
$routes->get('/ticket/remove/(:num)', 'Ticket::removeComment/$1', ['filter' => 'role:noc,admin']);

// route ke tampilkan detail ticket
$routes->get('/ticket/(:num)/(:num)', 'Ticket::showTicket/$1/$2');
// $routes->get('/ticket/delete/(:num)', 'TicketManage::delete/$1', ['filter' => 'role:noc,admin']);
$routes->get('/delete/(:num)', 'Ticket::delete/$1');
$routes->get('/ticket/close/(:num)/(:num)', 'Ticket::close/$1/$2');
$routes->get('/ticket/open/(:num)/(:num)', 'Ticket::open/$1/$2');

// routes untuk contact => denny
// $routes->get('/contact', 'Contact::index');
$routes->get('/contact', 'Contact::index', ['filter' => 'role:noc,admin']);

// routes untuk Home atau landing page => for all
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');

// routes untuk validasi
$routes->get('/form', 'Form::index');
$routes->get('/form/create', 'Form::create');
$routes->get('/form/edit/(:segment)', 'Form::edit/$1');
$routes->delete('/form/(:num)', 'Form::delete/$1');

// routes untuk validasi
$routes->get('/form', 'Form::index', ['filter' => 'role:noc,admin']);
$routes->get('/form/create', 'Form::create', ['filter' => 'role:noc,admin']);
$routes->get('/form/edit/(:any)', 'Form::edit/$1', ['filter' => 'role:noc,admin']);
$routes->delete('/form/(:num)', 'Form::delete/$1', ['filter' => 'role:noc,admin']);

// $routes->get('form/delete/(:num)', 'Form::delete/$1');
$routes->get('/form/(:any)', 'Form::edit/$1', ['filter' => 'role:noc,admin']);


// admin
$routes->get('/manageuser', 'Home::manageUser', ['filter' => 'role:admin']);
$routes->get('/edituser/(:num)', 'Home::editUser/$1', ['filter' => 'role:admin']);
$routes->get('/getuser', 'Home::getUser', ['filter' => 'role:admin']);
// routes untuk contact => denny
// $routes->get('/contact', 'Contact::index');
