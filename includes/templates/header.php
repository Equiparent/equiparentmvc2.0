<?php 
if(!isset($_SESSION)) {
        session_start(); 
}

$auth = $_SESSION['logging'] ?? true;

if(!isset($inicio)) {
    $inicio = false;
}
$contenido = '';
$view = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equiparentmvc</title>
    <meta name="description" content="Coparentalidad Digital">
    <link rel="stylesheet" href="/build/css/app.css">
     <script src="/build/js/bundle.min.js"></script>

  </head>
<body>

<header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
    <div class="contenedor contenido-header">
      <div class="logo">        
              <a href="/"><h1>EquiParent.App</h1></a>
            
              <div class="mobile-menu">
                  <img src="/build/img/barras.svg" alt="icono menu responsive">
              </div>
        
              <div class="alinear-derecha">
                  <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="icono dark-mode">
                  <nav class="navegacion">
                    <a href="/nosotros">Nosotros</a>
                    <a href="/servicios">Servicios</a>
                    <a href="/blog">Blog</a>
                    <a href="/usuarios/crear">Crear Cuenta</a>
                    <?php if($auth): ?>
                       <a href="/logging">Iniciar Sesión</a>
                      <a href="/loggout">Cerrar Sesión</a>
                    <?php endif; ?>
                  </nav><!--.navegacion-->
            </div> <!--.logo--> 
    </div><!--.contenido-header-->
       

   
    </header> 