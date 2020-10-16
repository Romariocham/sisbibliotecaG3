<table class="table table-striped">
   <thead>
     <tr>
        <th>Id</th>
        <th>Categorias</th>
     </tr>
   
   </thead>
   <tbody>
   <?php foreach ($categoria as $row):?>
      <tr>
        <td><?php echo $row->cate_id; ?></td>
        <td><?php echo $row->cate_nombre; ?></td>
   <?php endforeach; ?>
   </tbody>
</table>
<a href="<?php  echo base_url();?>Ejemplar/listaejemplar1?"><button type="submit" class="btn btn-secondary">VER EJEMPLARES<i class="fas fa-arrow-circle-right"></i></button></a>

<br>




