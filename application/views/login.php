
    <form action="<?php echo base_url('Login/evaluar')?>" method="post">
        <div class="form-group">
          <label>nombre de usuario</label>
          <input type="text" class="form-control" name="usua_login" placeholder="Ingrese los nombres">
        </div>
         <div class="form-group">
          <label>password</label>
          <input type="password" class="form-control" name="usua_password" placeholder="Ingrese la contraseña">
      </div>
      <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    <br>
    <a href="<?php echo base_url('Login/formulario')?>">
        <button type="submit" class="btn btn-primary">Registrarse</button>
          <!-- <button class="btn-login" type="submit"> Registrarse </button> -->
    </a>
   