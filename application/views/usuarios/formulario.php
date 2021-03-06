<body style="background-color:#E9FEFF">
<div class="form-row">
<div class="form-group col-md-6">
  <h3>Biblioteca: </h3> 
  <div>Nunca cierra!
  </div>
  <img src="https://img.freepik.com/vector-gratis/tecnologia-smartphone-educacion-libros-documentos_24640-37609.jpg?size=626&ext=jpg" alt="imga" style="width:100%">
</div>
<div class="form-group col-md-6 rounded" style="background-color:#CAD6D7">
<h1>Registrate - Ingrese los datos</h1>
<form class="needs-validation" novalidate  method="post"action="<?php echo base_url('Login/guardar') ?>" >
  <div class="form-group " >
	<label for="usua_loging">Nombre de usuario</label>
      <input type="text" class="form-control" name="usua_loging" 
     placeholder="Nombre de Usuario" maxlength="15" value="" required>
     <div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  <div class="form-group">
    <label for= "usua:nombres">Nombres</label>
    <input type="text" class="form-control" name="usua_nombres"  placeholder="Ingrese sus nombres" required>
	<div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
  </div>
  <div class="form-group">
    <label>Apellidos</label>
    <input type="text" class="form-control" name="usua_apellidos"  placeholder="Ingrese sus apellidos"required >
	<div class="valid-feedback">Looks good!</div>
     <div class="invalid-feedback">Looks bad!</div>
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
  <button type="submit" class="btn btn-primary">Submit</button>
     </form>
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