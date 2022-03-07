<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>holis, <?php
    $id=$_GET['id'];
    echo $id; 
    
    include("curlcall.php");
    
    ?></h2>

</body>
</html>