<?php

$conn = new Mysqli($host,$usuario,$cont,$bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);

//Borrar

if($_POST){

	$id = $_POST['id'];

	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$date = $_POST['fechadenacimiento'];
	$direc = $_POST['direccion'];
	$telef = $_POST['telefono'];
	$est_civ = $_POST['estado_civil'];
	$depart = $_POST['departamento'];
	$q_actualizar = "UPDATE empleado SET nombre='$nom', apellido='$ape',fechadenacimiento='$date',
	direccion='$direc', telefono='$telef',estado_civil='$est_civ', departamento='$depart' WHERE id='$id'";
	$r= $conn->query($q_actualizar);
	if(!$r){
		echo '<div>error al modificar</div>';
	}else{
		echo '<div>dato modificado</div>';
	}
}

header('Location: index.php');
?>
