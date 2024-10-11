<?php
declare(strict_types=1);



$db = conectarDB();

// Crear un email y password
$email = "javieracowper@equiparent.app";
$password = "123451234";

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


