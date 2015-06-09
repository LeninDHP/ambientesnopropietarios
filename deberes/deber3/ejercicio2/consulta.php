<?php

$conn = new Mysqli($host,$usuario,$cont,$bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);

//Consulta

if($_POST){

	$id = $_POST['id'];
	$q_select = "SELECT * FROM empleado WHERE id ='$id'";
	$r= $conn->query($q_select);
	$dato=$r->fetch_array(MYSQLI_ASSOC);
}

?>

<html>
<head>
	<title>Modificar</title>
	<style type="text/css">
    </style>
    <link href="Css/Css.css" rel="stylesheet" type="text/css" />
</head>
<body>

<form method="post" action="modificar.php" style="background-color: #00FFCC">
<div class="style1">EDITAR EMPLEADO</div>
</br>
<div class="style1">
<div class="style1">
	<label for="nombre" margin >Nombre: </label>
	
	<input type="text" name="nombre" value="<?php echo $dato['nombre'];?>" id ="nombre">

</div>
</br>
<div class="style1">
	<label for="apellido">Apellido: </label>
	<input type="text" name="apellido" value="<?php echo $dato['apellido'];?>" id="apellido">
</div>
</br>
<div class="style1">
	<label for="fechadenacimiento">Fecha de Nacimiento:</label>
	<input type="text" name="fechadenacimiento" value="<?php echo $dato['fechadenacimiento'];?>" id="fechadenacimiento">
</div>
</br>
<div class="style1">
	<label for="direccion">Direcci&oacute;n: </label>
	<input type="text" name="direccion" value="<?php echo $dato['direccion'];?>" id="direccion">
</div>
</br>
<div class="style1">
	<label for="telefono">Tel&eacute;fono: </label>
	<input type="text" name="telefono" value="<?php echo $dato['telefono'];?>" id="telefono">
</div>
</br>
<div class="style1">
	<label for="estado_civil">Estado Civil: </label>
	<input type="text" name="estado_civil" value="<?php echo $dato['estado_civil'];?>" id="estado_civil">
</div>
</br>
<div class="style1">
	<label for="departamento">Departamento: </label>
	<input type="text" name="departamento" value="<?php echo $dato['departamento'];?>" id="departamento">
</div>
</br>
</br>
<input type="hidden" value="<?php echo $dato['id'];?>"  name="id">
<div>
	<input type="submit" value="Modificar" name="modificar" class="style1">
</div>
</br>
</br>
</form>
</body>
</html>
