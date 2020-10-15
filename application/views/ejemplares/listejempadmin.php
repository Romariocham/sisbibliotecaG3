<br>
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
