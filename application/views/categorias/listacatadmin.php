<table class="table table-striped">
   <thead>
     <tr>
        <th>id</th>
        <th>categorias</th>
        <th>ir</th>
        <th colspan='2'>opciones</th>
     </tr>
   
   </thead>
   <tbody>
   <?php foreach ($categoria as $row):?>
      <tr>
        <td><?php echo $row->cate_id; ?></td>
        <td><?php echo $row->cate_nombre; ?></td>

        <td ><a href="<?php  echo base_url();?>Ejemplar/listaejemplar?">
        ir</a>
      </td>
        <td ><a href="<?php  echo base_url();?>Categorias/editar?cate_id=<?php echo $row->cate_id;?>" >
        Editar</a>
        </td>
        <td ><a href="<?php  echo base_url();?>Categorias/eliminar?cate_id=<?php echo $row->cate_id;?>" >Eliminar</a></td> 
      </tr>
   <?php endforeach; ?>
   </tbody>
</table>
<br>
<a href="<?php echo base_url('Categorias/insertar')?>">
        <button type="submit" class="btn btn-primary">Insertar nueva categoria</button>
    </a>