<h1>Insertar Ejemplar</h1>

<?php
echo form_open('ejemplar/guardar');
?>
 
  <div class="form-group">
    <label>titulo</label>
    <input type="text" class="form-control" name="ejem_titulo" placeholder="Ingrese el titulo" value="<?php echo set_value('ejem_titulo'); ?>"  >
    <?php echo form_error('ejem_titulo'); ?>
  </div>
  <div class="form-group">
    <label>editorial</label>
    <input type="text" class="form-control" name="ejem_editorial" placeholder="Ingrese el editorial" value="<?php echo set_value('ejem_editorial'); ?>" >
    <?php echo form_error('ejem_editorial'); ?>
  </div>
  <div class="form-group">
    <label>año</label>
    <input type="text" class="form-control" name="ejem_anio" placeholder="Ingrese el año" value="<?php echo set_value('ejem_anio'); ?>" >
    <?php echo form_error('ejem_anio'); ?>
  </div>
  <div class="form-group">
    <label>paginas</label>
    <input type="text" class="form-control" name="ejem_paginas" placeholder="Ingrese la cantidad de paginas " value="<?php echo set_value('ejem_paginas'); ?>">
    <?php echo form_error('ejem_paginas'); ?>
  </div>

  <?php
  $data_e=array(
  'class'=>'form-control',
  'id'=>'b',
  );
  echo form_label('Categoria: ','b');
  echo form_dropdown('ejem_cate_id',$opciones,'',$data_e);//array('class'=>'form-control', 'id'=>'exampleFormControlSelect1')
  ?>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php /*
echo validation_errors(); 
echo form_open('ejemplar/guardar');
  
  $data_a = array(
  'name'=>'ejem_titulo',
  'class'=>'form-control',
  'id'=>'x',
  'value'=> '<?php echo set_value("ejem_titulo");?>'
  );
  echo form_label('Titulo: ','x'); 
  echo form_input($data_a,"");

  echo '<br>';

  $data_b=array(
  'name'=>'ejem_editorial',
  'class'=>'form-control',
  'id'=>'y'
  );
  echo form_label('Editorial: ','y'); 
  echo form_input($data_b,"");

  echo '<br>';

  $data_c = array(
  'name'=>'ejem_anio',
  'class'=>'form-control',
  'id'=>'z',
  );
  echo form_label('Año: ','z'); 
  echo form_input($data_c,"");

  echo '<br>';

  $data_d = array(
  'name'=>'ejem_paginas',
  'class'=>'form-control',
  'id'=>'a',
  );
  echo form_label('Páginas: ','a'); 
  echo form_input($data_d,"");

  echo '<br>';



  $data_e=array(
  'class'=>'form-control',
  'id'=>'b',
  );
  echo form_label('Categoria: ','b');
  echo form_dropdown('ejem_cate_id',$opciones,'',$data_e);

  echo '<br>';


  $attributes = array(
          'class' => 'btn btn-primary',
          'style' => 'color: #FFFFFF;',        
  );   
  echo  form_submit ('','Guardar',$attributes); 
  echo form_close();


echo '<br>';

*/
<<<<<<< HEAD
?>





=======
?>
>>>>>>> ccf7c9aedbce92c444de29d2da23dbf720df8854
