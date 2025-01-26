<?php 

use Model\Servicio;

if($_SERVER['SCRIPT_NAME'] === '/servicios') {
    $servicios = Servicio::all();
} else {

}
?>

<div class="contenedor-sombra">
    <?php foreach($servicios as $servicio) { ?>
    
    <div class="servicio">

        <img src="lazy" src="/img/<?php echo $servicio['img']; ?>" alt="servicio digital">
    
        <div class="contenedor-sombra">
        <h3><?php echo $servicio['titulo']; ?></h3>
        <p class="precio">$<?php echo $servicio['precio']; ?></p>
        <p><?php echo $servicio['description']; ?></p>

        </div>
    </div>

    <?php 
                $limite = 10;
                @include '/servicios.php';
            ?>   
    <a href="/servicio?id=<?php echo $servicio['id']; ?>" class="boton-amarillo-block">
        Ver Servicio
    </a>
</div>
<?php } ?>

<?php
// Cerrar la conexión
    mysqli_close($db);

?>
