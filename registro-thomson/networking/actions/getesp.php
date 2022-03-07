<?php
require "../connect.php";
//$q = $_GET['especializacion'];
$qprueba = $_GET['cargo'];
$limit = 30;
$query = "SELECT * FROM ejem WHERE cargo = '".$qprueba."'";

$select = $con -> prepare($query);
$select -> execute();
$all = $select -> fetchAll(PDO::FETCH_ASSOC);

$total = $select -> rowCount();
$paginas_total = ceil($total/$limit);

if (!isset($_GET['page'])) {
    $page = 1;
}
else{
    $page = $_GET['page'];
}

$start = ($page -1)*$limit;

$querylimit = "SELECT * FROM ejem Where  cargo = '".$qprueba."' order by id DESC LIMIT $start, $limit";
$stmt = $con -> prepare($querylimit);
$stmt = execute();
$a = 0;
$p = 0;


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