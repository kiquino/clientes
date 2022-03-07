
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

<div class="container-fluid">
<div class="form-group row">
<div class="col-md-4 col-sm-2"></div>
<div class="col-md-4 col-sm-8" style="justify-content:center;"><h2 style="text-align:center;" >Bienvenido</h2></div>
<div class="col-md-4 col-sm-2"></div>
</div>
<div class="form-group row">
<div class="col-md-4 col-sm-2"></div>
<div class="col-md-4 col-sm-8" style="justify-content:center;"><h4 style="text-align:center;" >Formulario de ingreso al evento</h4></div>
<div class="col-md-4 col-sm-2"></div>
</div>
</div>
<div class="container-fluid">
<form action="ingresa.php" method="POST" onsubmit="return compararemail(this);">
  <div class="form-group row">
  <div class="col-md-4 col-sm-2"></div>
  <div class="col-md-4 col-sm-8">
  
    
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="nombre" name="nombre" placeholder="Nombre" type="text" class="form-control" aria-describedby="nombreHelpBlock" required="required">
      </div> 
      <span id="nombreHelpBlock" class="form-text text-muted">*campo requerido</span>
    </div>
    <div class="col-md-4 col-sm-2"></div>
  </div>
  <div class="form-group row">
  <div class="col-md-4 col-sm-2"></div>
  <div class="col-md-4 col-sm-8">
    
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="apellido" name="apellido" placeholder="Apellido" type="text" class="form-control" aria-describedby="apellidoHelpBlock" required="required">
      </div> 
      <span id="apellidoHelpBlock" class="form-text text-muted">*campo requerido</span>
    </div>
  </div>
  <div class="form-group row">
  <div class="col-md-4 col-sm-2"></div>
  <div class="col-md-4 col-sm-8">
  
    
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-hospital-o"></i>
          </div>
        </div> 
        <input id="especialidad" name="especialidad" placeholder="Especialidad e Institución" type="text" class="form-control" aria-describedby="nombreHelpBlock" required="required">
      </div> 
      <span id="nombreHelpBlock" class="form-text text-muted">*campo requerido</span>
    </div>
    <div class="col-md-4 col-sm-2"></div>
  </div>
  <div class="form-group row">
  <div class="col-md-4 col-sm-2"></div>
  <div class="col-md-4 col-sm-8">
  
    
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="matricula" name="matricula" placeholder="Matrícula" type="text" class="form-control" aria-describedby="nombreHelpBlock" required="required">
      </div> 
      <span id="nombreHelpBlock" class="form-text text-muted">*campo requerido</span>
    </div>
    <div class="col-md-4 col-sm-2"></div>
  </div>
  <div class="form-group row">
    
  <div class="col-md-4 col-sm-2"></div>
  <div class="col-md-4 col-sm-8">
    
    
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-phone"></i>
          </div>
        </div> 
        <input id="telefono" name="telefono" placeholder="Número de teléfono" type="text" class="form-control" >
      </div>
      <span id="nombreHelpBlock" class="form-text text-muted">*Opcional</span>
    </div>
  </div>
  <div class="form-group row">
  <div class="col-md-4 col-sm-2"></div>
  <div class="col-md-4 col-sm-8">
   
   
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-globe"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="example@email.com" type="email" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
  <div class="col-md-4 col-sm-2"></div>
  <div class="col-md-4 col-sm-8">
    <label for="reemail" class="col-form-label">Confirme su Email:</label> 
    
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-at"></i>
          </div>
        </div> 
        <input id="reemail" name="reemail" type="email" class="form-control" required="required" aria-describedby="reemailHelpBlock">
      </div> 
      <span id="reemailHelpBlock" class="form-text text-muted">Ingrese nuevamente su email.</span>
    </div>
  </div> 

  <div class="row">
    <div class="col-md-3 col-sm-2"></div>
    <div class="col-md-6 col-sm-8">
    <div class=" alert alert-primary text-center">
        <p class=" h2">Atención</p>
        <p class=" lead">Por favor, de no poder acceder le solicitamos se contacte con</p>
        <b>barbara.franchelli@amexgbt.com</b>
        <p class="h4">54 11 2039 3959</b>
    </div>
    </div>
    <div class="col-md-3 col-sm-2"></div>
  </div>

  <div class="form-group row justify-content-center">
  <div class="col-md-4 col-sm-2"></div>
    <div class="col-md-4 col-sm-8 text-center">
      <button name="submit" type="submit" class="btn btn-primary">Registrarse</button>
    </div>
    <div class="col-md-4 col-sm-2"></div>
  </div>
</form>
</div>
<script src="validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
