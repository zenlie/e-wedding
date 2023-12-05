<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');
$routes->get('acara', 'Acara::index');
$routes->get('acara/add', 'Acara::create');
$routes->post('acara', 'Acara::store');
$routes->get('acara/edit/(:any)', 'Acara::edit/$1');
$routes->get('acara/(:any)', 'Acara::update/$1');