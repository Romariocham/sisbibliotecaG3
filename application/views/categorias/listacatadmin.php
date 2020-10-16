
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<div class="form-group">
<table class="table table-striped">
<table class="table table-striped table-bordered" style="width:100%">

   <thead>
     <tr>
<<<<<<< HEAD
        <th>id</th>
        <th>categorias</th>
        <th >editar</th>
        <th >eliminar</th>
=======
        <th>Id</th>
        <th>Categorias</th>
        <th colspan='2'>Opciones</th>
>>>>>>> a78ea1962067188a66f072a4e5baf15fc9950cef
        </tr>
   
   </thead>
   <tbody>

         <?php foreach ($categoria as $row):?>
            <tr>
              <td><?php echo $row->cate_id; ?></td>
              <td><?php echo $row->cate_nombre; ?></td>
<<<<<<< HEAD
              <td ><a href="<?php  echo base_url();?>Categorias/editar?cate_id=<?php echo $row->cate_id;?>" > <button type="submit" class="btn btn-warning">Editar</button></a>
              </td>
              <td>
              <a href="<?php  echo base_url();?>Categorias/eliminar?cate_id=<?php echo $row->cate_id;?>" ><button type="submit" class="btn btn-danger">Eliminar</button></a></a>
            </td> 
=======
              <td ><a href="<?php  echo base_url();?>Categorias/editar?cate_id=<?php echo $row->cate_id;?>" > <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
              <a href="<?php  echo base_url();?>Categorias/eliminar?cate_id=<?php echo $row->cate_id;?>" ><button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></a></a></td> 
>>>>>>> a78ea1962067188a66f072a4e5baf15fc9950cef
            </tr>
         <?php endforeach; ?>

   </tbody>

</table>
<<<<<<< HEAD
<br>
<nav class="navbar navbar-light" style="background-color: #FFFFFF;">
<a href="<?php echo base_url('Categorias/insertar')?>">  <button type="submit" class="btn btn-primary">Insertar nueva categoria</button>  </a>

=======

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
<a href="<?php  echo base_url();?>Ejemplar/listaejemplar?"><button type="submit" class="btn btn-secondary">VER EJEMPLARES<i class="fas fa-arrow-circle-right"></i></button></a>
<a href="<?php echo base_url('Categorias/insertar')?>">  <button type="submit" class="btn btn-primary">Insertar nueva categoria</button>  </a>

<a class="nav-item nav-link" href="<?php echo base_url('Reportes') ?>"><button type="submit" class="btn btn-success">Imprimir :<i class="fas fa-print"></i></button></a>
  </nav>

>>>>>>> a78ea1962067188a66f072a4e5baf15fc9950cef
</nav>