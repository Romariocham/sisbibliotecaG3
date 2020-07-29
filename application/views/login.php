<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo base_url('Login/evaluar')?>" method="post">
       <p>
         <label for="usua_login">usuario</label>
         <input type="text" name="usua_login">
       </p>
       <p>
         <label for="usua_password">password</label>
         <input type="password" name="usua_password">
       </p>
       <p>
         <input type="submit" value="ingresar">
       </p>
    </form>

    <a href="<?php echo base_url('Login/formulario')?>">
            <button class="btn-login" type="submit"> Registrarse </button>
          </a>
          
  </body>
</html>