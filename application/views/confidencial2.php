
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<div class="form-group">
<br>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
   <thead>
     <tr>
        <th>Id</th>       
        <th>Usuarios</th> 
        <th>Passwords</th>
        <th>Nombres</th> 
        <th>Apellidos</th> 
        <th>Direccion</th> 
        <th>Email</th> 
        <th>Telefono</th> 
        <th>Opciones</th>
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

        <td ><a href="<?php  echo base_url();?>Login/editar?usua_id=<?php echo $row->usua_id;?>" >
       <button class="btn btn-warning" ><i class="fas fa-edit"></i> </button></a><a href="<?php  echo base_url();?>Login/eliminar?usua_id=<?php echo $row->usua_id;?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button> </a></td> 

      </tr>
   <?php endforeach; ?>
   </tbody>
</table>
</div>
   <br>

   <nav class="navbar navbar-light" style="background-color: #FFFFFF;">
   <a href="<?php echo base_url('Login/insertar')?>"> <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i></button> </a>
   <!--para imprimir a los usuarios -->
    <a class="nav-item nav-link" href="<?php echo base_url('Reportes/imprimeusuarios') ?>"><button type="submit" class="btn btn-success">IMPRIMIR LISTA DE USUARIOS</button></a>
  </nav>
  <div>
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

