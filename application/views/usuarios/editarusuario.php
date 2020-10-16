<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div class="form-row">
<div class="form-group col-md-6 rounded" style="background-color:#CAD6D7">
<h1>EDITANDO USUARIO </h1>
<form method="post" action="<?=base_url('Login/editarRegistro/')?><?=$iduser?>">
  
  <div class="form-group">
    <label>Nombre de usuario</label>
	<input type="text" class="form-control" size="40" name="usua_login" id="usua_login" value="<?=$username?>">
  </div>
  <div class="form-group">
   <label>Password</label>
	<input type="text" class="form-control" size="40" name="usua_password" id="usua_password" value="<?=$userpassword?>">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Nombres</label>
	<input type="text" class="form-control"  name="usua_nombres" id="usua_nombres" value="<?=$usernombres?>">
  </div>
   <div class="form-group col-md-6">
    <label>Apellidos</label>
  <input type="text" class="form-control"  name="usua_apellidos" id="usua_apellidos" value="<?=$userapellidos?>">
  </div>
  </div>
   <div class="form-group">
    <label>Direccion</label>
  <input type="text" class="form-control" size="40" name="usua_direccion" id="usua_direccion" value="<?=$userdireccion?>">
  </div>
  <div class="form-group">
    <label>Email</label>
	<input type="text" class="form-control" size="40" name="usua_email" id="usua_email" value="<?=$useremail?>">
  </div>
  <div class="form-group">
    <label>Telefono</label>
  <input type="text" class="form-control" size="9" name="usua_telefono" id="usua_telefono" value="<?=$usertelefono?>">
  </div>
  <div class="form-group">
  <button class="btn btn-warning btn-lg btn-block" type="submit"><b>EDITAR</b><i class="fas fa-edit"></i> </button>
  </div>
</form>
</div>
<div class="form-group col-md-6">
   <div class="card " style="color:#68787C;borde:5px; margin:10px;"> 
   <h1>REVISA LOS DATOS DETALLADAMENTE Y MODIFICALOS SI ALGO NO ES CORRECTO</h1>
   </div>
   <div>
   <img src="https://microformas.mx/blog/wp-content/uploads/2018/02/digitalizacion-de-libros.jpg" alt="libros boladores" style="width:100%">
   </div>
   <div class="card-footer">
   <h3>Recuerda llenar todos los campos!</h3>
   </div>
</div>
</div>
