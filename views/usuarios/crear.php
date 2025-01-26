
<main class="contenedor seccion">
        <h1>Registrar Usuario(a)</h1>            
        
        <?php 
            if( $resultado ) {
                $mensaje = mostrarNotificacion( intval($resultado) );
                if ($mensaje) { ?>
                        <p class="alerta exito"><?php echo s($mensaje) ?> </p>
                    <?php } 
            }   
             
        ?>
        
    <a href="/admin" class="boton boton-verde-claro-inline-block">Volver</a>

        <?php foreach($errores as $error): ?>

            <div class="alerta error">

                <?php echo $error; ?>

            </div>             
                 
            <?php endforeach; ?>
            
            
            <form class="formulario" method="POST" action="/usuarios/crear">
            <?php include 'formulario.php'; ?>
                
                <input type="submit" value="Registrar Usuario(a)" class="boton boton-verde-claro-inline-block">
            </form> 
 </main>
