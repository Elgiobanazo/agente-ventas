<?php 
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\PaginasController;

$router = new Router();

// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Private
$router->get('/', [PaginasController::class, 'index']);
$router->get('/cliente-nuevo', [PaginasController::class, 'cliente_nuevo']);
$router->post('/cliente-nuevo', [PaginasController::class, 'cliente_nuevo']);

$router->get('/mostrar-clientes', [PaginasController::class, 'mostrar_clientes']);
$router->post('/mostrar-clientes', [PaginasController::class, 'mostrar_clientes']);

$router->post('/datos-cliente', [PaginasController::class, 'datos_cliente']);

$router->get('/simulador', [PaginasController::class, 'simulador']);
$router->post('/simulador-calculado', [PaginasController::class, 'simulador_calculado']);

$router->comprobarRutas();