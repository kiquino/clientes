<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingreso PDO</title>
</head>
<body>
    <?php  
    try {
    require "../conexiones/conexion.php";

    $nombre=$_POST["name"];
    $email=$_POST["mail"];
    $pass=$_POST["pswr"];
   

    $passhash=password_hash($pass,PASSWORD_DEFAULT);
    $insert = 'INSERT into Ejemplo_PDO(nombre,email,pass) VALUES(:nom,:em,:pw)';
        
        
        $ejecucion = $conex->prepare($insert);
        $ejecucion->execute([
        'nom'=>$nombre,
        'em'=>$email,
        'pw'=>$passhash]);
        
     
       $ejecucion -> closeCursor();
       header("location:../regcom.php");
    } catch (\Throwable $th) {
        print 'no se envio el formulario: '.$th;
    }finally{
        $conex=null;
    }

   
    ?>
</body>
</html>