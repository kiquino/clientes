<?php
header("Content-Type: text/html;charset=utf-8");
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','b3000258_dv','Ohayo2018','b3000258_ecorad_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_set_charset($con,'utf8');
mysqli_select_db($con,"ecorad_bd");

$sql="SELECT * FROM medicos WHERE id = '".$q."'";

$result = mysqli_query($con,$sql);



while($row = mysqli_fetch_array($result)) {
  echo "<div class='medic-tarjeta-horarios'>
                    <div class='nombre-titulo'> <i>".$row["Nombre"].$row["Apellido"]." -</i>
                        <strong>".$row['Especialidad']."</strong></div>
                    <div class='strong-text'><strong>Horarios</strong>
                        <div class='tarjeta-horarios-info-linea'>

                            <p>".$row['Dia']."</p>
                            <strong>".$row['Horario']."</strong>

</div>
<div><a href=".$row['turnero'].">Sacar Turno</a></div>
                        </div>
                        </div>
                        
                   
                        
                    

                ";
}

mysqli_close($con);
?>