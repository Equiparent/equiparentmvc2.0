<?php

    $db = conectarDB();
    // Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $email = mysqli_real_escape_string($db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL) );
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $errores[] = "El email es obligatorio o no es válido";
        }

        if(!$password) {
            $errores[] = "El password es obligatorio";
        }

        if(empty($errores)) {

            // Revisar si el usuario existe.
            $query = "SELECT * FROM logging WHERE email = '$email' ";
            $resultado = mysqli_query($db, $query);


            

            if( $resultado->num_rows ) {
                // Revisar si el password es correcto
                $email = mysqli_fetch_assoc($resultado);

                var_dump($password['password']);

                //  Verificar si el password es correcto o no
                
                $auth = password_verify($password) ;

                if($auth) {
                    //El usuario está autenticado
                    session_start();

                    // Llenar el arreglo de la sesión
                    $_SESSION['logging'] = $email['email'];
                    $_SESSION['logging'] = true;

                    header('Location: /admin');


                } else {
                    $errores[] = 'El password es incorrecto';
                }

            } else {
                $errores[] = "El Usuario no existe";
            }
        }


    }


?>

        <main class="contenedor seccion contenido-centrado">
            <h1>Iniciar Sesión</h1>

            <?php foreach($errores as $error): ?>
                <div class="alerta error">
                    <?php echo $error; ?>

                </div>

            <?php endforeach; ?>

            <form method="POST" class="formulario">
            <fieldset>
                    <legend>Email y Password</legend>

                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="Tu Email" id="email" required>

                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Tu Password" id="password" required>
                </fieldset>

                <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
            </form>
        </main>
    

