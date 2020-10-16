<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<div class="container">
<table class="table table-striped" style="">
   <thead>
     <tr>
        <th>Id</th>
        <th>Categorias</th>
        <th colspan='2'>Opciones</th>
        </tr>
   
   </thead>
   <tbody>

         <?php foreach ($categoria as $row):?>
            <tr>
              <td><?php echo $row->cate_id; ?></td>
              <td><?php echo $row->cate_nombre; ?></td>
              <td ><a href="<?php  echo base_url();?>Categorias/editar?cate_id=<?php echo $row->cate_id;?>" > <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
              <a href="<?php  echo base_url();?>Categorias/eliminar?cate_id=<?php echo $row->cate_id;?>" ><button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></a></a></td> 
            </tr>
         <?php endforeach; ?>

   </tbody>

</table>
</div>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
<a href="<?php  echo base_url();?>Ejemplar/listaejemplar?"><button type="submit" class="btn btn-secondary">VER EJEMPLARES<i class="fas fa-arrow-circle-right"></i></button></a>
<a href="<?php echo base_url('Categorias/insertar')?>">  <button type="submit" class="btn btn-primary">Insertar nueva categoria</button>  </a>

<a class="nav-item nav-link" href="<?php echo base_url('Reportes') ?>"><button type="submit" class="btn btn-success">Imprimir :<i class="fas fa-print"></i></button></a>
  </nav>

</nav>