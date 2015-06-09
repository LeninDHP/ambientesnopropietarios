<?php

$conn = new Mysqli($host,$usuario,$cont,$bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);

//insertar

if($_POST){
	$aut = $_POST['autor'];
	$tit = $_POST['titulo'];
	$tip = $_POST['tipo'];
	$year = $_POST['anio'];
	if($aut != ''&&$tit != ''&&$tip != ''&&$year != ''){
		$q_insert = "INSERT INTO clasicos(autor, titulo, tipo, anio)
		VALUES ('$aut','$tit','$tip','$year')";

		$resp = $conn ->query($q_insert);

		if(!$resp){
			echo '<div>Hay un error al insertar'.$conn->error.'</div>';
		}
		else{

			echo '<div>Dato Ingresado</div>';

			header('Location: index.php');
		}
	}
	else{
		echo '<div>Ingrese Datos por favor</div>';
	}

	



}

