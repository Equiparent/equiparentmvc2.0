<main class="contenedor seccion">

        <h1>Administrador de Equiparent</h1>

        <?php 
            if( $resultado ) {
                $mensaje = mostrarNotificacion( intval($resultado) );
                if ($mensaje) { ?>
                        <p class="alerta exito"><?php echo s($mensaje) ?> </p>
                    <?php } 
            }   
             
        ?>

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

                        <a href="/usuarios/actualizar?id=<?php echo $usuario->id; ?>" 
                        class="boton-amarillo-block">Actualizar</a>
                </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</main>
