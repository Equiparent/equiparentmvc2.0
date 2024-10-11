<?php

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';
$db = conectarDB();


use Model\ActiveRecord;
ActiveRecord::setDB($db);

// Conectarnos a la base de datos


use Model\Servicio;
$servicio = new Servicio;
var_dump($servicio);

use Model\Usuario;




