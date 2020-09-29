<h1>Editando Ejemplares </h1>
<button class ="btn btn-warning"><i class="fa fa-list" aria-hidden="true"></i></button>	

<form method="post" action="<?=base_url('Ejemplar/editarRegistro/')?><?=$ejem_id?>">
  
  <div class="form-group">
    <label>Titulo</label>
	<input type="text" class="form-control" size="40" name="ejem_titulo" id="ejem_titulo" value="<?=$ejem_titulo?>">
  </div>
  <div class="form-group">
    <label>Editorial</label>
	<input type="text" class="form-control" size="40" name="ejem_editorial" id="ejem_editorial" value="<?=$ejem_editorial?>">
  </div>
  <div class="form-group">
    <label>Año</label>
	<input type="text" class="form-control" size="40" name="ejem_anio" id="ejem_anio" value="<?=$ejem_anio?>">
  </div>
  <div class="form-group">
    <label>Paginas</label>
	<input type="text" class="form-control" size="40" name="ejem_paginas" id="ejem_paginas" value="<?=$ejem_paginas?>">
  </div>
  
  <button type="submit" class="btn btn-warning">Editar</button>

</form>
