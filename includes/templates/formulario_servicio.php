<fieldset>
    <legend>Información General</legend>

    <label for="titulo">Titulo:</label>
    <input type="text" id="titulo" name="servicio[titulo]" placeholder="Titulo Servicio" value="<?php echo s( $servicio->titulo ); ?>">

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="servicio[precio]" placeholder="Precio Servicio" value="<?php echo s($servicio->precio); ?>">

    <label for="description">Descripción:</label>
    <input type="text" id="description" name="servicio[description]" placeholder="Description Servicio" value="<?php echo s($servicio->description); ?>">
</fieldset>

<fieldset>
    <legend>Información Servicio</legend>
</fieldset>

<fieldset>
    <legend>nombre de usuario</legend>

    <select name="servicio[usuarioId]" id="nombre">
        <option selected value="">-- Seleccione --</option>
        <?php foreach($usuarios as $usuario) { ?>
            <option <?php echo $servicio->usuarioId === $usuario->id ? 'selected' : '' ?> value="<?php echo s($usuario->id); ?>"><?php echo s($usuario->nombre) . " " . s($usuario->password); ?>
        <?php  } ?>
    </select>

</fieldset>

