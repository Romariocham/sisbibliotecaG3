<table border=1>
   <thead>
     <tr>
        <th>id</th>
      <!--  <th>nombres</th> -->
        <th>usuarios</th> 
        <th>passwords</th>
     </tr>
   
   </thead>
   <tbody>
   <?php foreach ($usuario as $row):?>
      <tr>
         <td> <?php echo $row->usua_id; ?></td>
        <!-- <td> <?php echo $row->nombres; ?></td> -->
         <td> <?php echo $row->usua_login; ?></td>
         <td> <?php echo $row->usua_password; ?></td>
      </tr>
   <?php endforeach; ?>
   </tbody>


</table>

