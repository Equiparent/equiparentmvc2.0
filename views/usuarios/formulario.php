<fieldset>
    <legend>Información General</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="usuario[nombre]" placeholder="Nombre" value="<?php echo isset($usuario) && is_object($usuario) && isset($usuario->nombre) ? s($usuario->nombre) : ''; ?>" autocomplete="given-name">

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="usuario[apellido]" placeholder="Apellido" value="<?php echo isset($usuario) && is_object($usuario) && isset($usuario->apellido) ? s($usuario->apellido) : ''; ?>" autocomplete="family-name">

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="usuario[telefono]" placeholder="Teléfono" value="<?php echo isset($usuario) && is_object($usuario) && isset($usuario->telefono) ? s($usuario->telefono) : ''; ?>" autocomplete="tel">

    <label for="email">Email:</label>
    <input type="text" id="email" name="usuario[email]" placeholder="Email" value="<?php echo isset($usuario) && is_object($usuario) && isset($usuario->email) ? s($usuario->email) : ''; ?>" autocomplete="email">

    <label for="password">Crear Password:</label>
    <input type="password" id="password" name="usuario[password]" placeholder="Crear Password" value="<?php echo isset($usuario) && is_object($usuario) && isset($usuario->password) ? s($usuario->password) : ''; ?>" autocomplete="new-password">
</fieldset>
