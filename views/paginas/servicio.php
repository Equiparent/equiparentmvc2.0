
<main class="contenedor seccion contenido-centrado">
     <h1><?php echo $servicio->titulo; ?></h1>

        <img loading="lazy" src="/img/<?php echo $servicio->img; ?>" alt="imagen del servicio">
        
        <div class="resumen-servicio">
            <p class="precio">$ <?php echo $servicio->precio; ?></p>
            

            <?php echo $servicio->description; ?>            
        </div>
</main>
    
