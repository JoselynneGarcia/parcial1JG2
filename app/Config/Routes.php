<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Producto::index');
$routes->get('productos', 'Producto::index');
$routes->get('productos/create', 'Producto::create');
$routes->post('productos/store', 'Producto::store');
$routes->get('productos/edit/(:num)', 'Producto::edit/$1');
$routes->post('productos/update', 'Producto::update');
$routes->get('productos/delete/(:num)', 'Producto::delete/$1');
