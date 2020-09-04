<table id="example" class="table table-striped table-bordered" style="width:100%">
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
    <td><?php echo $row->cate_nombre; ?></td>
    <td ><a href="<?php  echo base_url();?>Ejemplar/editar?ejem_id=<?php echo $row->ejem_id;?>" > Editar</a> </td>
    <td ><a href="<?php  echo base_url();?>Ejemplar/eliminar?ejem_id=<?php echo $row->ejem_id;?>" >Eliminar</a> </td> 
    </tr>
    <?php endforeach; ?>
   </tbody>
</table>
     <!-------------------------Inicio-datatable-------------------------------->
     <script src="<?php echo base_url()?>assets/jquery/jquery-3.3.1.min"></script>
     <script type="text/javascript" src="<?php echo base_url()?>assets/datatables/datatables.min.js"></script>         
     <!--<script type="text/javascript" src="main.js"></script>-->
     <script>

$('#example').DataTable(); //Para inicializar datatables de la manera más simple

$(document).ready(function() {    
   /* $('#example').DataTable({
    //para cambiar el lenguaje a español
        "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                 },
                 "sProcessing":"Procesando...",
            }
    });  */   
});
     </script>
     <!-------------------------Final-datatable-------------------------------->
<br>
<a href="<?php echo base_url('Ejemplar/insertar')?>"> <button type="submit" class="btn btn-primary">Insertar nuevo ejemplar</button> </a>
