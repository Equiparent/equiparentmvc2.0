<fieldset>
    <legend>Información General</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="usuario[nombre]" placeholder="Nombre" value="<?php echo s( $usuario->nombre ); ?>">

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="usuario[apellido]" placeholder="Apellido" value="<?php echo s( $usuario->apellido ); ?>">

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="usuario[telefono]" placeholder="Teléfono" value="<?php echo s( $usuario->telefono ); ?>">

    <!-- <label for="email">email:</label>
    <input type="text" id="email" name="usuario[email]" placeholder="email" value="<?php echo s( $usuario->email ); ?>">

    <label for="password">Crear Password:</label>
    <input type="text" id="password" name="usuario[password]" placeholder="Crear Password" value="<?php echo s( $usuario->password ); ?>"> -->

</fieldset>


