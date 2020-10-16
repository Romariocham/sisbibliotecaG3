  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<div class="form-group">
<table class="table table-striped">
<table class="table table-striped table-bordered" style="width:100%">

   <thead>
     <tr>
        <th>Id</th>
        <th>Categorias</th>
        <th >Editar</th>
        <th >Eliminar</th>
        </tr>
   
   </thead>
   <tbody>

         <?php foreach ($categoria as $row):?>
            <tr>
              <td><?php echo $row->cate_id; ?></td>
              <td><?php echo $row->cate_nombre; ?></td>
              <td ><a href="<?php  echo base_url();?>Categorias/editar?cate_id=<?php echo $row->cate_id;?>" > <button type="submit" class="btn btn-warning">Editar <i class="fas fa-edit"></i></button></a>
              </td>
              <td>
              <a href="<?php  echo base_url();?>Categorias/eliminar?cate_id=<?php echo $row->cate_id;?>" ><button type="submit" class="btn btn-danger">Eliminar <i class="fas fa-trash"></i></button></a></a>
            </td>
         <?php endforeach; ?>

   </tbody>

</table>
<br>

<nav class="navbar navbar-light" style="background-color: #FFFFFF;">
<a class="nav-item nav-link" href="<?php echo base_url('Categorias/insertar') ?>"><button type="submit" class="btn btn-success">INSERTAR NUEVA CATEGORIA <i class="fas fa-user-plus"></i></button></a>

<a class="nav-item nav-link" href="<?php echo base_url('Reportes') ?>"><button type="submit" class="btn btn-success">Imprimir <i class="fas fa-print"></i></button></a>
  </nav>
</nav>