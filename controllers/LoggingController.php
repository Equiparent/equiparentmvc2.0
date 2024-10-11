<?php

namespace Controllers;
use MVC\Router;
use Model\Admin;

class LoggingController {
public static function logging(Router $router) {

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $auth = new Admin($_POST);

        $errores = $auth->validar();
       
        if(empty($errores)) {
            // Verificar si el usuario existe
            $resultado = $auth->existeUsuario();

            if(!$resultado) {
                $errores = Admin::getErrores();
            } else {
                $autenticado = $auth->verificarPassword($resultado);

              // Verificar si el password es correcto o no
                if($autenticado) {
                    $auth->autenticar();

                } else {
                    $errores = Admin::getErrores();
                }
                     
            }
        }
    }

           
   $router->render('auth/logging', [
        'errores' => $errores
    ]);
}

public static function loggout() {
    session_start();

    $_SESSION = [];

    header('Location: /');
}

}