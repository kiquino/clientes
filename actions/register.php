<?php 
 
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];
    $dni=$_POST["dni"];
    $os=$_POST["os"];
    $pass=$_POST["password"];
    $repass=$_POST["repassword"];
      if ($pass!=$repass) {
       echo "la contraseña no coincide";
    die();
    }
    $passhash = password_hash($pass,PASSWORD_DEFAULT);
    try {
        $base = new PDO("mysql:host=localhost; dbname=b3000258_ecorad_db","b3000258_dv","Ohayo2018");
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $base ->exec("SET CHARACTER SET utf8");
   
    $sql = 'INSERT INTO pacientes (Nombre, Apellido, Telefono, Email, plan, Documento, Pass) VALUES(:nom, :ap, :te, :em, :pl, :doc, :pass)';
    $result=$base->prepare($sql);
    $result->execute(['nom' => $nombre,
    'ap' => $apellido,
    'te' => $telefono,
    'em' => $email,
    'pl' => $os,
    'doc' => $dni,
    'pass' => "$passhash"
    ]);
        header("location:../success.php");
        $result -> closeCursor();
    } catch (PDOException $e) {
        echo "Linea de error" . $e->getLine();
    }finally{
        $base = null;
    }
   
?>