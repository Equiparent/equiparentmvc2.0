
<fieldset>
    <legend>Información General</legend>

    <label for="nombre">Nombre de Usuario:</label>
    <input type="text" id="nombre" name="usuario[nombre]" placeholder="Nombre Usuario" value="<?php echo s( $usuario->nombre ); ?>">

    <label for="password">Password:</label>
    <input type="text" id="password" name="usuario[password]" placeholder="Password Usuario" value="<?php echo s( $usuario->password ); ?>">

</fieldset>


