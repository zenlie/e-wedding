<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('create-db', function() {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('e_wedding')) {
        echo 'Database created!';
    }
});

$routes->get('/', 'Home::index');
$routes->get('acara', 'Acara::index');