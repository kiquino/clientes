<div class="contenedor-login">
<?php  include("header-login.php"); ?>
<div class="texto-header"><h3>Ingreso</h3></div>
<form action="" method="post">
<div class="container-input"><label for="email" class="far fa-user-circle"></label><input pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="ingrese una dirección de correo válida"type="text" name="email" id="email" placeholder="Email ejemplo@domain.com" ></div>
<div class="container-input"><label for="password" class="far fa-lock"></label><input type="password" name="password" id="password" placeholder="ingrese contraseña" ></div>

<?php 
if (!empty($error)): ?>
 <div class="mensaje">
     <?php echo $error;?>
 </div>
<?php endif;?>

<div class="boton" type="submit"><h3>enviar</h3></div>
</form>

</div>

<?php



?>