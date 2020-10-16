
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body style="background-color:#E9FEFF">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#93C2C9">
  <a class="navbar-brand" href="#"><b>MENU</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url() ?>"><h4><b>INICIO</b></h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Categorias') ?>"><h4><b>CATEGORIAS</b></h4></a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Ejemplar/listaejemplar') ?>"><h4><b>EJEMPLAR</b></h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Welcome/confidencial2') ?>"><h4><b>USUARIOS</b></h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Ejemplar/insertar') ?>"><h4><b>NUEVO LIBRO</b></h4></a>
      </li>
      <a class="nav-link" href="<?php echo base_url('Login/salir') ?>"><img src="https://image.flaticon.com/icons/png/512/56/56805.png" style="height:45px"></a>
  </div>
</nav>
</body>

