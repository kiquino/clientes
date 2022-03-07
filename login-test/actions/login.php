<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    ob_start();
     echo"<p>Hola mundo</p>";

     try {
         require "../conexiones/conexion.php";
         $sql="SELECT * FROM Ejemplo_PDO WHERE email= :mail";
         $res = $conex -> prepare($sql);
         $email = htmlentities(addslashes($_POST["id"]));
         $pass = $_POST["pwd"];
         $contador=0;
         $res -> bindValue(":mail",$email);
         $res -> execute();
         $numero_registro= $res->rowCount();
         $hash = '$2y$10$60jqZfA4je5UlWRu/iRfeeI0D.bTFMc4z';
         while ($reg=$res->fetch(PDO::FETCH_ASSOC)) {
             
            if(password_verify($pass,$reg['pass'])){
               $contador++;
                
                 
             }
           
            
             if ($contador>0) {
               
               // session_start();
               // $_SESSION['nuevasesion']=$_POST['id'];
               echo "<script type='text/javascript'> document.location = '../dashboard.php?id=".$reg['id']."'; </script>";
                exit;
            } else {
                echo"<br>".$contador;
                echo "<br>ERROR!!!!";
            }
         }
         
         
 
     } catch (\Throwable $th) {
       echo "nda salio bien";
     }
    ?>
</body>
</html>