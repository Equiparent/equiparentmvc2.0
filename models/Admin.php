<?php

namespace Model;

use Model\ActiveRecord;


class Admin extends ActiveRecord {
    // Base DE DATOS
    protected static $table = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];
    protected static $errores = [];
    protected static $db; // Ensure this is initialized in ActiveRecord or Admin class

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;
    public $password;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$errores[] = "El Nombre es obligatorio";
        }
        if(!$this->telefono) {
            self::$errores[] = "El Telefono del usuario es obligatorio";
        }
        return self::$errores;
    }

    public function existeUsuario($email) {
        // Revisar si el usuario existe.
        $query = "SELECT * FROM" . self::$table . " WHERE nombre = '" . $this->nombre . "' LIMIT 1";
        
        $resultado = self::$db->query($query);

        if(!$resultado->num_rows) {
            self::$errores[] = 'El Usuario No Existe';

            return;
        }
        return $resultado;
    }

    public function verificarPassword($resultado) {
        // Implement the method logic here
        // Example:
        $auth = password_verify($this->password, $resultado['password']);
        return [$auth];
    }
}