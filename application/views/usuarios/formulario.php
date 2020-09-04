<head> 
<!--Para poder usar los iconos de valide e invalited agregagos esta linea que nos permite usar bootstrap 3,
y los iconos de esta vercion-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
</head>

<h1>Registrate - Ingrese los datos</h1>
<button class = "btn btn danger"><i class="fa fa-user-plus" aria-hidden="true"></i></button>

<form method="post" id="validateForm" action="<?php echo base_url('Login/guardar') ?>" >
<fieldset>
  <div class="form-group">
    <label>nombre de usuario</label>
    <input type="text" class="form-control" name="usua_login" placeholder="Ingrese los nombres">
  </div>
  <div class="form-group">
    <label>nombres</label>
    <input type="text" class="form-control" name="usua_nombres"  placeholder="Ingrese sus nombres">
  </div>
  <div class="form-group">
    <label>apellidos</label>
    <input type="text" class="form-control" name="usua_apellidos"  placeholder="Ingrese sus apellidos">
  </div>
  <div class="form-group">
    <label>direccion</label>
    <input type="text" class="form-control" name="usua_direccion"  placeholder="Ingrese su direccion">
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="text" class="form-control" name="usua_email"  placeholder="Ingrese su email">
  </div>
  <div class="form-group">
    <label>telefono</label>
    <input type="text" class="form-control" name="usua_telefono"  placeholder="Ingrese su telefono">
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" name="usua_password" placeholder="Ingrese la contraseña">
  </div>
  <div class="form-group">
    <label>Confirma tu password</label>
    <input type="password" class="form-control" name="usua_confirmPassword" placeholder="Ingrese la contraseña">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>

<script>
//Utilizamos js de bootsprap para poder comprobar y mostrar los requisitos del llenado del formulario.
      $('#validateForm').bootstrapValidator({
//para poder mostrar los iconos 
feedbackIcons: {
	valid:'glyphicon glyphicon-ok',
	invalid: 'glyphicon glyphicon-remove',
	validating: 'glyphicon glyphicon-refresh'
},
fields: {
	usua_nombres: {
		validators: {
			notEmpty: {
				message: 'Por favor escribe tu Nombre'
			}
		}
	},
  usua_apellidos: {
		validators: {

			notEmpty: {
				message: 'Por forvor escribe tu apellido'
			}
		}
	},
	usua_telefono: {
		validators: {
			numeric: { 
				message: 'Escribir correctamente tu numero de telefono'
      },
			notEmpty: {
				message: 'Por favor escribe tu numero de telefono'
			}
		}
	},
	usua_direccion: {
		validators: {
			stringLength: {
				max: 100,
				message:'Maximo 100 caracteres'
			},
			notEmpty: {
				message: 'Por favor escribe tu direccion'
			}
		}
	},
	usua_email: {
		validators: {
			notEmpty: {
				message: 'Por favor escribe tu email'
			},
			emailAddress: {
				message: 'Escribe un email valido'
			}
		}
	},
	usua_password: {
		validators: {
      stringLength: {
				min: 5,
				message: 'Su contraseña no es segura'
			},
			notEmpty: {
				message: 'Por favor escribe tu contraseña'
			}
		}
	},
	usua_confirmPassword: {
		validators: {
			notEmpty: {
				message: 'Vueleve a escribir tu contraseña'
			},
			identical: {
				field: 'usua_password',
				message: 'La contraseña no coincide con lo escrito anteriormente'
			}
		}
	 },
	}
});
    </script>

<script>
// //Usamos este codigo de bootstrap para no poder enviar el formulario sin llenar algunos campos
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