<table class="table table-striped">
   <thead>
     <tr>
        <th>id</th>
        <th>categorias</th>
        <th>Ingresar</th>
     </tr>
   
   </thead>
   <tbody>
   <?php foreach ($categoria as $row):?>
      <tr>
        <td><?php echo $row->cate_id; ?></td>
        <td><?php echo $row->cate_nombre; ?></td>

      

        <td ><a href="<?php  echo base_url();?>Ejemplar/listaejemplar1?cate_id=<?php echo $row->cate_id;?>" >

        ir</a></td>
   <?php endforeach; ?>
   </tbody>
</table>
<br>




