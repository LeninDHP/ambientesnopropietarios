
<html>
<head>
<meta charset="utf.8">
	<title>Literal 6</title>
	<link rel="stylesheet" type="text/css" href="css/jquerycss.css">
</head>

<body>
<script type="text/javascript" src="jscrip/jquery.js"></script>
<div>
	<li>Crear un documento con una tabla. Poner el fondo de las filas pares
en rojo. A continuaci&oacuten poner el fondo de las filas impares en verde.</li>
</div>
<br>
<br>
<div>Selecci&oacuten Tabla</div>
<br>
<table>
	<tr>
		<th>a</th>
		<th>b</th>
		<th>c</th>
		<th>d</th>
		<th>e</th>
	</tr>
	<tr>
	<td>1</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
	<tr><td>2</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td></tr>
	<tr><td>3</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td></tr>
	<tr><td>4</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td></tr>
	<tr><td>5</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td></tr>
	<tr><td>6</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td></tr>
</table>

<script type="text/javascript">
	
	$(document).ready(function(){

		$('tr:even').css('background','green');
		$('tr:odd').css('background','red');


		});
</script>

</body>
</html>