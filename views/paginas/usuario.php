<main class="contenedor seccion">
        <h1>Registrar Usuario(a)</h1>            

        <?php foreach($errores as $error): ?>

                <div class="alerta error">

                <?php echo $error; ?>

                </div>             
                 
            <?php endforeach; ?>
            
            <a href="/admin" class="boton boton-verde-claro-inline-block">Volver</a>

            <form class="formulario" method="POST" action="/usuarios/crear">
                <?php include __DIR__ . 'formulario.php'; ?>
                
                <input type="submit" value="Registrar Usuario(a)" class="boton boton-verde-claro-inline-block">
            </form> 
        </main><?php
declare(strict_types=1);


$db = conectarDB();

// Crear un email y password
$email = [];
$password = [];

$passwordHash = password_hash($password, PASSWORD_BCRYPT);


// Query para crear el usuario

$query = " INSERT INTO logging (email, password) VALUES ( '$email', '$passwordHash'); ";

echo $query;

// Agregarlo a la base de Datos
mysqli_query($db, $query);

?>

<?php



function usuarioAutenticado(bool $autenticado) : string|int {
    if($autenticado) {
        return "El usuario esta autenticado";
    } else {
        return null;
    }
}

$usuario = usuarioAutenticado(true);
echo $usuario;
?>
<?php

namespace Controllers;
use MVC\Router;
use Model\Admin;

  // Autenticar el usuario
  
if($_SERVER['REQUEST_METHOD'] === 'POST') {
   $admin = new Admin($_POST['admin']);
   $errores = $admin->validar();


   if(empty($errores)) {

    // Revisar si el usuario existe.
    $resultado = $admin->existeUsuario();

    // Asignar el resultado del arreglo de resultado
    [$existe, $resultado] = $resultado;
    
    if( $existe ) {
        // Usuario existe, verificar su password
        $resultado = $admin->verificarPassword($resultado);
        [$auth] = $resultado;

        // Verificar si el password es correcto o no
        if(!$auth) {
            return header('Location: /admin');
        } else {
            $errores = $resultado[1];
        }
    } else {
        $errores = $resultado;
    }
}

}

?>



