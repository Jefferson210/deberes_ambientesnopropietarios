$(document).ready(function(){
	//VALIDAR FORMULARIO
	$("form#registro").validate({
		rules:{
			nombre:{
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
			celular:{
				required:true,
				number: true,
				minlength:10, 
				maxlength:10
			},
			direccion:{	
				required:false		
			},
			nickname:{
				required:true	
			},
			password:{
				minlength:8, 
				required:true
			},
			rep_password:{
					required:true,
					equalTo:"#password"
			}
		},
		messages:{
			nombre:{
				required:"Ingrese su nombre.",
				minlength:$.validator.format("Al menos{0} caracteres requeridos")
			},
			email:{
				required:"Ingrese su correo electronico.",
				remote: "Este email ya existe, intente con otro"

			},
			celular:{
				required:"Ingrese su número de celular.",
				minlength:$.validator.format("Al menos{0} caracteres requeridos"),
				maxlength:$.validator.format("Maximo {0} caracteres")
			},
			nickname:{
				required:"Ingrese un nickname."	
			},
			password:{
				required:"Ingrese una contraseña.",
				minlength:$.validator.format("Al menos {0} caracteres requeridos")	
			},
			rep_password:{
				required:"La contraseñas no coinciden."				
			}
		}
	});

	$("#btn-enviar").on("click",function(e){
		//e.preventDefault();
		if($("form#registro").valid()){
			$.ajax({
				url: 'php/procesar.php',
				type: 'post',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {"nombre": $("form#registro #nombre").val(),
						"email": $("form#registro #email").val(),
						"celular":$("form#registro #celular").val(),
						"direccion":$("form#registro #direccion").val(),
						"nickname":$("form#registro #nickname").val(),
						"password":$("form#registro #password").val(),
						"rep_password":$("form#registro #rep_password").val()}
			})
			.done(function(msg) {
				if(msg == "Registro exitoso")
		        $('#mensaje').addClass('alert-success');
		      else
		        $('#mensaje').addClass('alert-danger');

		      $('#mensaje').html(msg);
		      console.log("success");
			})
			.fail(function(jqXHR, textStatus, errorThrown) {
				console.log("fail: " + textStatus + " " + errorThrown);
				 $("#error").html(textStatus)
			})
			.always(function() {
				console.log("complete");
			});			
		}
	})
});