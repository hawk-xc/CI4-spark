<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);
// routes 
// $routes->get('/', 'Dashboard::index');
$routes->get('/testing', 'Home::testing');
$routes->get('/testing2', 'Home::testing2');
// $routes->get('/testing2', 'Home::testing2');

$routes->get('/login', 'User::login');
$routes->get('/register', 'User::register');

// routes untuk ticketing => wahyu 
$routes->get('/ticket', 'Ticket::index');
$routes->get('/ticket/new', 'Ticket::new');
$routes->post('/ticket/create', 'Ticket::create');
$routes->post('/ticket/edit/(:num:)', 'Ticket::edit/$1');
$routes->get('/ticket/remove/(:num)', 'Ticket::removeComment/$1');

// route ke tampilkan detail ticket
$routes->get('/ticket/(:num)', 'Ticket::showTicket/$1');
$routes->get('/ticket/delete/(:num)', 'Ticket::delete/$1');
$routes->get('/ticket/close/(:num)', 'Ticket::close/$1');
$routes->get('/ticket/open/(:num)', 'Ticket::open/$1');

// routes untuk contact => denny
// $routes->get('/contact', 'Contact::index');
$routes->get('/contact', 'Contact::index');

// routes untuk Home atau landing page => for all
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
// routes untuk validasi    
$routes->get('/form', 'Form::index');
$routes->get('/form/create', 'Form::create');
$routes->get('/form/edit/(:segment)', 'Form::edit/$1');
$routes->delete('/form/(:num)', 'Form::delete/$1');
// $routes->get('form/delete/(:num)', 'Form::delete/$1');
$routes->get('/form/(:any)', 'Form::edit/$1');


// routes untuk contact => denny
// $routes->get('/contact', 'Contact::index');
