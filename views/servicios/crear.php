<main class="contenedor seccion">
    <h1>Crear Servicio</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    
    <a href="/admin" class="boton boton-verde-inline-block">Volver</a>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . 'formulario.php'; ?>

        <input type="submit" value="Crear Servicio" class="boton boton-verde-claro-inline-block">
    </form>

</main>

