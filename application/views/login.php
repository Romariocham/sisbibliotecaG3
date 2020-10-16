
<style>
  body{
    background-image: url("https://i.blogs.es/6028d4/5416627232_c292475f50_k/1366_2000.jpg");
  }
</style>

 <body>
  <div id="login"  style="padding: 50px" >
        <div class="container" >
            <div id="login-row" class="row justify-content-center align-items-center" >
                <div class="col-md-6">
                <div id="login-column" class="rounded-sm" style="border: #C6DADB 5px ridge">
                    <div id="login-box" class="card"  style=" background-color:#CAD6D7; opacity: 0.8;" >
                        <form class="needs-validation mr-2" novalidate  form action="<?php echo base_url('Login/evaluar')?>" method="post">
                             <div class="card-title text-center">
                             <img src="https://image.flaticon.com/icons/png/512/272/272456.png" alt="log" style="heigth:30%; width:30%; ">
                             <b><h1>LOGIN</h1></b> 
                             </div>
                             <div class="card-body">
                            <div class="form-group">
                                <label for="username" class="text-info"><h3>Usuario:</h3></label><br>
                                <input type="text" name="usua_login" class="form-control"  placeholder="Ingrese los nombres" required> 
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Escriba su nombre</div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"><h3>Password:</h3></label><br>
                                <input type="password" name="usua_password" class="form-control" placeholder="Ingrese la contraseña" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Escriba su contraseña</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
                            </div>
                        </form>
                       <div class="card-footer">
                        <a href="<?php echo base_url('Login/formulario')?>" style ="position: right ">
                            <button class="btn btn-secondary btn-lg btn-block" >Registrarse</button>
                        </a>
                        </div>
                       </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // fetch all the forms we want to apply custom style
    var inputs = document.getElementsByClassName('form-control')

    // loop over each input and watch blue event
    var validation = Array.prototype.filter.call(inputs, function(input) {
        
      input.addEventListener('blur', function(event) {
        // reset
        input.classList.remove('is-invalid')
        input.classList.remove('is-valid')
        
        if (input.checkValidity() === false) {
            input.classList.add('is-invalid')
        }
        else {
            input.classList.add('is-valid')
        }
      }, false);
    });
  }, false);
})()

</script>
<script>
//Usamos este codigo de bootstrap para no poder enviar el formulario sin llenar algunos campos
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>