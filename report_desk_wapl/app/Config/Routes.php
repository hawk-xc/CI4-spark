<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);
$routes->get('/', 'Dashboard::index');
$routes->get('/login', 'User::login');

// routes untuk ticketing => wahyu 
$routes->get('/ticket', 'Ticket::index');

// routes untuk contact => denny
$routes->get('/contact', 'Contact::index');

// routes untuk Home atau landing page => for all
$routes->get('/home', 'Home::index');
