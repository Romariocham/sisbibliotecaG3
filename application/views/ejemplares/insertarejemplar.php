<?php  
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
?>