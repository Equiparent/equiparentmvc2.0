<?php 
    if(!isset($_SESSION)) {
        session_start(); 
    }
  $auth = $_SESSION['logging'] ?? true;
    if(!isset($inicio)) {
        $inicio = false; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equiparentmvc</title>
    <meta name="description" content="Coparentalidad Digital">
    <link rel="stylesheet" href="/build/css/app.css">  
    
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
       

   <?php echo $inicio ? "<h2>App Móvil para la Coparentalidad<span>Ambos Padres - Una Agenda</span><span>Acceso 24/7 Online</span></h2>" : ''; ?>
       
    <?php echo $inicio ? "<div class=boton-verde-inline-block>
           <a href=/google_calendar> Calendario Compartido</a>" : ''; ?>
        
    <?php echo $inicio ? "<div class=icon>" : ''; ?>  
     <?php echo $inicio ? "<a class=icon href=/google_calendar>" : ''; ?>      
           <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hand-click" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M8 13v-8.5a1.5 1.5 0 0 1 3 0v7.5" />
                  <path d="M11 11.5v-2a1.5 1.5 0 0 1 3 0v2.5" />
                  <path d="M14 10.5a1.5 1.5 0 0 1 3 0v1.5" />
                  <path d="M17 11.5a1.5 1.5 0 0 1 3 0v4.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7l-.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47" />
                  <path d="M5 3l-1 -1" />
                  <path d="M4 7h-1" />
                  <path d="M14 3l1 -1" />
                  <path d="M15 6h1" />
              </svg> </a>
           </div>
    </div>        
        </div> <!--.contenedor-->
    </header> 


    <?php echo $contenido; ?>
    
   
<footer class="footer seccion">
      <div class="contenedor contenido-footer">
        <nav class="navegacion">
              <a href="/nosotros">Nosotros</a>
              <a href="/servicios">Servicios</a>
              <a href="/blog">Blog</a>
              <a href="/contacto">Contacto</a>
        </nav>
      </div>
    <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>
</footer>
<script src="/build/js/bundle.min.js"></script>
</body>
</html>