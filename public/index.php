<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\ServicioController;
use Controllers\UsuarioController;
use Controllers\PaginasController;
use Controllers\LoggingController;


$router = new Router();

// Zona Privada
$router->get('/admin', [ServicioController::class, 'index']);
$router->get('/servicios/crear', [ServicioController::class, 'crear']);
$router->post('/servicios/crear', [ServicioController::class, 'crear']);
$router->get('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/eliminar', [ServicioController::class, 'eliminar']);

$router->get('/usuarios/crear', [UsuarioController::class, 'crear']);
$router->post('/usuarios/crear', [UsuarioController::class, 'crear']);
$router->get('/usuarios/actualizar', [UsuarioController::class, 'actualizar']);
$router->post('/usuarios/actualizar', [UsuarioController::class, 'actualizar']);
$router->post('/usuarios/eliminar', [UsuarioController::class, 'eliminar']);

// Zona Pública
$router->get('/', [PaginasController::class, 'index']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/servicios', [PaginasController::class, 'servicios']);
$router->get('/servicio', [PaginasController::class, 'servicio']);
$router->get('/blog', [PaginasController::class, 'blog']);
$router->get('/entrada', [PaginasController::class, 'entrada']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);

// logging y Autenticación
$router->get('/logging', [LoggingController::class, 'logging']);
$router->post('/logging', [LoggingController::class, 'logging']);
$router->get('/loggout', [LoggingController::class, 'loggout']);
$router->get('/usuario', [UsuarioController::class, 'suscripcion']);
$router->get('/usuario', [UsuarioController::class, 'suscripcion']);
$router->get('/usuario', [UsuarioController::class, 'unsuscribe']);

$router->comprobarRutas();