
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<br>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
   <thead>
     <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Editorial</th>
        <th>Año</th>
        <th>Pagina</th>
        <th>Categorias</th>
        <!--<th>Portada</th>-->
        <th>Opciones</th>   <!--  <th colspan='2'>opciones</th>-->
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
        <!--<td><?php //echo $row->ejem_imagen; ?></td>-->
        <td ><a href="<?php  echo base_url();?>Ejemplar/editar?ejem_id=<?php echo $row->ejem_id;?>" > <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i></button></a><a href="<?php  echo base_url();?>Ejemplar/eliminar?ejem_id=<?php echo $row->ejem_id;?>" > <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></a> </td> 
        </tr> 
    <?php endforeach; ?>
   </tbody>
</table>
</div>


<!-------------------------------------------------------------------------------------------
                      código datatable: javascript (inicio)-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function(){
    $('#example').DataTable();});//"#example": hace referencia al id del table
    </script>
                      <!--código datatable: javascript (final)
  ------------------------------------------------------------------------------------------->

<!-----------------------------------------------------------------------------------------------------------------------
                    Menu: insertar nuevo usuario,  imprimir usuarios en pdf "falta aumentar" e (inicio) -->  
<br>
<a href="<?php echo base_url('Ejemplar/insertar')?>"> <button type="submit" class="btn btn-success">Insertar nuevo ejemplar</button> </a>

                     <!--Menu: insertar nuevo usuario,  imprimir usuarios en pdf "falta aumentar" e (final)
-------------------------------------------------------------------------------------------------------------------------->   
