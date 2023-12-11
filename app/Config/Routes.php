<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Ruta para vista index
$routes->get('consultas', 'ConsultasController::index');
// Ruta para mostrar un formulario de registro
$routes->get('consultas/crear', 'ConsultasController::create');
// Ruta para guardar el registro
$routes->post('consultas', 'ConsultasController::store');

// VERBOS HTTP: GET, POST, PUT, DELETE, UPDATE, PATCH, ...

// Ruta para vista index de categorías
$routes->get('categorias', 'CategoriaController::index');
// Ruta para formulario de creación de categoría
$routes->get('categorias/crear', 'CategoriaController::create');
// Ruta para guardar los datos del formulario
$routes->post('categorias', 'CategoriaController::store');

$routes->get('categorias/ver/(:num)', 'CategoriaController::show/$1');
$routes->get('categorias/editar/(:num)', 'CategoriaController::edit/$1');
$routes->get('categorias/eliminar/(:num)', 'CategoriaController::delete/$1');