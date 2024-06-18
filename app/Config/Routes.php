<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', [ 'filter' => 'myfilter:test']);

$routes->group('notworking', ['filter' => 'myfilter:config'], static function ($routes) {
    $routes->get('/', 'Home::index');

    $routes->group('users', ['filter' => 'myfilter:region'], static function ($routes) {
        $routes->get('list', 'Home::index');
    });
});

$routes->group('working', ['filter' => 'myfilter:config'], static function ($routes) {
    $routes->get('/', 'Home::index');

    $routes->group('users', ['filter' => 'myfilter2:region'], static function ($routes) {
        $routes->get('list', 'Home::index');
    });
});
