<h1>Editando el Categorias </h1>
<button class ="btn btn-danger"><i class="fa fa-list" aria-hidden="true"></i></button>	

<form method="post" action="<?=base_url('Categorias/editarRegistro/')?><?=$idcate?>">
  
  <div class="form-group">
    <label>Nombre de usuario</label>
	<input type="text" class="form-control" size="40" name="cate_nombre" id="cate_nombre" value="<?=$usercate?>">
  </div>
  
  <button type="submit" class="btn btn-danger">Editar</button>

</form>
