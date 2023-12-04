<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');
$routes->get('acara', 'Acara::index');
$routes->get('acara/add', 'Acara::create');
$routes->post('acara', 'Acara::store');