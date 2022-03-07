
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
      
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Webinar BMS - Covid-19 - Registro completo</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body  style="text-align:center;background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script>
    $(window).onload(function(){

    })</script>




    <?php 
    require "conexion.php";
$sql="INSERT into clientes (nombre,apellido,telefono,matricula,especialidad,email) 
values"."('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['telefono']."','".$_POST['matricula']."','".$_POST['especialidad']."','".$_POST['email']."')";


if ($mysqli->query($sql) === TRUE) {

    echo "  <div class='row alert alert-success role='alert''><div class='col-md-4'></div> <div class='col-md-4'>";
    echo    "<h4  class='display-5 alert-heading'>Se ha registrado correctamente</h4></div><div class='col-md-4'></div></div>";
  } else {
    echo "<div class='alert alert-warning'>Ya se encuentra registrado en el evento y se le ha enviado un mail con la información.</div>";
    echo "<div class='row'>
    <div class='col-md-4 col-sm-2'></div>
    <div class='col-md-4 col-sm-8'>
    <table class='table'>
    <thead>
      <tr>
        <th scope='col'>País</th>
        <th scope='col'>Día</th>
        <th scope='col'>Horario</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td>Argentina</td>
        <td>Jueves 18</td>
        <td>19:00hs</td>
      </tr>
      <tr>
      <td>Colombia</td>
        <td>Jueves 18</td>
        <td>17:00hs</td>
      </tr>
      <tr>
      <td>Chile</td>
        <td>Jueves 18</td>
        <td>18:00hs</td>
      </tr>
      <tr>
      <td>México</td>
        <td>Jueves 18</td>
        <td>17:00hs</td>
      </tr>
      <tbody>
      </table>
      <b>Lo esperamos<b>
    </div>
    <div class='col-md-4 col-sm-2'></div>
    </div>";
    echo" <div class='row'>
    <div class='col-md-4 col-sm-2'></div>
    <div class='col-md-4 col-sm-8'><a href='index.php'><b>Volver</b></a></div>
    <div class='col-md-4 col-sm-2'></div></div> " ;
    exit();
  }
  
  $mysqli->close();
      
    ?>

    <?php 
    $template="./emailchimp.php";
   
 
    

    $dest=$_POST['email'];
    $remitente="no-reply@c1840833.ferozo.com";
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $asunto="Inscripción a webinarbms";
    $header="MIME-Version: 1.0\r\n";
  $header.="Content-type: text/html; charset=UTF-8\r\n";
  $header.="From: webinarbms <no-reply@c1840833.ferozo.com>";

  if(file_exists($template)){
    $text_mail=file_get_contents($template,true);
  }
  
 
 
  $success=mail($dest,$asunto,$text_mail,$header);
  if ($success) {
    
    echo "<div class='row mb-0'>
  <div class='col-md-4 col-sm-2'></div>
  <div class='col-md-4 col-sm-8'><h4 class=''>Gracias por registrarse, se le ha enviado un mail con la información del evento.</h4></div>
  <div class='col-md-4 col-sm-2'></div>
  </div>";
  echo "<div class='row'>
  <div class='col-md-4 col-sm-2'></div>
  <div class='col-md-4 col-sm-8'>
  <table class='table'>
  <thead>
    <tr>
      <th scope='col'>País</th>
      <th scope='col'>Día</th>
      <th scope='col'>Horario</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>Argentina</td>
      <td>Jueves 18</td>
      <td>19:00hs</td>
    </tr>
    <tr>
    <td>Colombia</td>
      <td>Jueves 18</td>
      <td>17:00hs</td>
    </tr>
    <tr>
    <td>Chile</td>
      <td>Jueves 18</td>
      <td>18:00hs</td>
    </tr>
    <tr>
    <td>México</td>
      <td>Jueves 18</td>
      <td>17:00hs</td>
    </tr>
    <tbody>
    </table>
    <b>Lo esperamos<b>
  </div>
  <div class='col-md-4 col-sm-2'></div>
  </div>";
  echo" <div class='row'>
  <div class='col-md-4 col-sm-2'></div>
  <div class='col-md-4 col-sm-8'><a href='index.php'><b>Volver</b></a></div>
  <div class='col-md-4 col-sm-2'></div></div> " ;
  }else{
   echo "Si ve éste mensaje, Recargue la página y reenvie el formulario. Disculpe las molestias.";
  
   echo $text_mail;
   mail($dest,$asunto,$text_mail,$header);
  }


    
    ?>


     
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    </body>
    </html>