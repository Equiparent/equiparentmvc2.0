<?php

define('TEMPLATES_URL', __DIR__. '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
//define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');


function incluirTemplate( string $nombre, bool $inicio = true ) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function obtener_servicios() {
    try {
        // Importar las credenciales
        require 'database.php';
        //Consulta SQL
        $sql = "SELECT * FROM servicios; ";

        // Realizar la consulta
        $query = mysqli_query($db, $sql);

        return $query;

        // Accede a los resultados

        echo "<pre>";
        var_dump(mysqli_fetch_assoc($query) );
        echo "</pre>";

        // Cerrar la conexión (opcional)
        $resultado = mysqli_close($db);
        echo $resultado;
    }
    catch (\Throwable $th) {
        var_dump($th);
    }
}



function estaAutenticado() : bool {
    session_start();

    $auth = $_SESSION['email'];
    if($auth) {
        return true;
    }
    return false;
}


function debuguear($variable) {
    // echo "<pre>";
    // var_dump($variable);
    // echo "</pre>";
    // exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}
// Valida tipo de petición
function validarTipoContenido($tipo){
    $tipos = ['usuario', 'servicio'];
    return in_array($tipo, $tipos);
}

// Muestra los mensajes
function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch ($codigo) {
        case 1:
            $mensaje = 'Creado Correctamente';
            break;
        case 2:
            $mensaje = 'Actualizado Correctamente';
            break;
        case 3:
            $mensaje = 'Eliminado Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}
function validarORedireccionar(string $url) {
    // Validar la URL por ID válido
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id) {
            header("Location: ${url}");
        }

        return $id;
}