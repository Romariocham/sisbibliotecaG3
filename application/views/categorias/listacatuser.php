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
        </tr>
   <?php endforeach; ?>
   </tbody>
</table>
<br>




