<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->setAutoRoute(true);
$routes->get('/', 'Dashboard::index');
// $routes->get('/testing', 'Home::testing');
// $routes->get('/testing2', 'Home::testing2');

$routes->get('/login', 'User::login');
$routes->get('/register', 'User::register');

// routes untuk ticketing => wahyu 
$routes->get('/ticket', 'Ticket::index');
$routes->get('/ticket/new', 'Ticket::new');
$routes->post('/ticket/create', 'Ticket::create');

// route ke tampilkan detail ticket
$routes->get('/ticket/(:num)', 'Ticket::showTicket/$1');

// routes untuk contact => denny
// $routes->get('/contact', 'Contact::index');
$routes->get('/contact', 'Contact::index');

// routes untuk Home atau landing page => for all
$routes->get('/home', 'Home::index');
// routes untuk validasi
$routes->get('/form', 'Form::index');
// routes untuk contact => denny
// $routes->get('/contact', 'Contact::index');
