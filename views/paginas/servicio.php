<?php

use Model\Servicio;

    $query = "SELECT * FROM servicios ";

    $resultado = mysqli_query($db, $query);

    $servicio = $resultado->fetch_assoc();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equiparentmvc</title>
    <meta name="description" content="Coparentalidad Digital">
    <link rel="stylesheet" href="build/css/app.css">  
    <script src="build/js/bundle.min.js"></script>
</head>
<body>

<div class="contenedor-sombra">
    <?php while($servicio = mysqli_fetch_assoc($resultado)): ?>
<div class="servicio contenido-servicio">

<h3><?php echo $servicio['titulo']; ?></h3>
<p class="precio">$<?php echo $servicio['precio']; ?></p>
<p><?php echo $servicio['description']; ?></p>
</div>
<?php endwhile; ?>
</div>
<?php



    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if(!$id) {
    header('Location: /');
   }
    $servicio = Servicio::find($id);
    incluirTemplate('header');?>
    
        <main class="contenedor seccion contenido-centrado">
            <h1><?php echo $servicio['titulo']; ?></h1>

            <img loading="lazy" src="/imagenes/<?php echo $servicio['imagen']; ?>" alt="imagen de la servicio">
         
            <div class="resumen-servicio">
                <p class="precio">$ <?php echo $servicio['precio']; ?></p>
             

                <?php echo $servicio['description']; ?>            
            </div>
        </main>
    
</body>
</html>