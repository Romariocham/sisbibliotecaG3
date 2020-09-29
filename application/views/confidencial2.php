<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/datatables/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet"  type="text/css" href="<?php echo base_url()?>assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
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
        <td ><a href="<?php  echo base_url();?>Login/editar?usua_id=<?php echo $row->usua_id;?>" >
       <button class="btn btn-warning" >Editar</button>
      </a>
        </td>
        <td ><a href="<?php  echo base_url();?>Login/eliminar?usua_id=<?php echo $row->usua_id;?>" >
        <button class="btn btn-danger">Eliminar</button> </a></td> 
      </tr>
   <?php endforeach; ?>
   </tbody>

</table>
   <br>
   <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
   <a href="<?php echo base_url('Login/insertar')?>"> <button type="submit" class="btn btn-success">INSERTAR NUEVO USUARIO</button> </a>
   <!--para imprimir a los usuarios -->
    <a class="nav-item nav-link" href="<?php echo base_url('Reportes/imprimeusuarios') ?>"><button type="submit" class="btn btn-success">IMPRIMIR LISTA DE USUARIOS</button></a>
  </nav>

    <script src="<?php echo base_url()?>assets/datatables/jquery/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url()?>assets/datatables/datatables.min.js"></script>            
 <script type="text/javascript" src="<?php echo base_url()?>assets/datatables/main.js"></script>


