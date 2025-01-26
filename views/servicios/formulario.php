<form class="formulario" action="/servicios/crear" method="POST">
    <fieldset>
        <legend>Información Personal</legend>

        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Tu Nombre" id="nombre" name="crear[nombre]" autocomplete="given-name">

        <label for="email">E-mail</label>
        <input type="email" placeholder="Tu Email" id="email" name="crear[email]" autocomplete="email">

        <label for="telefono">Teléfono</label>
        <input type="tel" placeholder="Tu Teléfono" id="telefono" name="crear[telefono]" autocomplete="tel">
    </fieldset>
</form>
