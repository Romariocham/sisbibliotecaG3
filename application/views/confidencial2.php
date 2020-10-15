
<br>
<table id="example" class="table table-striped table-bordered" style="width:100%">
   <thead>
     <tr>
        <th>id</th>       
        <th>usuarios</th> 
        <th>passwords</th>
        <th>nombres</th> 
        <th>apellidos</th> 
        <th>direccion</th> 
        <th>email</th> 
        <th>telefono</th> 
        <th>Editar</th>
        <th>Eliminar</th>
     </tr>   
   </thead> 

   <tbody>
   <?php foreach ($usuario as $row):?>
      <tr>
        <td><?php echo $row->usua_id; ?></td>
        <td><?php echo $row->usua_login; ?></td>
        <td><?php echo $row->usua_password; ?></td>
        <td><?php echo $row->usua_nombres; ?></td> 
        <td><?php echo $row->usua_apellidos;?></td>
        <td><?php echo $row->usua_direccion;?></td>
        <td><?php echo $row->usua_email;?></td>
        <td><?php echo $row->usua_telefono;?></td>
        <td ><a href="<?php  echo base_url();?>Login/editar?usua_id=<?php echo $row->usua_id;?>"> <button class="btn btn-warning" >Editar</button>  </a> </td>
        <td ><a href="<?php  echo base_url();?>Login/eliminar?usua_id=<?php echo $row->usua_id;?>" >  <button class="btn btn-danger">Eliminar</button> </a></td> 
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
                    Menu: imprimir usuarios en pdf e insertar nuevo usuario (inicio) -->  
     <br> 
     <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
     <a href="<?php echo base_url('Login/insertar')?>"> <button type="submit" class="btn btn-success">INSERTAR NUEVO USUARIO</button> </a>
     <!--para imprimir a los usuarios -->
     <a class="nav-item nav-link" href="<?php echo base_url('Reportes/imprimeusuarios') ?>"><button type="submit" class="btn btn-success">IMPRIMIR LISTA DE USUARIOS</button></a>
    </nav>
                    <!--menu: imprimir usuarios en pdf e insertar nuevo usuario (final) 
  -------------------------------------------------------------------------------------------------------------------------->   




