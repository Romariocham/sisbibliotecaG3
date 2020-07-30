
<h1>Insertar categoria</h1>
<!--<button class = "btn btn danger"><i class="fa fa-user-plus" aria-hidden="true"></i></button> -->

<form method="post" action="<?php echo base_url('Categorias/guardar') ?>">
  
  <div class="form-group">
    <label>nombre de la categoria</label>
    <input type="text" class="form-control" name="cate_nombre" placeholder="Ingrese el nombre">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>