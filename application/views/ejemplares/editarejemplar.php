<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<br>
<div class="rounded" style="background-color:#CAD6D7">
<h1>Editando Ejemplares </h1>
<form method="post" action="<?=base_url('Ejemplar/editarRegistro/')?><?=$ejem_id?>">
  
  <div class="form-group">
    <label>Titulo</label>
	<input type="text" class="form-control" size="40" name="ejem_titulo" id="ejem_titulo" value="<?=$ejem_titulo?>">
  </div>
  <div class="form-group">
    <label>Editorial</label>
	<input type="text" class="form-control" size="40" name="ejem_editorial" id="ejem_editorial" value="<?=$ejem_editorial?>">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Año</label>
	<input type="text" class="form-control" size="40" name="ejem_anio" id="ejem_anio" value="<?=$ejem_anio?>">
  </div>
  <div class="form-group col-md-6">
    <label>Paginas</label>
	<input type="text" class="form-control" size="40" name="ejem_paginas" id="ejem_paginas" value="<?=$ejem_paginas?>">
  </div>
  </div>
  <button type="submit"class="btn btn-warning btn-lg btn-block">Editar <i class="fas fa-edit"></i></button>

</form>
</div>
