<?php

$nombre = $_POST['nombre'];

$email = $_POST['mail'];
$pais = $_POST['pais'];
$localidad = $_POST['localidad'];
$telefono = $_POST['tel'];
$mensaje = "<hr style='border:1px solid black'> <br> <b>Nombre:</b><p>" . $nombre . "</p> <br><b>Teléfono:</b><p>" . $telefono . "</p> <br> <b>Email: </b> <p>" . $email . "</p> <br> <br> <b> Mensaje: </b>  <p>";
$mensaje .= $_POST['text'];


$subject = "Mensaje";
$header = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=UTF-8\r\n";
$header .= "From: Atahualpa Website <no-reply@c2540596.ferozo.com>";


$mensaje .= "</p> \r\n <hr style='border:1px solid black'><br> Responder a: <a href='mailto:" . $email . "'>" . $nombre . "</a>";




if (mail('no-reply@c2540596.ferozo.com', $subject, $mensaje, $header)) {
    echo true;
} else {
    echo false;
}