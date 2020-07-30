<table class="table table-striped">
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
        <th colspan='2'>opcion</th>
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
        Editar</a>
        </td>
        <td ><a href="<?php  echo base_url();?>Login/eliminar?usua_id=<?php echo $row->usua_id;?>" >Eliminar</a></td> 
      </tr>
   <?php endforeach; ?>
   </tbody>

</table>
   <br>
   <a href="<?php echo base_url('Login/insertar')?>">
        <button type="submit" class="btn btn-primary">Insertar nuevo usuario</button>
    </a>


