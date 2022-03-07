<?php
$db="c1721547_tr";
$dbw="c1840833_evento";
$user="thomson_legal";
$userw="c1840833_tf";
$ps="";
$psw="treefrogsnakeTW1990";
try {
    
$con = new PDO("mysql:host=localhost; dbname=".$db,"root",$ps);
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con -> exec("SET CHARACTER SET utf8");
} catch (\Throwable $th) {
    print "¡Error!: " . $th->getMessage() . "<br/>";
    die();
}


?>