<?php

$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$nom = $_POST['nombre'];
	$usu = $_POST['usuario'];
	$email = $_POST['email'];
	$contr = $_POST['contrasena'];
	$verif = $_POST['verificar'];
	$direc = $_POST['direccion'];
	$telef = $_POST['telefono'];

	if($nom != ''&&$usu !=''&&$email !=''&&$contr !=''&&$verif!=''&&$contr !=''&&$verif!=''&&$telef!=''){
		$q_insert = "INSERT INTO registrar(nombre, usuario, email,
			contrasena, verificar, direccion, telefono)
			VALUES ('$nom', '$usu', '$email', '$contr', '$verif', 
			'$direc', '$telef')";
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