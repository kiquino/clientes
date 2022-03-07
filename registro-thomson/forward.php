<?php 

require "connect.php";

$nombre = $_POST['firstName'];
$apellido=$_POST['lastName'];
$email = $_POST['emailAddress'];
$telefono = $_POST['busPhone'];
$linkedin = $_POST['singleLineText'];
$cargo = $_POST['jobTitle'];
$organizacion = $_POST['company'];
$cantidad = $_POST['companySize'];
$area = $_POST['practiceAreas'];
$provincia = $_POST['stateProv'];
$networking = $_POST['networking-check'];



try {
    
        $q = "INSERT
         INTO ejem (nombre,apellido,email,telefono,linkedin,cargo,organizacion,cantidad,area,provincia,networking)
        VALUE(:n,:a,:e,:t,:lin,:car,:org,:c,:ar,:p,:net)";
$e = $con -> prepare($q);
$e ->execute([
'n'=>$nombre,
'a'=>$apellido,
'e'=>$email,
't'=>$telefono,
'lin'=>$linkedin,
'car'=>$cargo,
'org'=>$organizacion,
'c'=>$cantidad,
'ar'=>$area,
'p'=>$provincia,
'net'=>$networking
]);
    

$e -> closeCursor();










$template = "mailling/email.php";

 $dest="kiquino@gmail.com";
 $remitente="evento@thomsonreuterslegalsummit.com.ar";
 $nombre = $_POST['firstName'];
 $asunto = "Inscripción Curso de Actualización";
 $header="MIME-Version: 1.0\r\n";
 $header.="Content-type: text/html; charset=UTF-8\r\n";
 $header.="From: Thomson <no-reply@c1840833.ferozo.com>";

$text_mail=file_get_contents($template,true);
 
$success=mail($dest,$asunto,$text_mail,$header);

if ($success) {
    echo true;
}


} catch (\Throwable $th) {
   echo true;
}finally{
    $con = null;
}



?>