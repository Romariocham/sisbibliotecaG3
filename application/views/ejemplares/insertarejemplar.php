<br><br>

<div class="form-row">
<div class="form-group col-md-6">
  <h3>Biblioteca: </h3> 
  <div>BLALALALALALALALABLABLABAL:</div>
  <img src="https://img.freepik.com/foto-gratis/libro-abierto-antecedentes-biblicos_112554-164.jpg?size=626&ext=jpg" alt="libro magico" style="height:90%; width:100%;">
</div>
<div class="from-group col-md-6" style="background-color:#CAD6D7; padding:10px;">
<h1>Insertar Ejemplar</h1>

<?php echo form_open('ejemplar/guardar');?>

  <div class="form-group">
    <label>Titulo</label>
    <input type="text" class="form-control" name="ejem_titulo" placeholder="Ingrese el titulo" value="<?php echo set_value('ejem_titulo'); ?>"  >
    <?php echo form_error('ejem_titulo'); ?>
  </div>
  <div class="form-group">
    <label>Editorial</label>
    <input type="text" class="form-control" name="ejem_editorial" placeholder="Ingrese el editorial" value="<?php echo set_value('ejem_editorial'); ?>" >
    <?php echo form_error('ejem_editorial'); ?>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Año</label>
    <input type="text" class="form-control" name="ejem_anio" placeholder="Ingrese el año" value="<?php echo set_value('ejem_anio'); ?>" >
    <?php echo form_error('ejem_anio'); ?>
  </div>
  <div class="form-group col-md-6">
    <label>Paginas</label>
    <input type="text" class="form-control" name="ejem_paginas" placeholder="Ingrese la cantidad de paginas " value="<?php echo set_value('ejem_paginas'); ?>">
    <?php echo form_error('ejem_paginas'); ?>
  </div>
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
</div>
</div>
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

