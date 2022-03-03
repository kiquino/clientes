<div class="contacto" id="contacto">

    <form action="actions/form.php" method="POST">
        <h2 class="color-texto-verde">Dejanos un mensaje</h2>
        <p style="color:red;">* espacio requerido</p>
        <div class="form-nom-ap">
            <div class="nombre-contenedor"><label class="color-texto-verde" for="">Nombre* </label>
                <input type="text" name="nombre" id="nombre-form" placeholder="Su Nombre">
            </div>
            <div class="nombre-contenedor"><label class="color-texto-verde" for="">Email*</label>
                <input type="email" name="email" id="email-form" placeholder="Su Email"></div>

        </div>

        <label class="color-texto-verde" for="" id="consult-id">Asunto</label>
        <select name="opciones" id="consult-opc">
            <option value="Duda">Duda</option>
            <option value="Consulta">Consulta</option>
           <!-- <option value="Sugerencia">Sugerencia</option>-->
        </select>
         <label class="color-texto-verde" for="" id="consult-id">Servicio</label>
        <select name="servicios" id="consult-opc">
             <option value="Otro">Otro</option>
             <option value="Administracion">Administración</option>
            <option value="Rayos">Rayos</option>
            <option value="Mamografia">Mamografías</option>
            <option value="Ortopantomografia">Ortopantomografías</option>
              <option value="Resonancia">Resonancia</option>
            <option value="Atencion">Atención al Cliente</option>
           
        </select>
        <label class="color-texto-verde" for="" id="consult-id">Mensaje*</label>
        <textarea name="mensaje" id="consult-inp-id" cols="30" rows="10" placeholder="Dejanos un mensaje aquí..."></textarea>

        <button type="submit" class="contact-submit-btn">Enviar</button>

    </form>
    <div class="mas-datos color-texto-verde">
        <h2>Más datos útiles</h2>
        <strong>Teléfono</strong>
        <br>
        <p>(0280)4420820</p>
        <div class="mas-datos-redes">
        <script type="text/javascript" async="async" defer="defer" src="https://dattachat.com/chat/cargar/wid/5daa7c3bb7ce8786288947"></script><a href="javascript:;" onclick="dcJs.startSend()"><img style="border:0px;" id="dc_ImgStatus" src="https://dattachat.com/chat/img/wid/5daa7c3bb7ce8786288947" /></a>
            <!--<div class="redes-masDatos"><a href=""><i class="fa fa-facebook"></i></a></div>
            <div class="redes-masDatos"><i class="fa fa-twitter-square"></i></div>
<div class="redes-masDatos"><i class="fa fa-instagram"></i></div>
        --></div>

    </div>

</div>