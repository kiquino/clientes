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

echo $email;



} catch (\Throwable $th) {
   echo $email;
}finally{
    $con = null;
}



?>