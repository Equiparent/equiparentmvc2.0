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
$router->get(url: '/admin', fn: [ServicioController::class, 'index']);
$router->get(url: '/servicios/crear', fn: [ServicioController::class, 'crear']);
$router->post(url: '/servicios/crear', fn: [ServicioController::class, 'crear']);
$router->get(url: '/servicios/actualizar', fn: [ServicioController::class, 'actualizar']);
$router->post(url: '/servicios/actualizar', fn: [ServicioController::class, 'actualizar']);
$router->post(url: '/servicios/eliminar', fn: [ServicioController::class, 'eliminar']);

$router->get(url: '/usuarios/crear', fn: [UsuarioController::class, 'crear']);
$router->post(url: '/usuarios/crear', fn: [UsuarioController::class, 'crear']);
$router->get(url: '/usuarios/actualizar', fn: [UsuarioController::class, 'actualizar']);
$router->post(url: '/usuarios/actualizar', fn: [UsuarioController::class, 'actualizar']);
$router->post(url: '/usuarios/eliminar', fn: [UsuarioController::class, 'eliminar']);

// Zona Pública
$router->get(url: '/', fn: [PaginasController::class, 'index']);
$router->get(url: '/nosotros', fn: [PaginasController::class, 'nosotros']);
$router->get(url: '/servicios', fn: [PaginasController::class, 'servicios']);
$router->get(url: '/servicio', fn: [PaginasController::class, 'servicio']);
$router->get(url: '/blog', fn: [PaginasController::class, 'blog']);
$router->get(url: '/entrada', fn: [PaginasController::class, 'entrada']);
$router->get(url: '/contacto', fn: [PaginasController::class, 'contacto']);
$router->post(url: '/contacto', fn: [PaginasController::class, 'contacto']);
$router->get(url: '/google_calendar', fn: [PaginasController::class, 'google_calendar']);

// logging y Autenticación
$router->get(url: '/logging', fn: [LoggingController::class, 'logging']);
$router->post(url: '/logging', fn: [LoggingController::class, 'logging']);
$router->get(url: '/loggout', fn: [LoggingController::class, 'loggout']);
$router->get(url: '/usuario', fn: [UsuarioController::class, 'suscripcion']);
$router->get(url: '/usuario', fn: [UsuarioController::class, 'suscripcion']);
$router->get(url: '/usuario', fn: [UsuarioController::class, 'unsuscribe']);

$router->comprobarRutas();