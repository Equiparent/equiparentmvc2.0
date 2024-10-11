<?php

namespace Controllers;

use MVC\Router;
use Model\Servicio;
use Model\Usuario;


class ServicioController {
    public static function index(Router $router) {
              
        // Lo consulta a la base de datos
        $servicios = Servicio::all(); // Método de ActiveRecord
              
        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null; // El controlador guarda la información en la variable $

        // Se lo pasa a la Vista
        $router->render('servicios/admin', [
            'servicios' => $servicios,
            'resultado' => $resultado
            
        ]);
    }

    public static function crear(Router $router) {
        $servicio = new Servicio;
        $usuarios = Usuario::all();

        // Arreglo con mensajes de errores
        $errores = Servicio::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            /** Crea una nueva instancia */
            $servicio = new Servicio($_POST['servicio']);

            // Validar
            $errores = $servicio->validar();

            if (empty($errores)) {
                // Guarda en la base de datos
                $servicio->guardar();
            }
        }
            // Hacia la Vista
        $router->render('servicios/crear', [
            'servicio' => $servicio,
            'usuarios' => $usuarios,
            'errores' => $errores
            
        ]);
    }

    public static function actualizar(Router $router) {

        $id = validarORedireccionar('/admin');

        $servicio = Servicio::find($id);

        $usuarios = Usuario::all();
        
        $errores = Servicio::getErrores();

        // Método POST para actualizar
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Asignar los atributos
            $args = $_POST['servicio'];
            $servicio->sincronizar($args);

            // Validación
            $errores = $servicio->validar();

            if (empty($errores)) {

                $servicio->guardar();
            }
        }

        $router->render('/servicios/actualizar', [
            'servicio' => $servicio,
            'errores' => $errores,
            'usuarios' => $usuarios
        ]);
    }
    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id) {
                $tipo = $_POST['tipo'];
            
            if(validarTipoContenido($tipo)) {
               $servicio = Servicio::find($id);
               $servicio->eliminar();
              }
            }

        }
    }
}