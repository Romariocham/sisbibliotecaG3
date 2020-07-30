<table class="table table-striped">
   <thead>
     <tr>
        <th>id</th>
        <th>categorias</th>
        <th>ir</th>
     </tr>
   
   </thead>
   <tbody>
   <?php foreach ($categoria as $row):?>
      <tr>
        <td><?php echo $row->cate_id; ?></td>
        <td><?php echo $row->cate_nombre; ?></td>
<<<<<<< HEAD
        <td ><a href="<?php  echo base_url();?>Ejemplar/listaejemplar1?cate_id=<?php echo $row->cate_id;?>" >
=======
        <td ><a href="<?php  echo base_url();?>Ejemplar/listaejemplar?cate_id=<?php echo $row->cate_id;?>" >
>>>>>>> 68bebaf1bed64946f9c20a3f7a4778bfc10b43c2
        ir</a></td>
   <?php endforeach; ?>
   </tbody>
</table>
<br>




