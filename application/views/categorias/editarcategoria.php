<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<br>
<div class="rounded" style="background-color:#CAD6D7">
<h1>Editando el Categorias </h1>
<form method="post" action="<?=base_url('Categorias/editarRegistro/')?><?=$idcate?>">
  
  <div class="form-group">
    <label>Nombre la Categoria</label>
    <label>Nombre de Usuario</label>
	<input type="text" class="form-control" size="40" name="cate_nombre" id="cate_nombre" value="<?=$usercate?>">
  </div>
  
  <button type="submit"class="btn btn-warning btn-lg btn-block">Editar <i class="fas fa-edit"></i></button>


</form>
<div>