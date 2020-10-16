<table class="table table-striped">
   <thead>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Portada</th>
        <th>Editorial</th>
        <th>Año</th>
        <th>Pagina</th>
        <th>Categorias</th>
       
    </tr>
   
   </thead>
   <tbody>
   <?php foreach ($ejemplar as $row):?>
      <tr>
        <td><?php echo $row->ejem_id; ?></td>
        <td><?php echo $row->ejem_titulo; ?></td>
        <td><img src="<?php echo $row->ejem_img; ?>"> </td>
        <td><?php echo $row->ejem_editorial; ?></td>
        <td><?php echo $row->ejem_anio; ?></td>
        <td><?php echo $row->ejem_paginas; ?></td>
        <td><?php echo $row->cate_nombre; ?></td>
      </tr>
   <?php endforeach; ?>
   </tbody>
</table>
<br>
<nav class="navbar navbar-light" style="background-color: #FFFFFF;">
  <!-- imprime lista de ejemplares-->
<a class="nav-item nav-link" href="<?php echo base_url('Reportes') ?>"><button type="submit" class="btn btn-success">IMPRIMIR LISTA DE EJEMPLARES</button></a>
</nav>

