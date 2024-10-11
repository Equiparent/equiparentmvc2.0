<?php
use Model\Servicio;
use Model\Usuario;
require '../../includes/app.php';

estaAutenticado();
 ?>
<main class="contenedor seccion">
        <h1>Actualizar Usuario</h1>

        <a href="/admin" class="boton boton-verde-claro-inline-block">Volver</a>

        <?php foreach($errores as $error): ?>

        <div class="alerta error">

            <?php echo $error; ?>

        </div>

        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/usuarios/actualizar">
            
            <?php include 'formulario.php'; ?>

            <input type="submit" value="Actualizar Usuario" class="boton boton-verde-claro">
        </form> 
        
    </main>