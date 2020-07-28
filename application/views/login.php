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
         <label for="usuario">usuario</label>
         <input type="text" name="usuario">
       </p>
       <p>
         <label for="password">password</label>
         <input type="password" name="password">
       </p>
       <p>
         <input type="submit" value="ingresar">
       </p>
    </form>
</body>
</html>