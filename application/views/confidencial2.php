<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/datatables/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet"  type="text/css" href="<?php echo base_url()?>assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<div class="container-sm">
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
   <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
   <a href="<?php echo base_url('Login/insertar')?>"> <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i></button> </a>
   <!--para imprimir a los usuarios -->
    <a class="nav-item nav-link" href="<?php echo base_url('Reportes/imprimeusuarios') ?>"><button type="submit" class="btn btn-success">IMPRIMIR LISTA DE USUARIOS</button></a>
  </nav>

    <script src="<?php echo base_url()?>assets/datatables/jquery/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url()?>assets/datatables/datatables.min.js"></script>            
 <script type="text/javascript" src="<?php echo base_url()?>assets/datatables/main.js"></script>


