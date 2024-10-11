<?php

namespace Model;

use Model\ActiveRecord;

class Usuario extends ActiveRecord {
    // Base DE DATOS
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];
    
    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    // Define the static property for errors
    protected static $errores = [];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }

    public function validar() {
        // Initialize errors array to avoid accumulation of errors
        self::$errores = [];

        if(!$this->nombre) {
            self::$errores[] = "El Nombre de Usuario es Obligatorio";
        }

        if(!$this->telefono) {
            self::$errores[] = "El Teléfono es Obligatorio";
        }

        return self::$errores;
    }
}