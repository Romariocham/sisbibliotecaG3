<h1>Formulario</h1>
<button class = "btn btn danger"><i class="fa fa-user-plus" aria-hidden="true"></i></button>

<form method="post" action="<?php echo base_url('Login/guardar') ?>">
  
  <div class="form-group">
    <label>nombre de usuario</label>
    <input type="text" class="form-control" name="usuario" placeholder="Ingrese los nombres">
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña">
  </div>
  <div class="form-group">
    <label>edad</label>
    <input type="text" class="form-control" name="edad"  placeholder="Ingrese la edad">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  