function validar(form){

	msg_error = "";
	msg_error += validarNombre(form.nombre.value);
	msg_error += validarApellido(form.apellido.value);
	msg_error += validarFecha(form.fechadenacimiento.value);
	msg_error += validarDireccion(form.direccion.value);
	msg_error += validarTelefono(form.telefono.value);
	msg_error += validarEstado(form.estado_civil.value);
	msg_error += validarDepartamento(form.departamento.value);

	if(msg_error=="")
		return true
	

	else{
		var mensaje = msg_error

		document.getElementById("text").innerHTML =mensaje
		return false
	}
}
function validarNombre(valor){

	if(valor == "")
		return "Ingrese el nombre.\n"
	else if(!valor.match(/^[a-zA-Z]*$/))
		return "Ingrese solo letras por favor"
	return ""
}
function validarApellido(valor){
	if(valor == "")
		return "Ingrese el apellido.\n"
	else if(!valor.match(/^[a-zA-Z]*$/))
		return "Ingrese solo letras por favor.\n"
	return "" 
}
function validarFecha(valor){

	if(valor == "")
		return "Ingrese el fecha.\n"
	else if(!valor.match(/^\d{1,2}\/\d{1,2}\/\d{2,4}$/))
		return "Escriba el siguiente formato DD/MM/AAAA. Ejm: 01/01/2010.\n"
	return ""
}

function validarDireccion(valor){
	if(valor == "")
		return "Ingrese el direccion.\n"
	else if(!valor.match(/^[a-zA-Z]*$/))
		return "Ingrese solo letras por favor.\n"
	return ""
}

function validarTelefono(valor){
	if(valor == "")
		return "Ingrese el telefono.\n"
	else if(isNaN(valor))
		return "Ingrese solo numeros.\n"
	else if(!valor.match(/[0-9]{10}$/))
		return "Faltan digitos. Ingrese un numero de telefono correcto ejemplo: 0978451021\n"
	return ""

}

function validarEstado(valor){
	if(valor == "")
		return "Ingrese el Estado de matrimonio.\n"
	else if(!valor.match(/^[a-zA-Z]*$/))
		return "Ingrese solo letras por favor.\n"
	return ""
}

function validarDepartamento(valor){
	if(valor == "")
		return "Ingrese el departamento.\n"
	else if(!valor.match(/^[a-zA-Z]*$/))
		return "Ingrese solo letras por favor.\n"
	return ""
}
