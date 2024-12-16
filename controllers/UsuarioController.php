<?php
namespace Controllers;

use MVC\Router;
use Model\Usuario;

class UsuarioController {
    public static function crear( Router $router ) {
        
        $errores = Usuario::getErrores();
        $usuario = new Usuario;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            /** Crea una nueva instancia */

            if (isset($_POST['usuario'])) {
                $usuario = new Usuario($_POST['usuario']);
            }
    
        //     if(!preg_match('/[0-9]{9}/', $usuario->password)) {
        //         $errores[] = "Password no válido";
        //     }
    
            // Validar que no haya campos vacíos
            $errores = $usuario->validar();
    
            // No hay errores
            if(empty($errores)) {
                $usuario->guardar();
            }
        }

        $router->render('usuarios/crear', [
            'errores' => $errores,
            'usuario' => $usuario
        ]);
    }

    public static function actualizar( Router $router ) {
        
        $errores = Usuario::getErrores();
        $id = validarORedireccionar('/admin');

        // Obtener datos del usuario que queremos actualizar
        $usuario = Usuario::find($id);

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     // Asignar los atributos
        //     if (isset($_POST['usuario'])) {
                $args = $_POST['usuario'];
                $usuario->sincronizar($args);
        //     }
    
           // Validación
            $errores = $usuario->validar();
    
            if(empty($errores)) {
                 $usuario->guardar();
             }
     }

        $router->render('usuarios/actualizar', [
            'errores' => $errores,
            'usuario' => $usuario
        ]);
    }

    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // Validar el id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id) {
                // Valida el tipo a eliminar
                $tipo = $_POST['tipo'];

                if(validarTipoContenido($tipo)) {
                    $usuario = Usuario::find($id);
                    $usuario->eliminar();
                }
            }
        }
    }
}
?>