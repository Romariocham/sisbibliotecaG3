<table class="table table-striped">
   <thead>
    <tr>
        <th>id</th>
        <th>titulo</th>
        <th>editorial</th>
        <th>año</th>
        <th>pagina</th>
        <th>categorias</th>
       
    </tr>
   
   </thead>
   <tbody>
   <?php foreach ($ejemplar as $row):?>
      <tr>
        <td><?php echo $row->ejem_id; ?></td>
        <td><?php echo $row->ejem_titulo; ?></td>
        <td><?php echo $row->ejem_editorial; ?></td>
        <td><?php echo $row->ejem_anio; ?></td>
        <td><?php echo $row->ejem_paginas; ?></td>
        <td><?php echo $row->cate_nombre; ?></td>
      </tr>
   <?php endforeach; ?>
   </tbody>
</table>
<br>

