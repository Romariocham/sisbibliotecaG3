  <body >
  <div id="login"  style="padding: 50px" >
        <div class="container" >
            <div id="login-row" class="row justify-content-center align-items-center" >
                <div class="col-md-6">
                <div id="login-column" class="rounded-sm"  style=" border: #205574 2px ridge; padding-bottom : 35px;">

                    <div id="login-box" class="col-md-12">
                        <form  form action="<?php echo base_url('Login/evaluar')?>" method="post">
                            <h1 class="text-center text-info">Login</h1>
                            <div class="form-group">
                                <label for="username" class="text-info"><h3>Usuario:</h3></label><br>
                                <input type="text" name="usua_login" class="form-control"  placeholder="Ingrese los nombres">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"><h3>Password:</h3></label><br>
                                <input type="password" name="usua_password" class="form-control" placeholder="Ingrese la contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                         <br>
                        <a href="<?php echo base_url('Login/formulario')?>" style="position: right ">
                            <button type="submit" class="btn btn-primary" >Registrarse</button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>