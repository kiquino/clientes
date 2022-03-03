<main class="ingreso-block">
    <div class="cabecera-ingreso">
        <a href="/index"><img src="imgs/logo.svg" alt=""></a>
    </div>
    <div class="contenedor-general-ingreso">

        <div class="contenedor-ingreso">
            <h2>REGISTRARSE</h2>
            <p>Por favor, ingrese el siguiente formulario para registrarse a nuestro sistema.</p>
            <form action="../actions/register" method="post">
                <input type="text" name="nombre" placeholder="Nombre" id="nombre">
                <input type="text" name="apellido" placeholder="Apellido" id="apellido">
                <!--<div class="domi-reg"> <input type="text" name="domicilio" placeholder="Domicilio" id="domicilio">
                <input type="number" name="puerta" placeholder="N°" id="puerta"></div>-->

                <input type="email" name="email" id="email" placeholder="Email">
                <input type="tel" name="telefono" id="telefono" placeholder="Teléfono">
                <input type="number" name="dni" placeholder="DNI" id="dni">
                <select name="os" id="os">
                    <option value="sin plan">Obra o Plan social</option>
                    <option value="osde">OSDE</option>
                    <option value="ospe">OSPE</option>
                    
                </select>

                <input type="password" name="password" placeholder="Contraseña" id=password>
                <input type="password" name="repassword" placeholder="Confirme Contraseña" id="repassword">
                <button type="submit">REGISTRARSE</button>

                <strong> Ya tengo cuenta,  <a href="/ingreso"><i id="registro-menuingreso">Ingresar</i></strong></a>

            </form>
        </div>
    </div>

</main>