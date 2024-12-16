<?php

namespace Model;

use Model\ActiveRecord;


class Logging extends ActiveRecord {
protected static $table = 'logging';
    protected static $columnasDB = ['id', 'email', 'password', 'usuarioId'];
    
    public $id;
    public $email;
    public $password;
    public $usuarioId;

    protected static $errores = [];

    public function __construct($args = [])
    {
    $this->id = $args['id'] ?? null;
    $this->email = $args['email'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->usuarioId = $args['usuarioId'] ?? null;
    }

    public function validar() {
        // Initialize errors array to avoid accumulation of errors
        self::$errores = [];

        if(!$this->email) {
            self::$errores[] = "El Email es Obligatorio";
        }

        if(!$this->password) {
            self::$errores[] = "El Password es Obligatorio";
        }

        return self::$errores;
    }
    public function verificarPassword($resultado) {
        $email = $resultado->fetch_object();
        $autenticado = password_verify($this->password, $email['password']);

        
        if(!$autenticado) {
            self::$errores[] = 'El password es incorrecto';
        }
        return $autenticado;
    }
    // El usuario esta autenticado
    public function autenticar() {
        session_start();

        // Llenar el arreglo de la session
        $_SESSION['logging'] = $this->email;
        $_SESSION['logging'] = true;

        header('Location: /admin');
    }
}       
            



