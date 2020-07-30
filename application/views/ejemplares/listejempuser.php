<table class="table table-striped">
   <thead>
    <tr>
        <th>id</th>
        <th>titulo</th>
        <th>editorial</th>
        <th>año</th>
        <th>paginas</th>
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
      </tr>
   <?php endforeach; ?>
   </tbody>
</table>
<br>

