
<main class="contenedor seccion">
        <h1>Contacto</h1>
       
<form class="formulario" action="/contacto" method="POST">
  <fieldset>
    <legend>Contáctanos llenando todos los campos</legend>
      <div class="contenedor-campos">

        <div class="campo">
          <label class="campo__label" for="nombre">Nombre</label>
          <input class="input-text" type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]">
        </div>

        <div class="campo">
          <label class="campo__label" for="telefono">Teléfono</label>
          <input class="input-text" type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]">
        </div>
          
        <div class="campo">
          <label class="campo__label" for="email">E-mail</label>
          <input class="input-text" type="text" placeholder="Tu email" id="email" name="contacto[email]">
        </div> 
          
      <div class="campo">
        <label class="campo__label" for="mensaje">Mensaje</label>
            <textarea class="input-text --textarea" id="mensaje" name="contacto[mensaje]"></textarea>
     
          </div>
         
          <p>Cómo desea ser contactado</p>

<div class="forma-contacto">
    <label for="contactar-telefono">Teléfono</label>
    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

    <label for="contactar-email">E-mail</label>
    <input name="contacto" type="radio" value="email" id="contactar-email">
</div>

<p>Si eligió teléfono, elija la fecha y la hora</p>

<label for="fecha">Fecha:</label>
<input type="date" id="fecha">

<label for="hora">Hora:</label>
<input type="time" id="hora" min="09:00" max="18:00">

</fieldset>

<input type="submit" value="Enviar" class="boton boton-verde-claro-inline-block">
        </main>

  


