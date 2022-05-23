<?php

namespace Config;

use App\Controllers\KanbanController;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);


$routes->get('/', 'Home::index');

// $routes->get('tickets/show', 'TicketController::show');
$routes->get('tickets/show/(:num)', 'TicketController::show/$1');
$routes->get('tickets/table', 'TicketController::table');
$routes->get('tickets/tableS01', 'TicketController::tableStatusO1');
$routes->get('tickets/tableS02', 'TicketController::tableStatusO2');
$routes->get('tickets/tableS05', 'TicketController::tableStatusO5');
$routes->get('tickets/tableS07', 'TicketController::tableStatusO7');
$routes->resource('tickets', ['controller' => 'TicketController']);

$routes->get('categorias/show/(:num)', 'CategoriaController::show/$1');
$routes->resource('categorias', ['controller' => 'CategoriaController']);

$routes->get('kanban/otro', 'KanbanController::otro');
$routes->resource('kanban', ['controller' => 'kanbanController']);


$routes->get('auth/login', 'AuthController::index');



if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
