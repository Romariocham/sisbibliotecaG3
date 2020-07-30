<h1>Insertar Ejemplar</h1>

<form method="post" action="<?php echo base_url('Ejemplar/guardar') ?>">
  
  <div class="form-group">
    <label>titulo</label>
    <input type="text" class="form-control" name="ejem_titulo" placeholder="Ingrese el titulo">
  </div>
  <div class="form-group">
    <label>editorial</label>
    <input type="text" class="form-control" name="ejem_editorial" placeholder="Ingrese el editorial">
  </div>
  <div class="form-group">
    <label>año</label>
    <input type="text" class="form-control" name="ejem_anio" placeholder="Ingrese el año">
  </div>
  <div class="form-group">
    <label>paginas</label>
    <input type="text" class="form-control" name="ejem_paginas" placeholder="Ingrese la cantidad 
    de paginas ">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>