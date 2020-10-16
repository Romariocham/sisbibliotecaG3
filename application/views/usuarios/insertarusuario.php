<div class="form-row" style="position:relative" >
<div class="form-group col-md-6">
<div>
   <h1>Biblioteca:</h1>
</div>
<div >
  <p> Esta es una plataforma dondete puedes ver una gran variedad de libros:</p>

  <h3>Registrate es gratis!</h3>
</div>
<img src="https://www.educaciontrespuntocero.com/wp-content/uploads/2019/04/biblioteca-696x465.jpg" style="width:100%" alt="Libro">
</div>
<div class="form-group-col-md-6" style="background-color:#CAD6D7; padding:14px; margin:0px;">
<h1>Registrate - Ingrese los datos</h1>
<button class = "btn btn danger"><i class="fa fa-user-plus" aria-hidden="true"></i></button>

<form class="needs-validation" novalidate  method="post"action="<?php echo base_url('Login/guardar1') ?>" >

  <div class="form-group">
	<label for="usua_loging">Nombre de usuario</label>
      <input type="text" class="form-control" name="usua_loging" 
     placeholder="Nombre de Usuario" maxlength="15" value="" required>
     <div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for= "usua:nombres">Nombres</label>
    <input type="text" class="form-control" name="usua_nombres"  placeholder="Ingrese sus nombres" required>
	<div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  <div class="form-group col-md-6">
    <label>Apellidos</label>
    <input type="text" class="form-control" name="usua_apellidos"  placeholder="Ingrese sus apellidos"required >
	<div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  </div>
  <div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="usua_direccion"  placeholder="Ingrese su direccion" required>
	<div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="usua_email"  placeholder="Ingrese su email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
	<div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  <div class="form-group">
    <label>Telefono</label>
    <input type="tel" class="form-control" name="usua_telefono"  placeholder="Ingrese su telefono" max= "9"required>
	<div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="usua_password" placeholder="Ingrese la contraseña" min="3" required>
	<div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  <div class="form-group">
    <label>Confirma tu password</label>
    <input type="password" class="form-control"  name="usua_confirmPassword" placeholder="Confirme la contraseña"  min="3" required>
	<div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">GUARDAR</button>
</form>
</div>

</div>
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