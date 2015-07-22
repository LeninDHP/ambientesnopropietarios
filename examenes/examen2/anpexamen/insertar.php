<?php

$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$nom = $_POST['nombre'];
	$usu = $_POST['usuario'];
	$cont = $_POST['contrasena'];
	$cont2 = md5($cont);

	
	if($nom != ''){
		$q_insert = "INSERT INTO usuarios(nombre, usuario, contrasena)
			VALUES ('$nom', '$usu', '$cont2')";
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