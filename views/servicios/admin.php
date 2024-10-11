<?php
use Model\Servicio;
use Model\Usuario;

$servicios = Servicio::all();
$usuarios = Usuario::all();

$resultado = $_GET['resultado'] ?? null;

if($_SERVER['REQUEST_METHOD'] === 'POST') {


    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id) {

        $tipo = $_POST['tipo'];

        if(validarTipoContenido($tipo)) {
            
            if($tipo === 'usuario') {
                $usuario = Usuario::find($id);
                $usuario->eliminar();

            } elseif($tipo === 'servicio') {
                $servicio = Servicio::find($id);
                $servicio->eliminar();
            }
        }

       

     
    }
}
?>



<main class="contenedor seccion">

        <h1>Administrador de Equiparent</h1>

        <?php 
            if( intval( $resultado ) === 1): ?>
                <p class="alerta exito">Creado Correctamente</p>
                <?php elseif( intval( $resultado ) === 2 ): ?>
                    <p class="alerta exito">Actualizado Correctamente</p>
                <?php elseif( intval( $resultado ) === 3 ): ?>
                    <p class="alerta exito">Eliminado Correctamente</p>
                <?php endif ; ?>
        <?php  ?>

        <a href="/servicios/crear" class="boton boton-verde-claro-inline-block">Nuevo Servicio</a>
        <a href="/usuarios/crear" class="boton boton-amarillo">Nuevo(a) Usuario(a)</a>

        <h2>Servicios</h2>

        <table class="servicios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                    <th>Description</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los Resultados -->
                <?php foreach($servicios as $servicio ): ?>
                <tr>
                    <td><?php echo $servicio->id; ?></td>
                    <td><?php echo $servicio->titulo; ?></td>
                    <td>$ <?php echo $servicio->precio; ?></td>
                    <td><?php echo $servicio->description; ?></td>
                    <td>
                        <form method="POST" class="w-100" action="/servicios/eliminar">
                            <input type="hidden" name="id" value="<?php echo $servicio->id; ?>">
                            <input type="hidden" name="tipo" value="servicio">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        
                        <a href="/servicios/actualizar?id=<?php echo $servicio->id; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Usuarios</h2>

        <table class="servicios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
           
            <tbody> <!-- Mostrar los Resultados -->
                    
            <?php foreach( $usuarios as $usuario ): ?>
                <tr>
                    <td><?php echo $usuario->id; ?></td>
                    <td><?php echo $usuario->nombre . " " . $usuario->apellido; ?></td>
                    <td><?php echo $usuario->telefono; ?></td>
                <td>
                        <form method="POST" class="w-100" action="/usuarios/eliminar">
                            <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                            <input type="hidden" name="tipo" value="usuario">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>

                        <a href="/usuarios/actualizar?id=<?php echo $usuario->id; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</main>
