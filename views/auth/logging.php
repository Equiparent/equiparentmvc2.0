<div class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
            <?php endforeach; ?>

        <form method="POST" class="formulario" action="/logging">
            <fieldset>
                <legend>Email y Password</legend>

                
                <label for="email">Email</label>
                <input type="email" name="admin[email]" placeholder="Tu Email" id="email">

                <label for="password">Password</label>
                <input type="password" name="admin[password]" placeholder="Tu Password" id="password">
            </fieldset>
        
            <input type="submit" value="Iniciar Sesión" class="boton boton-verde-claro-inline-block">
        </form>
        </div>