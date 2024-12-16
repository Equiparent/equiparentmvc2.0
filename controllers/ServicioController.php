<?php
namespace Controllers;

use MVC\Router;
use Model\Servicio;
use Model\Usuario;
use Intervation\Image\ImageManagerStatic as Image;

class ServicioController {
    public static function index(Router $router) {
        
        // Lo consulta a la base de datos
        $servicios = Servicio::all(); // Método de ActiveRecord
        $usuarios = Usuario::all();
        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null; // El controlador guarda la información en la variable $
       
        // Se lo pasa a la Vista
        $router->render('servicios/admin', [
            'servicios' => $servicios,
            'resultado' => $resultado,
            'usuarios'  => $usuarios
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

           /** SUBIDA DE ARCHIVOS */
           // Generar un nombre único
           //$nombreImagen = md5( uniquid( rand(), true ) )
            // Setear la imagen
           // Realiza un resize a la imagen con intervention
           //if($_FILES['servicio']['tmp_name']['imagen']) {
               // $image = Image::make($_FILES['servicio']['tmp_name']['imagen'])->fit(800,600);
                //$servicio->setImagen($nombreImagen);
        }
            //debuguear($_SERVER['DOCUMENT_ROOT']);
            // Validar
            //$errores = $servicio->validar();

            //if (empty($errores)) {
                // Crear la carpeta para subir imagenes
                //if(!is_dir(CARPETA_IMAGENES)) {
                    //mkdir(CARPETA_IMAGENES);
        

                // Guarda la imagen en el servidor
                //$image->save(CARPETA_IMAGENES . $nombreImagen);

                // Guarda en la base de datos
                //$servicio->guardar();


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
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
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