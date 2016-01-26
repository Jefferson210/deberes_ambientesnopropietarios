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
			telefono:{
				required:true,
				number: true,
				minlength:10, 
				maxlength:10
			},
			direccion:{	
				required:false		
			},
			provincia:{	
				required:true		
			},
			canton:{	
				required:true		
			},
			parroquia:{	
				required:true		
			},
			usuario:{
				required:true	
			},
			contrasenia:{
				minlength:8, 
				required:true
			},
			rep_password:{
					required:true,
					equalTo:"#contrasenia"
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
			telefono:{
				required:"Ingrese su número de teléfono.",
				minlength:$.validator.format("Al menos{0} caracteres requeridos"),
				maxlength:$.validator.format("Maximo {0} caracteres")
			},
			provincia:{
				required:"Seleccione una Provincia"
			},
			canton:{
				required:"Seleccione un Cantón"
			},
			parroquia:{
				required:"Seleccione una Parroquia"
			},
			usuario:{
				required:"Ingrese un usuario."	
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
	        nombre: {placement:'left'},
	        email: {placement:'right'},
	        telefono: {placement:'right'},
	        provincia: {placement:'right'},
	        canton: {placement:'right'},
	        parroquia: {placement:'right'},
	        usuario: {placement:'right'},
	        contrasenia: {placement:'right'},
	        rep_password: {placement:'right'}
    	}
	});
	
	//ENVIAR DATOS VALIDADOS
	$("#btn-enviar").on("click",function(e){
		e.preventDefault();
		if($("form#registro").valid()){
			$.ajax({
				url: 'php/procesar.php',
				type: 'post',
				dataType: 'json',
				data: {"nombre": $("form#registro #nombre").val(),
						"email": $("form#registro #email").val(),
						"telefono":$("form#registro #telefono").val(),
						"direccion":$("form#registro #direccion").val(),
						"provincia":$("form#registro #txtprovincia").val(),
						"canton":$("form#registro #txtcanton").val(),
						"parroquia":$("form#registro #txtparroquia").val(),
						"usuario":$("form#registro #usuario").val(),
						"contrasenia":$("form#registro #contrasenia").val(),
						"rep_password":$("form#registro #rep_password").val()}
			})
			.done(function(msg) {
			  if(msg.result == 'Registro exitoso')
		        $('#mensaje').addClass('alert-success');
		      else
		        $('#mensaje').addClass('alert-danger');

		      $('#mensaje').html(msg.result);
		      console.log("success");
		      $('#users_table tbody').html(msg.filasUsuarios);
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

	//CARGAR CANTONES
	$('#txtprovincia').on('change', function(event) {
	  event.preventDefault();
	  
	  $.ajax({
	    url: 'php/get_cantones.php',
	    type: 'post',
	    data: {
	    		provincia: $('#txtprovincia').val()
	    	},
	  })
	  .done(function(msg) {
	    $('#txtcanton').html(msg);
	    $('#txtparroquia').html('<option value="">Seleccione...</option>');
	    console.log("success");
	  })
	  .fail(function() {
	    console.log("error");
	  })
	  .always(function() {
	    console.log("complete");
	  });
	  
	});

	//CARGAR PARROQUIAS
	$('#txtcanton').on('change', function(event) {
	  event.preventDefault();
	  
	  $.ajax({
	    url: 'php/get_parroquias.php',
	    type: 'post',
	    data: {
	    		canton: $('#txtcanton').val()
	    	},
	  })
	  .done(function(msg) {
	    $('#txtparroquia').html(msg);
	    console.log("success");
	  })
	  .fail(function() {
	    console.log("error");
	  })
	  .always(function() {
	    console.log("complete");
	  });  
	});

	//EDITAR TABLA
	var campo,id ,valor; 
	$('td.editable span').each(function(index,el){
		$(el).on('click',function(event){
			$("td:not(.id)").removeClass("editable");
			td=$(this).closest("td");
			campo=$(this).closest("td").data('campo');
			valor=$(this).text();
			id=$(this).closest("tr").find('.id').text();
			td.text("").html('<input type="text" id="modificar" value="'+$(this).html()+'"><button id="guardar_'+$(this).attr("id")+'">Guardar</button> <button id="cancelar_' + $(this).attr('id') + '">Cancelar</button>');

			$('#guardar_'+$(this).attr('id')).on('click',function(event){
				event.preventDefault();
				nuevoValor=$(this).closest("td").find('input').val();
				$.ajax({
					url: 'php/actualizar.php',
					type: 'post',
					dataType: 'json',
					data: {
						valor:nuevoValor,
						campo:campo,
						id:id
					},
				})
				.done(function(msg) {
					if(msg.result == 'Los datos han sido actualizados con exito.')
			        	$('#msgUpdate').addClass('alert-success');
			      	else
			       		 $('#msgUpdate').addClass('alert-danger');
					$('#msgUpdate').html(msg.result);
					td.html("<span>"+nuevoValor+"</span>");
       				$("td:not(.id)").addClass("editable");
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			});

			$('#cancelar_'+$(this).attr('id')).on('click',function(event){
				td.html("<span>"+valor+"</span>");
				$("td:not(.id)").addClass("editable");
			});
			
		});
	});

	//BUSCAR
	$("#buscar").keyup(function(event){
		$.ajax({
			url: 'php/buscar.php',
			type: 'post',
			dataType: 'json',
			data: {
				query: $("#buscar").val()
			},
		})
		.done(function(msg) {
			$("#users_table tbody").html(msg.filaConsultada)
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
	

});//fin document ready