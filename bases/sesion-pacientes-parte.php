<main>
<div class="cabecera-ingreso">
     <a href="index.php"><img src="imgs/logo.svg" alt=""></a>
    </div>
  
  
    <div class="toggle">
           <a href="index.php"><img class="logo-2" src="imgs/logo-fb.svg" alt=""></a> 
            <i class="fa fa-bars menu edit-menu"></i>
        </div>
            <ul>
                <li>
                    <a href="">Turnos</a>
                </li>
                <li>
                    <a href="">Pedir turno</a>
                </li>
                <li>
                    <a href="">Resultados</a>
                </li>
                <li>
                    <a href="">Ayuda</a>
                </li>
                <li>
                <a href="index.php">Volver</a>
                </li>
            </ul>
            
             <div class="contenedor-general-sesion">
            <div class="contenedor-sesion">
            <?php 
   
   
  
try{
   $base = new PDO("mysql:host=localhost; dbname=b3000258_ecorad_db","b3000258_dv","Ohayo2018");
  $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $base ->exec("SET CHARACTER SET utf8");
  $sql = "SELECT * FROM pacientes WHERE Documento = ?";
 $result = $base -> prepare($sql);
    $result -> execute(array($_SESSION["nuevasesion"]));
 while( $registro = $result->fetch(PDO::FETCH_ASSOC)){
    
  echo
  
  "<p>Hola: " . $registro["Nombre"] ." - ".  "<a href='actions/close.php'>Salir</a>" . "<p>
  <div class='infopaciente'>
  <div class='datos-paciente'>
      <p>Nombre:".$registro["Apellido"].", ".$registro["Nombre"]." </p>
  </div>
  <div class='datos-paciente'>
      <p>Direccion: </p>
  </div>
  <div class='datos-paciente'>
      <p>Telefono:".$registro["Telefono"]." </p>
  </div>
  <div class='datos-paciente'>
      <p>Correo:".$registro["Email"]." </p>
  </div>
  <div class='datos-paciente'>
      <p>Obra social o Plan:".$registro["plan"]." </p>
  </div>
  <div class='datos-paciente'>
  <p>Acceso:".$registro["access"]." </p>
</div>
  <a href=''>editar</a>
  <a href=''>borrar</a>
   </div>";
 }
   $result ->closeCursor();

}catch(Exception $e){
    echo "hubo un error";
       die('Error: '. $e->GetMessage());
   }finally{
       $base=null;
   }
   ?>
                
            </div>
            <div class="turnospaciente">
                <form action="" method="post">
                    <select name="" id="">
                        <option value="">Seleccione un servicio</option>
                        <option value="">Rayos</option>
                        <option value="">Mamografia</option>
                        <option value="">Ortopantomografia</option>
                        <option value="">Resonancia Magnética</option>
                    </select>
                </form>
            </div>
            <div class="upload-files">
                <h5>subir archivos</h5>
                <input type="file" name="" id="">
                <button type="submit">subir archivo</button>
                <div class="mi-lista">
                    <h3>acá irian los archivos</h3>
                </div>
            </div>
        
    </div>
</main>