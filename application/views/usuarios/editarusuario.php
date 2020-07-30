<h1>Editando el Usuario </h1>
<button class ="btn btn-danger"><i class="fa fa-list" aria-hidden="true"></i></button>	

<form method="post" action="<?=base_url('Login/editarRegistro/')?><?=$iduser?>">
  
  <div class="form-group">
    <label>Nombre de usuario</label>
	<input type="text" class="form-control" size="40" name="usua_login" id="usua_login" value="<?=$username?>">
  </div>
  <div class="form-group">
   <label>Password</label>
	<input type="text" class="form-control" size="40" name="usua_password" id="usua_password" value="<?=$userpassword?>">
  </div>
  <div class="form-group">
    <label>nombres</label>
	<input type="text" class="form-control"  name="usua_nombres" id="usua_nombres" value="<?=$usernombres?>">
  </div>
   <div class="form-group">
    <label>apellidos</label>
  <input type="text" class="form-control"  name="usua_apellidos" id="usua_apellidos" value="<?=$userapellidos?>">
  </div>
   <div class="form-group">
    <label>direccion</label>
  <input type="text" class="form-control" size="40" name="usua_direccion" id="usua_direccion" value="<?=$userdireccion?>">
  </div>
  <div class="form-group">
    <label>email</label>
	<input type="text" class="form-control" size="40" name="usua_email" id="usua_email" value="<?=$useremail?>">
  </div>
  <div class="form-group">
    <label>telefono</label>
  <input type="text" class="form-control" size="40" name="usua_telefono" id="usua_telefono" value="<?=$usertelefono?>">
  </div>
  <button type="submit" class="btn btn-danger">Editar</button>

</form>
