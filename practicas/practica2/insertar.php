<?php

$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$nom = $_POST['nombre'];
	$email = $_POST['email'];
	$msn = $_POST['mensajes'];
	$noticias = $_POST['noticias'];

	if($nom != ''){
		$q_insert = "INSERT INTO mensaje(nombre, email, mensaje,
			noticias)
			VALUES ('$nom', '$email', '$msn', '$noticias')";
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