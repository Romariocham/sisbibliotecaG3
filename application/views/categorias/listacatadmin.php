<table class="table table-striped table-bordered" style="width:100%">
   <thead>
     <tr>
        <th>id</th>
        <th>categorias</th>
        <th >editar</th>
        <th >eliminar</th>
        </tr>
   
   </thead>
   <tbody>

         <?php foreach ($categoria as $row):?>
            <tr>
              <td><?php echo $row->cate_id; ?></td>
              <td><?php echo $row->cate_nombre; ?></td>
              <td ><a href="<?php  echo base_url();?>Categorias/editar?cate_id=<?php echo $row->cate_id;?>" > <button type="submit" class="btn btn-warning">Editar</button></a>
              </td>
              <td>
              <a href="<?php  echo base_url();?>Categorias/eliminar?cate_id=<?php echo $row->cate_id;?>" ><button type="submit" class="btn btn-danger">Eliminar</button></a></a>
            </td> 
            </tr>
         <?php endforeach; ?>

   </tbody>
</table>
<br>
<nav class="navbar navbar-light" style="background-color: #FFFFFF;">
<a href="<?php echo base_url('Categorias/insertar')?>">  <button type="submit" class="btn btn-primary">Insertar nueva categoria</button>  </a>

</nav>