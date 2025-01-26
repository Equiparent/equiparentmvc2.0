<?php

namespace Controllers;
use MVC\Router;
use Model\Logging;
use Model\ActiveRecord;

class LoggingController {
    public function logging(Router $router) {
        $errores = [];
       
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            debuguear($_SERVER);
            $auth = new Logging($_POST);
            $errores = $auth->validar();
           
            if(empty($errores)) {
                // Verificar si el usuario existe
                $resultado = $this->existeUsuario($auth->email); // Updated line

                if(!$resultado) {
                    $errores = Logging::getErrores();
                } else {
                    $autenticado = $auth->verificarPassword($resultado);
                    // Verificar si el password es correcto o no
                    if($autenticado) {
                        $auth->autenticar();
                    } else {
                        $errores = Logging::getErrores();
                    }
                }
            }
        }

        $router->render('auth/logging', [
            'errores' => $errores
        ]);
    }

    // public function existeUsuario($email) {
    //     // Example logic to check if the user exists
    //     $usuarios = ['email1', 'email2', 'email3']; // Example user list
    //     return in_array($email, $usuarios);
    // }

    public static function loggout() {
        session_start();
        debuguear($_SESSION);
        $_SESSION = [];
        header('Location: /');
    }
}
