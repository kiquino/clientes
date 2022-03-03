<?php 
if ($_POST["mensaje"]=="" ||$_POST["nombre"]=="" ||$_POST["email"]
=="" ) {
    echo "ha habido un error. Revisa los campos";
    die();
}
 
  $dest="info@ecorad.com";
  $remitente=$_POST["email"];
  $nombre=$_POST["nombre"];
  $asunto=$_POST["opciones"]."-";
  $mensaje=$_POST["mensaje"];
  $asunto.=$_POST["servicios"];
  $header="MIME-Version: 1.0\r\n";
  $header.="Content-type: text/html; charset=iso-8859-1\r\n";
  $header.="From: $asunto \r\n";
  $header.= "Reply-To: ". strip_tags($remitente) . "\r\n";
   $text_mail='<html><body>';
    $text_mail.='<img src="http://www.ecorad.com.ar/imgs/logo.svg">';
    $text_mail.='<div>';
   $text_mail.='<table style="width:50%;border-collapse:collapse;border-width:20px;">';
   $text_mail.="<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . $nombre . "</td></tr>";
   $text_mail.="<tr><td><strong>Email:</strong> </td><td>" . $remitente . "</td></tr>";
   $text_mail.= "</table>";
   $text_mail.='<table  style="width:50%;border-collapse:collapse;border-width:20px;">';
   $text_mail.="<tr style='background: #eee;'><td><strong>Mensaje:</strong> </td><td>" . $asunto . "</td></tr>";
  $text_mail .= "<tr><td>". $mensaje ."</td></tr>";
  $text_mail.= "</table>";
 $text_mail.='</div>';
   $text_mail.='</body></html>';
  $success=mail($dest,$asunto,$text_mail,$header);

  if ($success) {
      header("location:../index");
    
  }else{
     echo "algo salio mal";
  }
 
?>