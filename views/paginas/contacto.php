<form class="formulario" action="/contacto" method="POST">
    <fieldset>
        <legend>Contáctanos llenando todos los campos</legend>
        <div class="forma-campo-contacto">
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]" autocomplete="given-name">
        </div>

        <div class="forma-campo-contacto">
            <label for="telefono">Teléfono</label>
            <input class="input-text" type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]" autocomplete="tel">
        </div>

        <div class="forma-campo-contacto">
            <label for="email">E-mail</label>
            <input class="input-text" type="text" placeholder="Tu email" id="email" name="contacto[email]" autocomplete="email">
        </div>

        <div class="forma-campo-contacto">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="contacto[fecha]" autocomplete="date">

            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]" autocomplete="time">
        </div>
    </fieldset>

    <input type="submit" value="Enviar" class="boton boton-verde-claro-inline-block">
</form>
