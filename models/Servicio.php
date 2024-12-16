<?php

namespace Model;


use Model\ActiveRecord;

class Servicio extends ActiveRecord {

    // Base DE DATOS
    protected static $table = 'servicios';
    protected static $columnasDB = ['id', 'titulo', 'precio', 'description'];

    public $id;
    public $titulo;
    public $precio;
    public $description;

    // Initialize errores array
    protected static $errores = [];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->description = $args['description'] ?? '';
    }

    public function validar() {

        self::$errores = [];

        if(!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }

        if(!$this->precio) {
            self::$errores[] = 'El Precio es Obligatorio';
        }

        if( strlen( $this->description ) ) {
            self::$errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
        }

        return self::$errores;
    }
}