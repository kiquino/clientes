<?php
$db="thomson_legalsum";
$dbw="c1840833_evento";
$user="thomson_legal";
$userw="c1840833_tf";
$ps="6485037999343402647";
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