
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/datatables/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet"  type="text/css" href="<?php echo base_url()?>assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
<table id="example" class="table table-striped table-bordered" style="width:100%">
   <thead>
     <tr>
        <th>id</th>
        <th>titulo</th>
        <th>editorial</th>
        <th>año</th>
        <th>pagina</th>
        <th>categorias</th>
        <th>Editar</th>  
         <th>Eliminar</th>   <!--  <th colspan='2'>opciones</th>-->
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
        <td ><a href="<?php  echo base_url();?>Ejemplar/editar?ejem_id=<?php echo $row->ejem_id;?>" > <button type="submit" class="btn btn-warning">Editar</button></a> </td>
        <td ><a href="<?php  echo base_url();?>Ejemplar/eliminar?ejem_id=<?php echo $row->ejem_id;?>" > <button type="submit" class="btn btn-danger">Eliminar</button></a> </td> 
    </tr>

    <?php endforeach; ?>
   </tbody>


</table>

<br>



 <a href="<?php echo base_url('Ejemplar/insertar')?>"> <button type="submit" class="btn btn-success">Insertar nuevo ejemplar</button> </a>

  <script src="<?php echo base_url()?>assets/datatables/jquery/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url()?>assets/datatables/datatables.min.js"></script>            
 <script type="text/javascript" src="<?php echo base_url()?>assets/datatables/main.js"></script>

