<?php 

try {
    
    $base = new PDO("mysql:host=localhost; dbname=b3000258_ecorad_db","b3000258_dv","Ohayo2018");
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM pacientes WHERE Documento= :dni";
    $res = $base -> prepare($sql);
    $dni=htmlentities(addslashes($_POST["us_dni"]));
    $contra=$_POST["us_pass"];
    $contador=0;
    $res -> bindValue(":dni",$dni);
    
    $res -> execute();
    $numero_registro = $res -> rowCount();
    while($reg=$res->fetch(PDO::FETCH_ASSOC)){
       if (password_verify($contra,$reg['Pass'])) {
$contador++;
    }
}
if ($contador > 0) {
   
        session_start();
        $_SESSION["nuevasesion"]=$_POST["us_dni"];
        header("location:../sesion-pacientes.php");
}else{

    header("location:../ingreso.php");
}

      
   
        
        
   



    

} catch (Exception $e) {

    die("Error: ". $e ->getMessage());
}



//----------------------------------------//

        

?>