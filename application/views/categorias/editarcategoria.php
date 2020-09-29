<h1>Editando el Categorias </h1>
<button class ="btn btn-warning"><i class="fa fa-list" aria-hidden="true"></i></button>	

<form method="post" action="<?=base_url('Categorias/editarRegistro/')?><?=$idcate?>">
  
  <div class="form-group">
    <label>Nombre la Categoria</label>
    <label>Nombre de usuario</label>
	<input type="text" class="form-control" size="40" name="cate_nombre" id="cate_nombre" value="<?=$usercate?>">
  </div>
  
  <button type="submit" class="btn btn-warning">Editar</button>

</form>
