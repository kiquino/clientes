<?php 
$usuario="root";
$contraseña="";
$usuario_real = "c1840833_tf";
$contraseña_real = "";
$database_real="c1840833_evento";
try {
    $conex = new PDO('mysql:host=localhost; dbname=ejemplo_login',$usuario,$contraseña);
    $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conex ->exec("SET CHARACTER SET utf8");
    
    
} catch (PDOEXCEPTION $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}




?>