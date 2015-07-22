$(document).ready(function(){
	


$("#form").validate({
			rules: {
				nombre: {
					required: true
					
				},
				usuario: {
					minlength: 5,
					required: true
				},	
				contrasena: {
					required: true
				},
				verificar: {
					required: true,
					equalTo: "#contrasena"
				}
			
			},
			messages: {
				nombre:{
					required: "Campo obligatorio",
					minlength: "El nombre debe contener 2 caracteres"
				},
				usuario:{
					required: "Campo obligartorio"
				},
				verificar:{
					required: "Campo obligatorio",
					equalTo: "La contraseña ingresada no coincide. Vueva a intentarlo"

				},
				contrasena:{
					required: "Campo obligatorio"
				}
			}
		});

	$("#btn").on("click", function(ev)
	{
		//realizar la peticion de la llamada ajax
		//done envia los mensajes que se encuentran en el rpc.php
		//#mensaje div colocado en el index
		//prevent evita el comportamiento por defecto del boton
		ev.preventDefault();
		if($("#form").valid()){

		$.ajax({

			type: 'post',
			url: 'insertar.php',
			data: {
				nombre: $("#nombre").val(),
				usuario:  $("#usuario").val(),
				contrasena: $("#contrasena").val(),
				verificar: $("#verificar").val()
			}
		})
		.done(function( msg ){
			$("#mensaje2").html(msg);
		})
		.fail(function(jHttp, textStatus, errorThrown){
			$("#mensaje2").html("Error: " + textStatus + ". " + errorThrown);
		})
		.always(function(){
			$("#form")[0].reset();

			$("#guardar").html("Datos Guardados");

		});
	}
});


});




