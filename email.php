<?php 

$dest1 = "info@flashmobile.com.ar";
$dest2 = "sladovnik@gmail.com";



$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['mail'];
$telefono = $_POST['tel'];
$mensaje = "<hr style='border:1px solid black'> <br> <b>Nombre:</b><p>".$nombre."</p> <br> <b>Apellido:</b><p>".$apellido."</p> <br> <b>Teléfono:</b><p>".$telefono."</p> <br> <b>Email: </b> <p>".$email."</p> <br> <br> <b> Mensaje: </b>  <p>";
$mensaje .= $_POST['text'];
$captha = $_POST['captcha'];

$subject ="Mensaje";
$subject2="Gracias por ser parte del Lanzamiento!";


$header="MIME-Version: 1.0\r\n";
$header.="Content-type: text/html; charset=UTF-8\r\n";
$header.="From: Flash Argentina 2021 <info@flashmobile.com.ar>";



$mensaje.="</p> \r\n <hr style='border:1px solid black'><br> Responder a: <a href=mailto:".$email.">".$nombre."</a>";

$mensaje2= "<hr><p style='text-align:center; font-weight:bold; max-width:70%;'>Gracias por tu correo y
BIENVENIDO A LA ESPERA DEL LANZAMIENTO 
FLASHMOBILE  2021 en Argentina <br>

La mayoría de los emprendedores se lanzan a los negocios inseguros y solos, poniendo todo en riesgo y con apoyo limitado.
<br>

No así los empresarios independientes de ACN / Flash mobile Argentina. <br>
Reciben un sitio web personalizado para vender servicios esenciales y compartir la oportunidad con amigos y familiares. <br>
Añádele a eso un sistema de capacitación y apoyo de un líder en el sector con más de 25 años de experiencia, y obtienes un envidiable camino al éxito.

Los eventos de entrenamiento internacionales de ACN gozan de fama mundial. Cientos de emprendedores como vos se reúnen en estos núcleos de aprendizaje para compartir su conocimiento, recibir capacitación e intercambiar historias de éxito. Diles adiós a las aburridas conferencias de negocios.

Estaremos en contacto luego!</p>";

if ($nombre != '' && $apellido != '' ) {


    if (mail('info@flashmobile.com.ar,sladovnik@gmail.com',$subject,$mensaje,$header)) {

        if (mail($email,$subject2,$mensaje2,$header)) {
            echo true;
        }
       
    
}

  
    
}else{
    echo false;
}

?>