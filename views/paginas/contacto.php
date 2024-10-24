
<main class="contenedor seccion">
        <h3>Contacto</h3>
       
<form class="formulario" action="/contacto" method="POST">
  <fieldset>
    <legend>Contáctanos llenando todos los campos</legend>
      <div class="forma-campo-contacto">

          <label for="nombre">Nombre</label>
          <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]">
        </div>

        <div class="forma-campo-contacto">
          <label for="telefono">Teléfono</label>
          <input class="input-text" type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]">
        </div>
          
        <div class="forma-campo-contacto">
          <label for="email">E-mail</label>
          <input class="input-text" type="text" placeholder="Tu email" id="email" name="contacto[email]">
        </div> 
          
      <div class="forma-campo-contacto">
        <label for="mensaje">Mensaje</label>
            <textarea class="input-text --textarea" id="mensaje" name="contacto[mensaje]"></textarea>
     
          </div>
        
          
          <h3 class="contacto"> Cómo desea ser contactado</h3>
          
<div>
 
    <label type="select" for="contactar-telefono">Teléfono</label>
    <input type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]">


    <label type="select" for="contactar-email">E-mail</label>
    <input type="radio" value="email" id="contactar-email" name="contacto[contacto]">
</div>
        
          <h3>Si eligió teléfono, elija la fecha y la hora</h3>
          


<label for="fecha">Fecha:</label>
<input type="date" id="fecha" name="contacto[fecha]">

<label for="hora">Hora:</label>
<input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]">

</fieldset>

<input type="submit" value="Enviar" class="boton boton-verde-claro-inline-block">
        </main>

  
      

