<main class="contenedor seccion">
    <h1>Actualizar Servicio</h1>

        <?php foreach($errores as $error): ?> 
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

    <a href="/admin" class="boton boton-verde-inline-block">Volver</a>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>

        <input type="submit" value="Actualizar Servicio" class="boton boton-amarillo">
    </form>

</main>

<!-- <?php 
// use Model\Servicio;
//use Model\Usuario;
//use Intervention\Image\ImageManagerStatic as Image;

// Validar la URL por ID válido
   // $id = $_GET['id'];
    //$id = filter_var($id, FILTER_VALIDATE_INT);

   // if(!$id) {
   //     header('Location: /admin');
    //}


// $servicio = Servicio::find($id);
 //$usuarios = Usuario::all();
 //$errores = Servicio::getErrores();

//if($_SERVER['REQUEST_METHOD'] === 'POST') {
  //  $args = $_POST['servicio'];
   // $servicio->sincronizar($args);
   // $errores = $servicio->validar();
//} ?>