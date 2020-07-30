<table class="table table-striped">
   <thead>
     <tr>
        <th>id</th>
        <th>titulo</th>
        <th>editorial</th>
        <th>año</th>
        <th>pagina</th>
        <th>categorias</th>
        <th colspan='2'>opciones</th>
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
        <td ><a href="<?php  echo base_url();?>Ejemplar/editar?ejem_id=<?php echo $row->ejem_id;?>" >
        Editar</a>
        </td>
        <td ><a href="<?php  echo base_url();?>Ejemplar/eliminar?ejem_id=<?php echo $row->ejem_id;?>" >Eliminar</a>
        </td> 
      </tr>
          <?php endforeach; ?>
   </tbody>
</table>
<br>
 <a href="<?php echo base_url('Ejemplar/insertar')?>">
        <button type="submit" class="btn btn-primary">Insertar nuevo ejemplar</button>
    </a>
