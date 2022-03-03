<main class="ingreso-block">
    <div class="cabecera-ingreso">
        <a href="/index"><img src="imgs/logo.svg" alt=""></a>
    
    </div>
    <div class="contenedor-general-ingreso">
         
    <div class="contenedor-ingreso">
        <h2>INGRESO</h2>
         <a href="/re-password" class="repassword"> Olvidé mi contraseña</a>
        <form action="../actions/login.php" method="POST">
           
            <input type="text" name="us_dni" placeholder="DNI" id="us_dni">
           
            <input type="password" name="us_pass" placeholder="Contraseña" id="us_pass">
            <button type="submit" name="btn_login" id="btn_login">INGRESAR</button>
            
            <strong> No tengo cuenta,  <a href="/registro.php"><i id="registro-menuingreso">registrarse</i></strong></a>

        </form>
    </div>
    </div>
   
</main>