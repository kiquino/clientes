<?php




$nombre = $_POST['nombre'];

$email = $_POST['mail'];
$telefono = $_POST['tel'];
$mensaje = "<hr style='border:1px solid black'> <br> <b>Nombre:</b><p>" . $nombre . "</p> <br><b>Teléfono:</b><p>" . $telefono . "</p> <br> <b>Email: </b> <p>" . $email . "</p> <br> <br> <b> Mensaje: </b>  <p>";
$mensaje .= $_POST['text'];


$subject = "Mensaje";
$header = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=UTF-8\r\n";
$header .= "From: Mariana Ladaga Website <diegovillegas@c1910762.ferozo.com>";


$mensaje .= "</p> \r\n <hr style='border:1px solid black'><br> Responder a: <a href='mailto:" . $email . "'>" . $nombre . "</a>";

if ($nombre != '') {


    if (mail('Mariana <marianaldg@gmail.com>', $subject, $mensaje, $header)) {
        echo true;
    }
} else {
    echo false;
}