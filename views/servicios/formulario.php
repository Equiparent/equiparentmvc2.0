<form class="formulario" action="/servicios/crear" method="POST">
    <fieldset>
        <legend>Información Personal</legend>

        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Tu Nombre" id="nombre" name="crear[nombre]">

        <label for="email">E-mail</label>
        <input type="email" placeholder="Tu Email" id="email" name="crear[email]">

        <label for="telefono">Teléfono</label>
        <input type="tel" placeholder="Tu Teléfono" id="telefono" name="crear[telefono]">


    </fieldset>

    <fieldset>
        <legend>Información sobre el Servicio</legend>
        <label for="opciones">Servicio:</label>
        <select id="opciones">
            <option value="" disabled selected>-- Seleccione --</option>
            <option value="Calendario Compartido">Calendario Compartido</option>
            <option value="Bitacora">Bitácora</option>
            <option value="Asesoria Legal">Asesoría Legal</option>
            <option value="Calculadora Pension">Calculadora Pensión</option>
            <option value="Calculadora Tiempo">Calculadora Tiempo</option>
            <option value="Agenda">Agenda</option>
            <option value="Dashboard">Dashboard</option>
            <option value="Solicitud de Cambio">Solicitud de Cambio</option>
            <option value="Resumen">Resumen</option>
            <option value="Almacenamiento Acuerdos Legales">Almacenamiento Acuerdos Legales</option>
            <option value="Almacenamiento Acuerdos de Crianza Internos">Almacenamiento Acuerdos de Crianza Internos</option>
            <option value="Contenidos para Padres">Contenidos para Padres</option>
            <option value="Acceso a Comunidad">Acceso a Comunidad</option>
        </select>
        <label for="titulo">Tipo Servicio</label>


        </select>
       
        <select id="opciones">
            <option value="" disabled selected>-- Seleccione --</option>
            <option value="Premium">Premium</option>
            <option value="Freemium">Freemium</option>
        </select>



    </fieldset>

</form>