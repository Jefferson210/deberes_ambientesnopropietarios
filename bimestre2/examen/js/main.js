$(document).ready(function(){
	//VALIDAR REGISTRO
	$("form#registro").validate({
		rules:{
			nombre:{
				required:true,
				minlength:3
			},
			apellido:{
				required:true,
				minlength:3
			},
			email:{
				required:true,
				email:true,
				remote: {
					        url: "php/validarEmail.php",
					        type: "post",
					        data:{         
						         email: function(){
						            return $('#email').val();
						          	}
					        	}	
						}		
			},
			contrasenia:{
				minlength:5, 
				required:true
			},
			rep_password:{
					required:true,
					equalTo:"#contrasenia"
			}
		},
		messages:{
			nombre:{
				required:"Ingrese sus nombres.",
				minlength:$.validator.format("Al menos{0} caracteres requeridos")
			},
			apellido:{
				required:"Ingrese sus apellidos.",
				minlength:$.validator.format("Al menos{0} caracteres requeridos")
			},
			email:{
				required:"Ingrese su correo electronico.",
				remote: "Este email ya existe, intente con otro"

			},
			contrasenia:{
				required:"Ingrese una contraseña.",
				minlength:$.validator.format("Al menos {0} caracteres requeridos")	
			},
			rep_password:{
				required:"La contraseñas no coinciden."				
			}
		},
		tooltip_options: {
	        nombre: {placement:'right'},
	        apellido: {placement:'right'},
	        email: {placement:'right'},	  
	        contrasenia: {placement:'right'},
	        rep_password: {placement:'right'}
    	}
	});

	//VALIDAR INICIO SESION
	$("form#inicioSesion").validate({
		rules:{
			sesion_email:{
				required:true,
				email:true,
			},
			sesion_contrasenia:{
				required:true
			}
		},
		messages:{
			sesion_email:"Ingrese un correo de la forma ddddd@dddd.com",
			sesion_contrasenia:"Ingrese una contraseña"
		},
		tooltip_options:{
			sesion_email:{placement:'right'},
			sesion_contrasenia:{placement:'right'}
		}
	});

	
	
	//ENVIAR DATOS VALIDADOS DE REGISTRO
	$("#btn-registrar").on("click",function(e){
		e.preventDefault();
		if($("form#registro").valid()){
			$.ajax({
				url: 'php/procesar.php',
				type: 'post',
				dataType: 'json',
				data: {"nombre": $("form#registro #nombre").val(),
						"apellido": $("form#registro #apellido").val(),
						"email": $("form#registro #email").val(),
						"contrasenia":$("form#registro #contrasenia").val(),
						"rep_password":$("form#registro #rep_password").val()
					}
			})
			.done(function(msg) {
			  if(msg == 'Registro exitoso')
		        $('#mensaje').addClass('alert-success');
		      else
		        $('#mensaje').addClass('alert-danger');

		      $('#mensaje').html(msg);
		      console.log("success");
		      $('#registro').trigger("reset");
			})
			.fail(function(jqXHR, textStatus, errorThrown) {
				console.log("fail: " + textStatus + " " + errorThrown);
			})
			.always(function() {
				console.log("complete");
			});			
		}
	});

	//BOTON CANCELAR
	$("#btn-cancelar").on("click",function(e){
		e.preventDefault();
		$('#registro').trigger("reset");

	});

	//ENVIAR DATOS VALIDADOS DE INICIO DE SESION
		$("#btn-sesion").on("click",function(e){
		e.preventDefault();
		if($("form#inicioSesion").valid()){
			$.ajax({
				url: 'php/verificarUsuarios.php',
				type: 'post',
				dataType: 'json',
				data: {"email": $("form#inicioSesion #sesion_email").val(),
						"contrasenia":$("form#inicioSesion #sesion_contrasenia").val()
					}
			})
			.done(function(msg) {
			  if(msg == 'Usuario o Contraseña Incorrecto')
		        $('#mensaje').addClass('alert-danger');
		      else
		      location.href="matriculacion.php"
		      	
		        //$('#mensaje').addClass('alert-danger'); //llevarme al archivo matriculacion.php en lugar de esto*/

		      $('#mensaje').html(msg);
		      console.log("success");
		      $('#inicioSesion').trigger("reset");
			})
			.fail(function(jqXHR, textStatus, errorThrown) {
				console.log("fail: " + textStatus + " " + errorThrown);
			})
			.always(function() {
				console.log("complete");
			});			
		}
	});

	

	
	

});//fin document ready