
<?php

$conn = new Mysqli($host,$usuario,$cont,$bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);
?>
<html>
<head>
	<title>Libros</title>
  <style type="text/css">
</style>
    <link href="css/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action ="insertar.php" method="post" style="background-color: #00FFCC">
<div class="style1">Ingresar Libros</div>
<div class="style1">
<label for="autor">Autor: </label>
<input type="text" name="autor" value="" id="autor">
</div>
<div class="style1">
<label for="titulo">T&iacute;tulo: </label>
<input type="text" name="titulo" value="" id="titulo">
</div>
<div class="style1">
<label for="tipo">Tipo: </label>
<input type="text" name="tipo" value="" id="tipo">
</div>
<div class="style1">
<label for="anio">A&ntilde;o: </label>
<input type="text" name="anio" value="" id="anio">
</div>
<div class="style1">
	<input type="submit" value="ingresar" name="ingresar" class="style1">
</div>
	
</form>
<?php
$query = 'SELECT * FROM clasicos';

$result = $conn->query($query);

if(!$result)die($conn->error);

$num_rows = $result->num_rows;
?>

<?php
echo'<table>';
echo'<tr>';
echo'<th>Autor</th>'; 
echo'<th>Titulo</th>'; 
echo'<th>Tipo</th>';
echo'<th>A&ntilde;o</th>'; 
echo'</tr>';
for($j = 0; $j < $num_rows; ++$j){
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_ASSOC);
echo'<tr>';
  echo '<td> ' . $row['autor'] . '</td>';
  echo '<td> ' . $row['titulo'] . '</td>';
  echo '<td> ' . $row['tipo'] . '</td>';
  echo '<td> ' . $row['anio'] . '</td>';
  echo '<td> 
  <form action ="borrar.php" method="post"  >
  <input type="submit" value="Eliminar" name="eliminar">
  <input type="hidden" value="' . $row['id'] . '"  name="id">
  </form></td>';
  echo'</tr>';

}

echo '</table>';
$result->close();
$conn->close();
?>



</body>
</html>