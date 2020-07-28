<table border=1>
   <thead>
     <tr>
        <th>id</th>
        <th>nombres</th>
        <th>usuarios</th>
        <th>passwords</th>
     </tr>
   
   </thead>
   <tbody>
   <?php foreach ($persona as $row):?>
      <tr>
         <td> <?php echo $row->id; ?></td>
         <td> <?php echo $row->nombres; ?></td>
         <td> <?php echo $row->usuario; ?></td>
         <td> <?php echo $row->password; ?></td>
      </tr>
   <?php endforeach; ?>
   </tbody>


</table>

