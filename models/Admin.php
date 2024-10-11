<?php

namespace Model;

use Model\ActiveRecord;


class Admin extends ActiveRecord {
    // Base DE DATOS
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];
    protected static $errores = [];
    protected static $db; // Ensure this is initialized in ActiveRecord or Admin class

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            static::$errores[] = "El Nombre es obligatorio";
        }
        if(!$this->telefono) {
            static::$errores[] = "El Telefono del usuario es obligatorio";
        }
        return static::$errores;
    }

    public function existeUsuario() {
        // Revisar si el usuario existe.
        $query = "SELECT * FROM" . self::$tabla . " WHERE nombre = '" . $this->nombre . "' LIMIT 1";
        
        $resultado = self::$db->query($query);

        if(!$resultado->num_rows) {
            static::$errores[] = 'El Usuario No Existe';

            return;
        }
        return $resultado;
    }
       

    public function verificarPassword($resultado) {
        $usuario = $resultado->fetch_object();
        $autenticado = password_verify($this->password, $usuario['password']);

        
        if(!$autenticado) {
            static::$errores[] = 'El password es incorrecto';
        }
        return $autenticado;
    }
    // El usuario esta autenticado
    public function autenticar() {
        session_start();

        // Llenar el arreglo de la session
        $_SESSION['usuario'] = $this->nombre;
        $_SESSION['logging'] = true;

        header('Location: /admin');
    }
}       
            

          