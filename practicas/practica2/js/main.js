$(document).ready(function(){
	$("#form").on("hidden.bs.modal", function(ev) {
        $("#form")[0].reset();
    })




	$("#btn").on("click", function(ev)
	{

		$("#form").validate({
			rules: {
				nombre: {
					required: true,
					minlength: 2,
				},
				email: {
					required: true,
					email: true
				}, 
				mensajes: {
					required: true
				},	
				noticias: {
					required: true
				}
			},
			messages: {
				nombre:{
					required: "Campo obligatorio",
					minlength: "El nombre debe contener 2 caracteres"
				},
				email:{
					required: "Campo obligatorio",
					email: "Introdusca un correo valido"
				},
				mensajes:{
					required: "Agregue un mensaje por favor"
				},
				noticias:{
					required: "Seleccione una categoria por favor"
				}

			}
		});

		//realizar la peticion de la llamada ajax
		//done envia los mensajes que se encuentran en el rpc.php
		//#mensaje div colocado en el index
		//prevent evita el comportamiento por defecto del boton
		ev.preventDefault();
		if($("#form").valid()){

		$.ajax({
			url: 'insertar.php',

			type: 'post',
			data: {
				nombre: $("#nombre").val(),
				email: $("#email").val(), 
				mensajes: $("#mensajes").val(),
				noticias: $("#noticias").val()
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




