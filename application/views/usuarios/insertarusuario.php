<h1>Registrate - Ingrese los datos</h1>
<button class = "btn btn danger"><i class="fa fa-user-plus" aria-hidden="true"></i></button>

<form method="post" action="<?php echo base_url('Login/guardar1') ?>">
  
  <div class="form-group">
    <label>nombre de usuario</label>
    <input type="text" class="form-control" name="usua_login" placeholder="Ingrese los nombres">
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" name="usua_password" placeholder="Ingrese la contraseña">
  </div>
  <div class="form-group">
    <label>nombres</label>
    <input type="text" class="form-control" name="usua_nombres"  placeholder="Ingrese sus nombres">
  </div>
  <div class="form-group">
    <label>apellidos</label>
    <input type="text" class="form-control" name="usua_apellidos"  placeholder="Ingrese sus apellidos">
  </div>
  <div class="form-group">
    <label>direccion</label>
    <input type="text" class="form-control" name="usua_direccion"  placeholder="Ingrese su direccion">
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="text" class="form-control" name="usua_email"  placeholder="Ingrese su email">
  </div>
  <div class="form-group">
    <label>telefono</label>
    <input type="text" class="form-control" name="usua_telefono"  placeholder="Ingrese su telefono">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  