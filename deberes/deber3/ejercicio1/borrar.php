<?php

$conn = new Mysqli($host,$usuario,$cont,$bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);

//insertar

if($_POST){

	$id = $_POST['id'];
	$q_eliminate = "DELETE FROM clasicos WHERE id ='$id'";
	$r= $conn->query($q_eliminate);
	if(!$r){
		echo '<div>error al eliminar</div>';
	}else{
		echo '<div>dato eliminado</div>';
	}
}

$query = 'SELECT * FROM clasicos';

$result = $conn->query($query);

if(!$result)die($conn->error);

$num_rows = $result->num_rows;

header('Location: index.php');
?>




