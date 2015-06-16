<?php

$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$date = $_POST['fechadenacimiento'];
	$direc = $_POST['direccion'];
	$telef = $_POST['telefono'];
	$est_civ = $_POST['estado_civil'];
	$depart = $_POST['departamento'];

	if($nom != ''&&$ape !=''&&$date !=''&&$direc !=''&&$telef!=''&&$est_civ!=''&&$depart!=''){
		$q_insert = "INSERT INTO empleado(nombre, apellido, fechadenacimiento,
			direccion, telefono, estado_civil, departamento)
			VALUES ('$nom', '$ape', '$date', '$direc', '$telef', 
			'$est_civ', '$depart')";
			$resp = $conn->query($q_insert);

			if(!$resp){
				echo '<div>Hay un error al insertar'.$conn->error.'</div>';
			}
			else{
				echo '<div>Dato ingresado correctamente</div>';
				header('Location: index.php');
			}
		}
		else{
				echo '<div>Ingrese Datos por Favor</div>';
			}
		}
?>