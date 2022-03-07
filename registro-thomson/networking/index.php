<?php
require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Networking Thomson Reuter Legal Summit</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="logo"></div>
        <nav class="navbar">
            <ul class="nav">
                <li class="nav-item">Home</li>
                <li class="nav-item">Networking</li>
            </ul>
        </nav>
        <div class="logo-b"></div>
    </header>
    <main>
        <div class="title">NETWORKING</div>
        <hr>
    
    </main>
    <div class="container">

        <div class="row">
            <div class="searchbar">
                <div class="icon-s"></div><input type="text" name="" id="" placeholder="ingrese un nombre">
            </div>
            <div class="categorias">
                <div class="icon-c"></div>
                <select name="categorias" id="" onchange="encontrarcategoria(this.value)">
                    <option value="">Especialización</option>
                    <option value="Abogado">Abogado</option>
                    <option value="Socio de Estúdio Jurídico">Socio de Estúdio Jurídico</option>
                    <option value="Director de Legales">Director de Legales</option>
                    <option value="Gerente de Asuntos Jurídicos">Gerente de Asuntos Jurídicos</option>
                    <option value="Subgerente de Asuntos Jurídicos">Subgerente de Asuntos Jurídicos</option>
                    <option value="Asesor Legal">Asesor Legal</option>
                    <option value="Procurador">Procurador</option>
                    <option value="Asistente / Analista">Asistente/Analista</option>
                    <option value="Secretaria/o">Secretaria/o</option>
                    <option value="Escribano">Escribano</option>

                </select>
            </div>
        </div>
<div class="card-container" id="card-container">
<?php
        
        $q = "SELECT * FROM ejem limit 30";

        $select = $con -> prepare($q);
        $select -> execute();
        



        
        ?>

        <?php  
        $a = 0;      
while ($row =  $select -> fetch()) {
   

     
    if ($a == 0) {
        echo"<div class='row'>";
     }
    
echo" <div class='col-sm-3 col-xs-12'>
<div class='tarjeta'>
   <div class='icono'></div>
   <div class='datos'>
       <div class='nombre'>
           <div class='logo-p'></div>
           <div class='innerdata'>
               <p>".$row['apellido'].", ".$row['nombre']."</p>
               <p>".$row['cargo']."</p>
           </div>

       </div>
       <div class='info'>
           <div class='logo-li'></div>
           <div class='innerdata'>
               <p> ".$row['linkedin']."</p>
               <p>linkedin</p>
           </div>
       </div>
       <div class='info'>
           <div class='logo-em'></div>
           <div class='innerdata'>
               <p>".$row['email']."</p>
               <p>email</p>
           </div>
       </div>
   </div>
</div>
</div>";
$a ++;
if ($a == 4) {
    echo"</div>";
    
    $a = 0;
 }

 

}
 ?>

</div>
      

<script
  src="https://code.jquery.com/jquery-3.5.1.slim.js"
></script>

<script>
  function encontrarcategoria(str){
      $(".card-container").empty();
    
    if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("card-container").innerHTML = this.responseText;
                }
            };
            //XML real
            // xmlhttp.open("GET","/actions/getesp.php?especializacion=" + str,true);
            xmlhttp.open("GET","actions/getesp.php?cargo=" + str,true);
            xmlhttp.send();
  }
</script>
</body>

</html>