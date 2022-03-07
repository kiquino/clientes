<?php
    
  // Variables de la conexion a la DB
  //  $mysqli = new mysqli("localhost","administrador","yolugano1957","yolugano");
    $mysqli = new mysqli("localhost","c1840833_tf","treefrogsnakeTW1990","c1840833_evento"); //localhost
  // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Falló la conexion");
    } else {
  //echo "Conexion exitosa";
		mysqli_set_charset($mysqli,"utf8");
    }
    
    ?>
