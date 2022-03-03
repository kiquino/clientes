<?php
if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
    if (!isset($_SESSION["nuevasesion"])) {
        session_destroy();
        header("location:fail.php");
    }
}else{
    echo session_status();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles3.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Ecorad</title>
</head>
<body>
    

<?php
    include ("bases/sesion-pacientes-parte.php");
?>
<?php 
    include ("bases/script.php");
?>
</body>
   

   <?php
    include ("bases/footer.php");
   ?>

</html>